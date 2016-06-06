<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbEndereco Controller
 *
 * @property \App\Model\Table\TbEnderecoTable $TbEndereco
 */
class TbEnderecoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbEndereco = $this->paginate($this->TbEndereco);

        $this->set(compact('tbEndereco'));
        $this->set('_serialize', ['tbEndereco']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Endereco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbEndereco = $this->TbEndereco->get($id, [
            'contain' => []
        ]);

        $this->set('tbEndereco', $tbEndereco);
        $this->set('_serialize', ['tbEndereco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbEndereco = $this->TbEndereco->newEntity();
        if ($this->request->is('post')) {
            $tbEndereco = $this->TbEndereco->patchEntity($tbEndereco, $this->request->data);
            if ($this->TbEndereco->save($tbEndereco)) {
                $this->Flash->success(__('The tb endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb endereco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbEndereco'));
        $this->set('_serialize', ['tbEndereco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Endereco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbEndereco = $this->TbEndereco->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbEndereco = $this->TbEndereco->patchEntity($tbEndereco, $this->request->data);
            if ($this->TbEndereco->save($tbEndereco)) {
                $this->Flash->success(__('The tb endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb endereco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbEndereco'));
        $this->set('_serialize', ['tbEndereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Endereco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbEndereco = $this->TbEndereco->get($id);
        if ($this->TbEndereco->delete($tbEndereco)) {
            $this->Flash->success(__('The tb endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The tb endereco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
