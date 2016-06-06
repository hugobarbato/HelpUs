<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception;
use Cake\Utility\Security;
use Firebase\JWT\JWT;
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
        $this->Auth->allow(['add', 'token']);
    }
    
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

    /**
     * Edit method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbUsuario = $this->TbUsuario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbUsuario = $this->TbUsuario->patchEntity($tbUsuario, $this->request->data);
            if ($this->TbUsuario->save($tbUsuario)) {
                $this->Flash->success(__('The tb usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbUsuario'));
        $this->set('_serialize', ['tbUsuario']);
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
    
    public function token()
    {
        $user = $this->Auth->identify();
        $this->set('response', $user);
       /* if(){
			$user = $this->Auth->identify();
// 			$exUser = [
// 				    	"cd_usuario" => $user['cd_usuario'],
// 				    	"nm_usuario" => $user['nm_usuario'],
// 				    	"active" => $user['active'],
// 				    	"ic_nivel" => $user['ic_nivel']
// 				      ];
// 			$token = JWT::encode($exUser, Configure::read('Security.salt'));
// 			$response = array('data' => $token);
			$this->set('response', $user);
		}else {
			throw new NotAcceptableException(__('Email or password is wrong.'));
		}*/
    }
}
