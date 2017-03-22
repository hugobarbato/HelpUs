<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbNoticia Controller
 *
 * @property \App\Model\Table\TbNoticiaTable $TbNoticia
 */
class TbNoticiaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbNoticia = $this->paginate($this->TbNoticia);

        $this->set(compact('tbNoticia'));
        $this->set('_serialize', ['tbNoticia']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Noticium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbNoticium = $this->TbNoticia->get($id, [
            'contain' => []
        ]);

        $this->set('tbNoticium', $tbNoticium);
        $this->set('_serialize', ['tbNoticium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbNoticia = $this->TbNoticia->newEntity();
        if ($this->request->is('post')) {
            $tbNoticia = $this->TbNoticia->patchEntity($tbNoticia, $this->request->data);
            if ($this->TbNoticia->save($tbNoticia)) {
                $tbNoticia = 1;
                $this->Flash->success(__('The tb noticia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $tbNoticia = 0;
                $this->Flash->error(__('The tb noticia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbNoticia'));
        $this->set('_serialize', ['tbNoticia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Noticium id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbNoticium = $this->TbNoticia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbNoticia = $this->TbNoticia->patchEntity($tbNoticia, $this->request->data);
            if ($this->TbNoticia->save($tbNoticia)) {
                $this->Flash->success(__('The tb noticia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb noticia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbNoticia'));
        $this->set('_serialize', ['tbNoticia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Noticium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbNoticia = $this->TbNoticia->get($id);
        if ($this->TbNoticia->delete($tbNoticia)) {
            $this->Flash->success(__('The tb noticia has been deleted.'));
        } else {
            $this->Flash->error(__('The tb noticia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
