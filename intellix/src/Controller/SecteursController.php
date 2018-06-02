<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Secteurs Controller
 *
 * @property \App\Model\Table\SecteursTable $Secteurs
 *
 * @method \App\Model\Entity\Secteur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SecteursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $secteurs = $this->paginate($this->Secteurs);

        $this->set(compact('secteurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Secteur id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $secteur = $this->Secteurs->get($id, [
            'contain' => ['Users', 'Accounts', 'Contacts', 'Leads']
        ]);

        $this->set('secteur', $secteur);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $secteur = $this->Secteurs->newEntity();
        if ($this->request->is('post')) {
            $secteur = $this->Secteurs->patchEntity($secteur, $this->request->getData());
            if ($this->Secteurs->save($secteur)) {
                $this->Flash->success(__('The secteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The secteur could not be saved. Please, try again.'));
        }
        $users = $this->Secteurs->Users->find('list', ['limit' => 200]);
        $this->set(compact('secteur', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Secteur id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $secteur = $this->Secteurs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secteur = $this->Secteurs->patchEntity($secteur, $this->request->getData());
            if ($this->Secteurs->save($secteur)) {
                $this->Flash->success(__('The secteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The secteur could not be saved. Please, try again.'));
        }
        $users = $this->Secteurs->Users->find('list', ['limit' => 200]);
        $this->set(compact('secteur', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Secteur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $secteur = $this->Secteurs->get($id);
        if ($this->Secteurs->delete($secteur)) {
            $this->Flash->success(__('The secteur has been deleted.'));
        } else {
            $this->Flash->error(__('The secteur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
