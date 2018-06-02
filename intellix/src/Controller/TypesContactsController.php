<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypesContacts Controller
 *
 * @property \App\Model\Table\TypesContactsTable $TypesContacts
 *
 * @method \App\Model\Entity\TypesContact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypesContactsController extends AppController
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
        $typesContacts = $this->paginate($this->TypesContacts);

        $this->set(compact('typesContacts'));
    }

    /**
     * View method
     *
     * @param string|null $id Types Contact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typesContact = $this->TypesContacts->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('typesContact', $typesContact);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typesContact = $this->TypesContacts->newEntity();
        if ($this->request->is('post')) {
            $typesContact = $this->TypesContacts->patchEntity($typesContact, $this->request->getData());
            if ($this->TypesContacts->save($typesContact)) {
                $this->Flash->success(__('The types contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types contact could not be saved. Please, try again.'));
        }
        $users = $this->TypesContacts->Users->find('list', ['limit' => 200]);
        $this->set(compact('typesContact', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Types Contact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typesContact = $this->TypesContacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typesContact = $this->TypesContacts->patchEntity($typesContact, $this->request->getData());
            if ($this->TypesContacts->save($typesContact)) {
                $this->Flash->success(__('The types contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types contact could not be saved. Please, try again.'));
        }
        $users = $this->TypesContacts->Users->find('list', ['limit' => 200]);
        $this->set(compact('typesContact', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Types Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typesContact = $this->TypesContacts->get($id);
        if ($this->TypesContacts->delete($typesContact)) {
            $this->Flash->success(__('The types contact has been deleted.'));
        } else {
            $this->Flash->error(__('The types contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
