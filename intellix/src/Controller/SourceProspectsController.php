<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SourceProspects Controller
 *
 * @property \App\Model\Table\SourceProspectsTable $SourceProspects
 *
 * @method \App\Model\Entity\SourceProspect[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SourceProspectsController extends AppController
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
        $sourceProspects = $this->paginate($this->SourceProspects);

        $this->set(compact('sourceProspects'));
    }

    /**
     * View method
     *
     * @param string|null $id Source Prospect id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sourceProspect = $this->SourceProspects->get($id, [
            'contain' => ['Users', 'Contacts', 'Leads', 'Prospects']
        ]);

        $this->set('sourceProspect', $sourceProspect);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sourceProspect = $this->SourceProspects->newEntity();
        if ($this->request->is('post')) {
            $sourceProspect = $this->SourceProspects->patchEntity($sourceProspect, $this->request->getData());
            if ($this->SourceProspects->save($sourceProspect)) {
                $this->Flash->success(__('The source prospect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The source prospect could not be saved. Please, try again.'));
        }
        $users = $this->SourceProspects->Users->find('list', ['limit' => 200]);
        $this->set(compact('sourceProspect', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Source Prospect id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sourceProspect = $this->SourceProspects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sourceProspect = $this->SourceProspects->patchEntity($sourceProspect, $this->request->getData());
            if ($this->SourceProspects->save($sourceProspect)) {
                $this->Flash->success(__('The source prospect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The source prospect could not be saved. Please, try again.'));
        }
        $users = $this->SourceProspects->Users->find('list', ['limit' => 200]);
        $this->set(compact('sourceProspect', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Source Prospect id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sourceProspect = $this->SourceProspects->get($id);
        if ($this->SourceProspects->delete($sourceProspect)) {
            $this->Flash->success(__('The source prospect has been deleted.'));
        } else {
            $this->Flash->error(__('The source prospect could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
