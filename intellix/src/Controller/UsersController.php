<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Accounts', 'Campaigns', 'Contacts', 'Leads', 'Notes', 'PaidTo', 'Products', 'Prospects', 'SalePhases', 'Secteurs', 'SourceProspects', 'Status', 'TypesContacts', 'TypesLeads']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'Signup']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function signup()
    {
    $sign_up = $this->Users->newEntity();

        if($this->request->is('post') AND !empty($this->request->getData()) )
        {
            
            $signup = $this->Users->patchEntity($sign_up, $this->request->getData(), [
                'validate' => 'update'
            ]);
                
            if($signup->errors())
            {
                // Form Validation TRUE
                $this->Flash->error('Please Fill required fields');
            }else
            {
                if($this->Users->save($sign_up))
                {
                 $this->Flash->success('User Add Successful');
                 return $this->redirect(['action' => 'Signup']);
                }
                $this->Flash->error(__('Unable to Add User'));
            }
        }
        $this->set('sign_up', $sign_up);
    }

        public function login()
    {
     $login = $this->Users->newEntity();

        if($this->request->is('post') AND !empty($this->request->getData()) )
        {
            
            $check_login = $this->Users->patchEntity($login, $this->request->getData(), [
                'validate' => 'login'
            ]);
                
            if($check_login->errors())
            {
                // Form Validation TRUE
                
                }else{
                    $user = $this->Auth->identify();
                    if ($user) {
                        $this->Auth->setUser($user);
                        //$this->Flash->success(__('Login Succes'));
                        return $this->redirect($this->Auth->redirectUrl());
                        
                } else {
                    $this->Flash->error(__('Username or password is incorrect'));
                }
            }
        }
        $this->set('login', $login);
    }
    public function logout()
    {
     
     return $this->redirect($this->Auth->logout());
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['Signup']);
        
    }
}
