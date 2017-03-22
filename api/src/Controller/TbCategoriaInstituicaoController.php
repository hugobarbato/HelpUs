<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbCategoriaInstituicao Controller
 *
 * @property \App\Model\Table\TbCategoriaInstituicaoTable $TbCategoriaInstituicao
 */
class TbCategoriaInstituicaoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbCategoriaInstituicao = $this->paginate($this->TbCategoriaInstituicao);

        $this->set(compact('tbCategoriaInstituicao'));
        $this->set('_serialize', ['tbCategoriaInstituicao']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Categoria Instituicao id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbCategoriaInstituicao = $this->TbCategoriaInstituicao->get($id, [
            'contain' => []
        ]);

        $this->set('tbCategoriaInstituicao', $tbCategoriaInstituicao);
        $this->set('_serialize', ['tbCategoriaInstituicao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbCategoriaInstituicao = $this->TbCategoriaInstituicao->newEntity();
        if ($this->request->is('post')) {
            $tbCategoriaInstituicao = $this->TbCategoriaInstituicao->patchEntity($tbCategoriaInstituicao, $this->request->data);
            if ($this->TbCategoriaInstituicao->save($tbCategoriaInstituicao)) {
                $this->Flash->success(__('The tb categoria instituicao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb categoria instituicao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbCategoriaInstituicao'));
        $this->set('_serialize', ['tbCategoriaInstituicao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Categoria Instituicao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbCategoriaInstituicao = $this->TbCategoriaInstituicao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbCategoriaInstituicao = $this->TbCategoriaInstituicao->patchEntity($tbCategoriaInstituicao, $this->request->data);
            if ($this->TbCategoriaInstituicao->save($tbCategoriaInstituicao)) {
                $this->Flash->success(__('The tb categoria instituicao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb categoria instituicao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbCategoriaInstituicao'));
        $this->set('_serialize', ['tbCategoriaInstituicao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Categoria Instituicao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbCategoriaInstituicao = $this->TbCategoriaInstituicao->get($id);
        if ($this->TbCategoriaInstituicao->delete($tbCategoriaInstituicao)) {
            $this->Flash->success(__('The tb categoria instituicao has been deleted.'));
        } else {
            $this->Flash->error(__('The tb categoria instituicao could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
