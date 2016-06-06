<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbCidade Controller
 *
 * @property \App\Model\Table\TbCidadeTable $TbCidade
 */
class TbCidadeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbCidade = $this->paginate($this->TbCidade);

        $this->set(compact('tbCidade'));
        $this->set('_serialize', ['tbCidade']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Cidade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbCidade = $this->TbCidade->get($id, [
            'contain' => []
        ]);

        $this->set('tbCidade', $tbCidade);
        $this->set('_serialize', ['tbCidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbCidade = $this->TbCidade->newEntity();
        if ($this->request->is('post')) {
            $tbCidade = $this->TbCidade->patchEntity($tbCidade, $this->request->data);
            if ($this->TbCidade->save($tbCidade)) {
                $this->Flash->success(__('The tb cidade has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb cidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbCidade'));
        $this->set('_serialize', ['tbCidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Cidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbCidade = $this->TbCidade->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbCidade = $this->TbCidade->patchEntity($tbCidade, $this->request->data);
            if ($this->TbCidade->save($tbCidade)) {
                $this->Flash->success(__('The tb cidade has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb cidade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbCidade'));
        $this->set('_serialize', ['tbCidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Cidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbCidade = $this->TbCidade->get($id);
        if ($this->TbCidade->delete($tbCidade)) {
            $this->Flash->success(__('The tb cidade has been deleted.'));
        } else {
            $this->Flash->error(__('The tb cidade could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
