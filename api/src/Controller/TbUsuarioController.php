<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\TbDoacao;
use App\Model\Entity\TbProduto;
use Cake\Event\Event;
use Cake\Network\Exception;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;
use Firebase\JWT\JWT;
/**
 * TbUsuario Controller
 *
 * @property \App\Model\Table\TbUsuarioTable $TbUsuario
 */
class TbUsuarioController extends AppController
{
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
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
        $this->Crud->on('afterSave', function(Event $event) {
            if ($event->subject->created) {
                $user = $event->subject;
                $this->set('data', [
                    'id' =>  $user->entity,
                    'token' => JWT::encode(
                        [
                            'sub' => $user->entity,
                            'exp' =>  time() + 604800
                        ],
                    Security::salt())
                ]);
                $this->Crud->action()->config('serialize.data', 'data');
            }
        });
        return $this->Crud->execute();
    }
    
    public function doar(){
        $data = $this->request->data;
        if(!empty($data)){
            $doacao = new tbDoacao();
            $doacao->set([
                    'dt_oferecimento_doacao' => date("Y-m-d H:i:s"),
                    'ic_ofertado' => 1,
                    'cd_usuario' => $data["cd_usuario"]
                ]);
            $doacoesTable = TableRegistry::get('tbDoacao');
            $doacao = $doacoesTable->save($doacao);
            
            foreach($data["tbProdutos"] as $produto){
                $produto = new tbProduto();
                $produto->set([
                    'cd_categoria' => $produto["cd_categoria"],
                    'ds_produto'=>$produto["ds_produto"],
                    'qt_produto'=>$produto["qt_produto"],
                    'nm_produto'=>$produto["nm_produto"],
                    'cd_doacao'=>$doacao['cd_doacao']
                ]);
                $produtoTable = TableRegistry::get('tbProduto');
                $produtos = $doacoesTable->save($produto);
            }
            
        }
        $response = $produtos;
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
    
  
}
