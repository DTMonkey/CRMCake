<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalePhases Controller
 *
 * @property \App\Model\Table\SalePhasesTable $SalePhases
 *
 * @method \App\Model\Entity\SalePhase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalePhasesController extends AppController
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
        $salePhases = $this->paginate($this->SalePhases);

        $this->set(compact('salePhases'));
    }

    /**
     * View method
     *
     * @param string|null $id Sale Phase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salePhase = $this->SalePhases->get($id, [
            'contain' => ['Users', 'Leads']
        ]);

        $this->set('salePhase', $salePhase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salePhase = $this->SalePhases->newEntity();
        if ($this->request->is('post')) {
            $salePhase = $this->SalePhases->patchEntity($salePhase, $this->request->getData());
            if ($this->SalePhases->save($salePhase)) {
                $this->Flash->success(__('The sale phase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale phase could not be saved. Please, try again.'));
        }
        $users = $this->SalePhases->Users->find('list', ['limit' => 200]);
        $this->set(compact('salePhase', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale Phase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salePhase = $this->SalePhases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salePhase = $this->SalePhases->patchEntity($salePhase, $this->request->getData());
            if ($this->SalePhases->save($salePhase)) {
                $this->Flash->success(__('The sale phase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale phase could not be saved. Please, try again.'));
        }
        $users = $this->SalePhases->Users->find('list', ['limit' => 200]);
        $this->set(compact('salePhase', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale Phase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salePhase = $this->SalePhases->get($id);
        if ($this->SalePhases->delete($salePhase)) {
            $this->Flash->success(__('The sale phase has been deleted.'));
        } else {
            $this->Flash->error(__('The sale phase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
