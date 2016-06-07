<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbInstituicao Controller
 *
 * @property \App\Model\Table\TbInstituicaoTable $TbInstituicao
 */
class TbInstituicaoController extends AppController
{



    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbInstituicao = $this->paginate($this->TbInstituicao);

        $this->set(compact('tbInstituicao'));
        $this->set('_serialize', ['tbInstituicao']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Instituicao id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbInstituicao = $this->TbInstituicao->get($id, [
            'contain' => []
        ]);

        $this->set('tbInstituicao', $tbInstituicao);
        $this->set('_serialize', ['tbInstituicao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbInstituicao = $this->TbInstituicao->newEntity();
        if ($this->request->is('post')) {
            $tbInstituicao = $this->TbInstituicao->patchEntity($tbInstituicao, $this->request->data);
            if ($this->TbInstituicao->save($tbInstituicao)) {
               $response = array('code' => 1);
            } else {
               $response = array('code' => 0);
            }
        }
        $this->set(compact('response'));
        $this->set('_serialize', ['response']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Instituicao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbInstituicao = $this->TbInstituicao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbInstituicao = $this->TbInstituicao->patchEntity($tbInstituicao, $this->request->data);
            if ($this->TbInstituicao->save($tbInstituicao)) {
                $this->Flash->success(__('The tb instituicao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb instituicao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbInstituicao'));
        $this->set('_serialize', ['tbInstituicao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Instituicao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbInstituicao = $this->TbInstituicao->get($id);
        if ($this->TbInstituicao->delete($tbInstituicao)) {
            $this->Flash->success(__('The tb instituicao has been deleted.'));
        } else {
            $this->Flash->error(__('The tb instituicao could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
