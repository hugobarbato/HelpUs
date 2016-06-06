<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbBairro Controller
 *
 * @property \App\Model\Table\TbBairroTable $TbBairro
 */
class TbBairroController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbBairro = $this->paginate($this->TbBairro);

        $this->set(compact('tbBairro'));
        $this->set('_serialize', ['tbBairro']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Bairro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbBairro = $this->TbBairro->get($id, [
            'contain' => []
        ]);

        $this->set('tbBairro', $tbBairro);
        $this->set('_serialize', ['tbBairro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbBairro = $this->TbBairro->newEntity();
        if ($this->request->is('post')) {
            $tbBairro = $this->TbBairro->patchEntity($tbBairro, $this->request->data);
            if ($this->TbBairro->save($tbBairro)) {
                $this->Flash->success(__('The tb bairro has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb bairro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbBairro'));
        $this->set('_serialize', ['tbBairro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Bairro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbBairro = $this->TbBairro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbBairro = $this->TbBairro->patchEntity($tbBairro, $this->request->data);
            if ($this->TbBairro->save($tbBairro)) {
                $this->Flash->success(__('The tb bairro has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb bairro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbBairro'));
        $this->set('_serialize', ['tbBairro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Bairro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbBairro = $this->TbBairro->get($id);
        if ($this->TbBairro->delete($tbBairro)) {
            $this->Flash->success(__('The tb bairro has been deleted.'));
        } else {
            $this->Flash->error(__('The tb bairro could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
