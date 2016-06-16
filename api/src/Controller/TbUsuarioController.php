<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use App\Model\Entity\TbDoacao;
use App\Model\Entity\TbProduto;
use App\Model\Entity\TbImgProduto;
use App\Model\Entity\TbEndereco;
use App\Model\Entity\TbContatoTelefone;
use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;
use Firebase\JWT\JWT;
use Cake\Auth\DefaultPasswordHasher;

/**
 * TbUsuario Controller
 *
 * @property \App\Model\Table\TbUsuarioTable $TbUsuario
 */
class TbUsuarioController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }
    
    public function index()
    {
        $tbUsuario = $this->paginate($this->TbUsuario);

        $this->set(compact('tbUsuario'));
        $this->set('_serialize', ['tbUsuario']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbUsuario = $this->TbUsuario->get($id, [
            'contain' => []
        ]);

        $this->set('tbUsuario', $tbUsuario);
        $this->set('_serialize', ['tbUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbUsuario = $this->TbUsuario->newEntity();
        if ($this->request->is('post')) {
             // Pegando dados da requisição
             $data = $this->request->data;
             // Enderecos
             $Enderecos = $data['Endereco'];
             // contatos
             $Contatos = $data['contatos'];
             // Entity usuário
             $tbUsuario->set([
                "nm_usuario"=> $data["nome"], 
                "dt_nascimento"=> $data["nascimento"],
                "ic_sexo"=> $data["sexo"],
                "nm_email"=> $data["email"],
                "cd_senha"=> $data["senha"],
                "dt_cadastro"=> date("Y-m-d H:i:s"),
                "ic_ativo"=> 1,
                "ic_nivel"=> 1
             ]);
             // Salvando usuário
             if($this->TbUsuario->save($tbUsuario)){
                  // Retorno da criação do Usuário
                  //$user = $event->subject;
                  $returnUser = array(
                        'id' =>  $tbUsuario['cd_usuario'] . " - " . $tbUsuario['nm_usuario'],
                        'token' => JWT::encode(
                            [
                                'sub' => $tbUsuario['cd_usuario'],
                                'name' => $tbUsuario['nm_usuario'],
                                'nivel' => $tbUsuario['ic_nivel'],
                                'exp' =>  time() + 604800
                            ],
                        Security::salt())
                  );
                  
                  // Variavel de conexão
                  $conn = ConnectionManager::get('default');
                  // Result da consulta obter cd_bairro
                  $stmt = $conn->execute(
                        'select cd_bairro from tb_bairro where nm_bairro = ? and cd_cidade = 
                        (select cd_cidade from tb_cidade where nm_cidade = ? and cd_estado = 
                        (select cd_estado from tb_estado where sg_estado = ?));',
                        [$Enderecos['bairro'], $Enderecos['cidade'], $Enderecos['estado']]
                  );
                  // Pegando resultado
                  $bairro = $stmt->fetch('assoc');
                  //Criando Acesso a registro da tabela
                  $tableEndereco = TableRegistry::get('tbEndereco');
                  // Entidade endereço 
                  $tbEndereco = new tbEndereco([
                        "cd_cep"=> $Enderecos["cep"],
                        "nm_endereco"=> $Enderecos["endereco"],
                        "nm_numero"=> $Enderecos["numero"],
                        "cd_bairro" => $bairro['cd_bairro'],
                        "cd_usuario" => $tbUsuario['cd_usuario']
                  ]);
                  //Salvando Endereço
                  if($tableEndereco->save($tbEndereco)){
                        //Retorno endereço
                        $returnEnd= array( 'id' =>  $tbEndereco['cd_endereco']);
                        // Criado Acesso a registros contatos
                        $tableContato = TableRegistry::get('tbContatoTelefone');
                        $regContato = array();
                        // Laço para cada contato em contatos
                        foreach($Contatos as $key => $value){
                            //Entiy contato vazia
                            $tel = new tbContatoTelefone([
                                "nm_telefone" => $value,
                                "cd_usuario" => $tbUsuario['cd_usuario']
                            ]);
                            // Salvando contrato
                            if($tableContato->save($tel)){
                                array_push($regContato, ["cd_telefone" => $tel['cd_contato_telefone']]);
                            }else{
                                array_push($regContato, ["cd_telefone" => null]);
                            }
                        }
                        
                        $response = array ('user' => $returnUser, 'endereço' => $returnEnd, 'contatos' => $regContato);
                        // Response 
                        $this->set('response', $response);
                  }
                  else{
                       $this->set('response', $returnUser);
                  }
             }else{
                 $erro = array();
                 foreach ($tbUsuario->errors() as $key => $value){
                     array_push($erro, $value);
                 }
                 $this->set('response', ['code'=> 0, 'errors' => $erro]);
            }
    }else{
            $this->set('response', ['code' => 0]);
    }
    $this->set('_serialize', ['response']);
    }
    
    public function doar(){
        //Definindo variaveis de acesso as tabelas de registro
        $doacoesTable = TableRegistry::get('tbDoacao');
        $produtoTable = TableRegistry::get('tbProduto');
        $imgProdutoTable = TableRegistry::get('tbImgProduto');
        // Obtendo dados da requisição
        $data = $this->request->data;
        //Verificando se a doação não está vazia e contem produtos
        if(!empty($data) && empty($data['tbProdutos'])){
            // Definindo entidade doacao        
            $doacao = new tbDoacao();
            // setando seu atributos
            $doacao->set([
                    'dt_oferecimento_doacao' => date("Y-m-d H:i:s"),
                    'ic_ofertado' => 1,
                    'cd_usuario' => $data["cd_usuario"]
                ]);
            // Salvando registro de entrada de doacao
            $doacao = $doacoesTable->save($doacao);
            // laço for each (para cada) produto
            foreach($data["tbProdutos"] as $key => $produto){
                // Definindo nova entidade produto
                $tbProduto = new tbProduto();
                // Setando seu atributos
                $tbProduto->set([
                    'cd_categoria' => $produto["cd_categoria"],
                    'ds_produto'=>$produto["ds_produto"],
                    'qt_produto'=>$produto["qt_produto"],
                    'nm_produto'=>$produto["nm_produto"],
                    'cd_doacao'=>$doacao['cd_doacao']
                ]);
                // Salvando dados no banco
                $tbProduto = $produtoTable->save($tbProduto);
                    // Verificando se há imagens do produto
                    if(!empty($produto["tbImgProdutos"])){
                        // Laço for each (para cada) imagem do produto        
                        foreach($produto["tbImgProdutos"] as $key => $img){
                            // definindo entidade imagem
                            $tbImgProduto = new tbImgProduto();
                            // Setando seu atributos
                            $tbImgProduto->set(
                                [
                                    "nm_endereco"=> $img['nm_endereco'],
                                    "nm_extensao"=> $img['nm_extensao'],
                                    "cd_produto"=> $tbProduto['cd_produto']
                                ]
                            );
                            //salvando referencia no banco
                            $imgProdutoTable->save($tbImgProduto);
                        }
                    }
            }
            $response = 1;
        }
        else $response = 0;
        
        $this->set(compact('response'));
        
        $this->set('_serialize', ['response']);
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbUsuario = $this->TbUsuario->get($id);
        if ($this->request->is(['post', 'put'])) {
            $tbUsuario = $this->TbUsuario->patchEntity($tbUsuario, $this->request->data);
            if ($this->TbUsuario->save($tbUsuario)) {
                $response = 1;
            } else {
                $response = 0;
            }
        }else {
                $response = 0;
        }
        $this->set(compact('response'));
        $this->set('_serialize', ['response']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbUsuario = $this->TbUsuario->get($id);
        if ($this->TbUsuario->delete($tbUsuario)) {
            $this->Flash->success(__('The tb usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tb usuario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {

        /*if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário ou senha ínvalido, tente novamente'));
        }*/
        $data = $this->request->data;
        $user = TableRegistry::get('tbUsuario')->find()
            ->where([
                'nm_email' => $data['email'], 
                'cd_senha' => $data['password']
            ])
            ->first();
        
        $this->set([
            'result' => $user,
            '_serialize' => ['result']
        ]);
        /*if (!$user) {
            throw new UnauthorizedException('Invalid username or password');
        }
    
        $this->set([
            'success' => true,
            'data' => [
                'token' => JWT::encode([
                    'sub' => $user['id'],
                    'exp' =>  time() + 604800
                ],
                Security::salt())
            ],
            '_serialize' => ['success', 'data']
        ]);*/
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }


}
