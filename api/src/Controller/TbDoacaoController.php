<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbDoacao Controller
 *
 * @property \App\Model\Table\TbDoacaoTable $TbDoacao
 */
class TbDoacaoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbDoacao = $this->paginate($this->TbDoacao);

        $this->set(compact('tbDoacao'));
        $this->set('_serialize', ['tbDoacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Doacao id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbDoacao = $this->TbDoacao->get($id, [
            'contain' => []
        ]);

        $this->set('tbDoacao', $tbDoacao);
        $this->set('_serialize', ['tbDoacao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbDoacao = $this->TbDoacao->newEntity();
        if ($this->request->is('post')) {
            $tbDoacao = $this->TbDoacao->patchEntity($tbDoacao, $this->request->data);
            if ($this->TbDoacao->save($tbDoacao)) {
                $this->Flash->success(__('The tb doacao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb doacao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbDoacao'));
        $this->set('_serialize', ['tbDoacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Doacao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbDoacao = $this->TbDoacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbDoacao = $this->TbDoacao->patchEntity($tbDoacao, $this->request->data);
            if ($this->TbDoacao->save($tbDoacao)) {
                $this->Flash->success(__('The tb doacao has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb doacao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbDoacao'));
        $this->set('_serialize', ['tbDoacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Doacao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbDoacao = $this->TbDoacao->get($id);
        if ($this->TbDoacao->delete($tbDoacao)) {
            $this->Flash->success(__('The tb doacao has been deleted.'));
        } else {
            $this->Flash->error(__('The tb doacao could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
