<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbContatoTelefone Controller
 *
 * @property \App\Model\Table\TbContatoTelefoneTable $TbContatoTelefone
 */
class TbContatoTelefoneController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbContatoTelefone = $this->paginate($this->TbContatoTelefone);

        $this->set(compact('tbContatoTelefone'));
        $this->set('_serialize', ['tbContatoTelefone']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Contato Telefone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbContatoTelefone = $this->TbContatoTelefone->get($id, [
            'contain' => []
        ]);

        $this->set('tbContatoTelefone', $tbContatoTelefone);
        $this->set('_serialize', ['tbContatoTelefone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbContatoTelefone = $this->TbContatoTelefone->newEntity();
        if ($this->request->is('post')) {
            $tbContatoTelefone = $this->TbContatoTelefone->patchEntity($tbContatoTelefone, $this->request->data);
            if ($this->TbContatoTelefone->save($tbContatoTelefone)) {
                $this->Flash->success(__('The tb contato telefone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb contato telefone could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbContatoTelefone'));
        $this->set('_serialize', ['tbContatoTelefone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Contato Telefone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbContatoTelefone = $this->TbContatoTelefone->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbContatoTelefone = $this->TbContatoTelefone->patchEntity($tbContatoTelefone, $this->request->data);
            if ($this->TbContatoTelefone->save($tbContatoTelefone)) {
                $this->Flash->success(__('The tb contato telefone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb contato telefone could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbContatoTelefone'));
        $this->set('_serialize', ['tbContatoTelefone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Contato Telefone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbContatoTelefone = $this->TbContatoTelefone->get($id);
        if ($this->TbContatoTelefone->delete($tbContatoTelefone)) {
            $this->Flash->success(__('The tb contato telefone has been deleted.'));
        } else {
            $this->Flash->error(__('The tb contato telefone could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
