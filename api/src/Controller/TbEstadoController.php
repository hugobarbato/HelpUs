<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbEstado Controller
 *
 * @property \App\Model\Table\TbEstadoTable $TbEstado
 */
class TbEstadoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbEstado = $this->paginate($this->TbEstado);

        $this->set(compact('tbEstado'));
        $this->set('_serialize', ['tbEstado']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Estado id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbEstado = $this->TbEstado->get($id, [
            'contain' => []
        ]);

        $this->set('tbEstado', $tbEstado);
        $this->set('_serialize', ['tbEstado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbEstado = $this->TbEstado->newEntity();
        if ($this->request->is('post')) {
            $tbEstado = $this->TbEstado->patchEntity($tbEstado, $this->request->data);
            if ($this->TbEstado->save($tbEstado)) {
                $this->Flash->success(__('The tb estado has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb estado could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbEstado'));
        $this->set('_serialize', ['tbEstado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Estado id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbEstado = $this->TbEstado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbEstado = $this->TbEstado->patchEntity($tbEstado, $this->request->data);
            if ($this->TbEstado->save($tbEstado)) {
                $this->Flash->success(__('The tb estado has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb estado could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbEstado'));
        $this->set('_serialize', ['tbEstado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Estado id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbEstado = $this->TbEstado->get($id);
        if ($this->TbEstado->delete($tbEstado)) {
            $this->Flash->success(__('The tb estado has been deleted.'));
        } else {
            $this->Flash->error(__('The tb estado could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
