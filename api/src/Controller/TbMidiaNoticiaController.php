<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbMidiaNoticia Controller
 *
 * @property \App\Model\Table\TbMidiaNoticiaTable $TbMidiaNoticia
 */
class TbMidiaNoticiaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbMidiaNoticia = $this->paginate($this->TbMidiaNoticia);

        $this->set(compact('tbMidiaNoticia'));
        $this->set('_serialize', ['tbMidiaNoticia']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Midia Noticium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbMidiaNoticium = $this->TbMidiaNoticia->get($id, [
            'contain' => []
        ]);

        $this->set('tbMidiaNoticium', $tbMidiaNoticium);
        $this->set('_serialize', ['tbMidiaNoticium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbMidiaNoticium = $this->TbMidiaNoticia->newEntity();
        if ($this->request->is('post')) {
            $tbMidiaNoticium = $this->TbMidiaNoticia->patchEntity($tbMidiaNoticium, $this->request->data);
            if ($this->TbMidiaNoticia->save($tbMidiaNoticium)) {
                $this->Flash->success(__('The tb midia noticium has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb midia noticium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbMidiaNoticium'));
        $this->set('_serialize', ['tbMidiaNoticium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Midia Noticium id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbMidiaNoticium = $this->TbMidiaNoticia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbMidiaNoticium = $this->TbMidiaNoticia->patchEntity($tbMidiaNoticium, $this->request->data);
            if ($this->TbMidiaNoticia->save($tbMidiaNoticium)) {
                $this->Flash->success(__('The tb midia noticium has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb midia noticium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbMidiaNoticium'));
        $this->set('_serialize', ['tbMidiaNoticium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Midia Noticium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbMidiaNoticium = $this->TbMidiaNoticia->get($id);
        if ($this->TbMidiaNoticia->delete($tbMidiaNoticium)) {
            $this->Flash->success(__('The tb midia noticium has been deleted.'));
        } else {
            $this->Flash->error(__('The tb midia noticium could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
