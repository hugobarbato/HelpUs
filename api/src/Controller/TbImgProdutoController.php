<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbImgProduto Controller
 *
 * @property \App\Model\Table\TbImgProdutoTable $TbImgProduto
 */
class TbImgProdutoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbImgProduto = $this->paginate($this->TbImgProduto);

        $this->set(compact('tbImgProduto'));
        $this->set('_serialize', ['tbImgProduto']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Img Produto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbImgProduto = $this->TbImgProduto->get($id, [
            'contain' => []
        ]);

        $this->set('tbImgProduto', $tbImgProduto);
        $this->set('_serialize', ['tbImgProduto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbImgProduto = $this->TbImgProduto->newEntity();
        if ($this->request->is('post')) {
            $tbImgProduto = $this->TbImgProduto->patchEntity($tbImgProduto, $this->request->data);
            if ($this->TbImgProduto->save($tbImgProduto)) {
                $this->Flash->success(__('The tb img produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb img produto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbImgProduto'));
        $this->set('_serialize', ['tbImgProduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Img Produto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbImgProduto = $this->TbImgProduto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbImgProduto = $this->TbImgProduto->patchEntity($tbImgProduto, $this->request->data);
            if ($this->TbImgProduto->save($tbImgProduto)) {
                $this->Flash->success(__('The tb img produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb img produto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbImgProduto'));
        $this->set('_serialize', ['tbImgProduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Img Produto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbImgProduto = $this->TbImgProduto->get($id);
        if ($this->TbImgProduto->delete($tbImgProduto)) {
            $this->Flash->success(__('The tb img produto has been deleted.'));
        } else {
            $this->Flash->error(__('The tb img produto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
