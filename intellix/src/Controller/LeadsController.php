<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Leads Controller
 *
 * @property \App\Model\Table\LeadsTable $Leads
 *
 * @method \App\Model\Entity\Lead[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeadsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SalePhases', 'Campaigns', 'Users', 'PaidTo', 'Secteurs', 'Leads', 'SourceProspects']
        ];
        $leads = $this->paginate($this->Leads);

        $this->set(compact('leads'));
    }

    /**
     * View method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lead = $this->Leads->get($id, [
            'contain' => ['SalePhases', 'Campaigns', 'Users', 'PaidTo', 'Secteurs', 'Leads', 'SourceProspects', 'Accounts', 'Contacts']
        ]);

        $this->set('lead', $lead);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lead = $this->Leads->newEntity();
        if ($this->request->is('post')) {
            $lead = $this->Leads->patchEntity($lead, $this->request->getData());
            if ($this->Leads->save($lead)) {
                $this->Flash->success(__('The lead has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lead could not be saved. Please, try again.'));
        }
        $salePhases = $this->Leads->SalePhases->find('list', ['limit' => 200]);
        $campaigns = $this->Leads->Campaigns->find('list', ['limit' => 200]);
        $users = $this->Leads->Users->find('list', ['limit' => 200]);
        $paidTo = $this->Leads->PaidTo->find('list', ['limit' => 200]);
        $secteurs = $this->Leads->Secteurs->find('list', ['limit' => 200]);
        $leads = $this->Leads->Leads->find('list', ['limit' => 200]);
        $sourceProspects = $this->Leads->SourceProspects->find('list', ['limit' => 200]);
        $this->set(compact('lead', 'salePhases', 'campaigns', 'users', 'paidTo', 'secteurs', 'leads', 'sourceProspects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lead = $this->Leads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lead = $this->Leads->patchEntity($lead, $this->request->getData());
            if ($this->Leads->save($lead)) {
                $this->Flash->success(__('The lead has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lead could not be saved. Please, try again.'));
        }
        $salePhases = $this->Leads->SalePhases->find('list', ['limit' => 200]);
        $campaigns = $this->Leads->Campaigns->find('list', ['limit' => 200]);
        $users = $this->Leads->Users->find('list', ['limit' => 200]);
        $paidTo = $this->Leads->PaidTo->find('list', ['limit' => 200]);
        $secteurs = $this->Leads->Secteurs->find('list', ['limit' => 200]);
        $leads = $this->Leads->Leads->find('list', ['limit' => 200]);
        $sourceProspects = $this->Leads->SourceProspects->find('list', ['limit' => 200]);
        $this->set(compact('lead', 'salePhases', 'campaigns', 'users', 'paidTo', 'secteurs', 'leads', 'sourceProspects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lead = $this->Leads->get($id);
        if ($this->Leads->delete($lead)) {
            $this->Flash->success(__('The lead has been deleted.'));
        } else {
            $this->Flash->error(__('The lead could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
