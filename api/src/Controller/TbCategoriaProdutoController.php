<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbCategoriaProduto Controller
 *
 * @property \App\Model\Table\TbCategoriaProdutoTable $TbCategoriaProduto
 */
class TbCategoriaProdutoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbCategoriaProduto = $this->paginate($this->TbCategoriaProduto);

        $this->set(compact('tbCategoriaProduto'));
        $this->set('_serialize', ['tbCategoriaProduto']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Categoria Produto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbCategoriaProduto = $this->TbCategoriaProduto->get($id, [
            'contain' => []
        ]);

        $this->set('tbCategoriaProduto', $tbCategoriaProduto);
        $this->set('_serialize', ['tbCategoriaProduto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbCategoriaProduto = $this->TbCategoriaProduto->newEntity();
        if ($this->request->is('post')) {
            $tbCategoriaProduto = $this->TbCategoriaProduto->patchEntity($tbCategoriaProduto, $this->request->data);
            if ($this->TbCategoriaProduto->save($tbCategoriaProduto)) {
                $this->Flash->success(__('The tb categoria produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb categoria produto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbCategoriaProduto'));
        $this->set('_serialize', ['tbCategoriaProduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Categoria Produto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbCategoriaProduto = $this->TbCategoriaProduto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbCategoriaProduto = $this->TbCategoriaProduto->patchEntity($tbCategoriaProduto, $this->request->data);
            if ($this->TbCategoriaProduto->save($tbCategoriaProduto)) {
                $this->Flash->success(__('The tb categoria produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb categoria produto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbCategoriaProduto'));
        $this->set('_serialize', ['tbCategoriaProduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Categoria Produto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbCategoriaProduto = $this->TbCategoriaProduto->get($id);
        if ($this->TbCategoriaProduto->delete($tbCategoriaProduto)) {
            $this->Flash->success(__('The tb categoria produto has been deleted.'));
        } else {
            $this->Flash->error(__('The tb categoria produto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
