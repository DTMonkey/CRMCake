<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PaidTo Controller
 *
 * @property \App\Model\Table\PaidToTable $PaidTo
 *
 * @method \App\Model\Entity\PaidTo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaidToController extends AppController
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
        $paidTo = $this->paginate($this->PaidTo);

        $this->set(compact('paidTo'));
    }

    /**
     * View method
     *
     * @param string|null $id Paid To id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paidTo = $this->PaidTo->get($id, [
            'contain' => ['Users', 'Leads']
        ]);

        $this->set('paidTo', $paidTo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paidTo = $this->PaidTo->newEntity();
        if ($this->request->is('post')) {
            $paidTo = $this->PaidTo->patchEntity($paidTo, $this->request->getData());
            if ($this->PaidTo->save($paidTo)) {
                $this->Flash->success(__('The paid to has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paid to could not be saved. Please, try again.'));
        }
        $users = $this->PaidTo->Users->find('list', ['limit' => 200]);
        $this->set(compact('paidTo', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paid To id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paidTo = $this->PaidTo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paidTo = $this->PaidTo->patchEntity($paidTo, $this->request->getData());
            if ($this->PaidTo->save($paidTo)) {
                $this->Flash->success(__('The paid to has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paid to could not be saved. Please, try again.'));
        }
        $users = $this->PaidTo->Users->find('list', ['limit' => 200]);
        $this->set(compact('paidTo', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paid To id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paidTo = $this->PaidTo->get($id);
        if ($this->PaidTo->delete($paidTo)) {
            $this->Flash->success(__('The paid to has been deleted.'));
        } else {
            $this->Flash->error(__('The paid to could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
