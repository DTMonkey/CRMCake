<?php 
namespace App\Controller;

use Cake\Event\Event;

class HomeController extends AppController
{
	public function index()
	{

	}
	public function view()
	{
		$this->set('title', 'View Active Users');
	 	// Set the layout.
    	$this->viewBuilder()->setLayout('user');

	}
	
	public function add()
	{
		
	}
	public function edit()
	{
		
	}
	public function delete()
	{
		
	}
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
        
    }
}
