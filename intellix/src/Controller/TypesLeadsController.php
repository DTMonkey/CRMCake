<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypesLeads Controller
 *
 * @property \App\Model\Table\TypesLeadsTable $TypesLeads
 *
 * @method \App\Model\Entity\TypesLead[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypesLeadsController extends AppController
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
        $typesLeads = $this->paginate($this->TypesLeads);

        $this->set(compact('typesLeads'));
    }

    /**
     * View method
     *
     * @param string|null $id Types Lead id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typesLead = $this->TypesLeads->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('typesLead', $typesLead);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typesLead = $this->TypesLeads->newEntity();
        if ($this->request->is('post')) {
            $typesLead = $this->TypesLeads->patchEntity($typesLead, $this->request->getData());
            if ($this->TypesLeads->save($typesLead)) {
                $this->Flash->success(__('The types lead has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types lead could not be saved. Please, try again.'));
        }
        $users = $this->TypesLeads->Users->find('list', ['limit' => 200]);
        $this->set(compact('typesLead', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Types Lead id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typesLead = $this->TypesLeads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typesLead = $this->TypesLeads->patchEntity($typesLead, $this->request->getData());
            if ($this->TypesLeads->save($typesLead)) {
                $this->Flash->success(__('The types lead has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types lead could not be saved. Please, try again.'));
        }
        $users = $this->TypesLeads->Users->find('list', ['limit' => 200]);
        $this->set(compact('typesLead', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Types Lead id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typesLead = $this->TypesLeads->get($id);
        if ($this->TypesLeads->delete($typesLead)) {
            $this->Flash->success(__('The types lead has been deleted.'));
        } else {
            $this->Flash->error(__('The types lead could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
