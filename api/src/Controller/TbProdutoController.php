<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbProduto Controller
 *
 * @property \App\Model\Table\TbProdutoTable $TbProduto
 */
class TbProdutoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbProduto = $this->paginate($this->TbProduto);

        $this->set(compact('tbProduto'));
        $this->set('_serialize', ['tbProduto']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Produto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbProduto = $this->TbProduto->get($id, [
            'contain' => []
        ]);

        $this->set('tbProduto', $tbProduto);
        $this->set('_serialize', ['tbProduto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbProduto = $this->TbProduto->newEntity();
        if ($this->request->is('post')) {
            $tbProduto = $this->TbProduto->patchEntity($tbProduto, $this->request->data);
            if ($this->TbProduto->save($tbProduto)) {
                $this->Flash->success(__('The tb produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb produto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbProduto'));
        $this->set('_serialize', ['tbProduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Produto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbProduto = $this->TbProduto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbProduto = $this->TbProduto->patchEntity($tbProduto, $this->request->data);
            if ($this->TbProduto->save($tbProduto)) {
                $this->Flash->success(__('The tb produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb produto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbProduto'));
        $this->set('_serialize', ['tbProduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Produto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbProduto = $this->TbProduto->get($id);
        if ($this->TbProduto->delete($tbProduto)) {
            $this->Flash->success(__('The tb produto has been deleted.'));
        } else {
            $this->Flash->error(__('The tb produto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
