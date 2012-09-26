<?php
  
    class UsersController extends AppController{
      public $helpers= array('Html','Form','Session');
      public $components = array('Session');

      public function beforeFilter() {
         parent::beforeFilter();
         $this->Auth->allow('add'); // Letting users register themselves
      } 
      
      public function index()
      {
        $this->set('users',$this->User->find('all'));
      }
      
      public function view() {

	}
	

      public function add()
      {
      
        
        
        if($this->request->is('post'))
        {
           //pr($this->request->data); exit;
           if($this->request->data['User']['role'] == 'Admin')
           {
           $this->User->create();
             if($this->User->saveAssociated($this->request->data))
               {
                 $this->Session->setFlash('post saved');
                 $this->redirect(array('action'=>'index'));
               }
               else
               {
                 $this->Session->setFlash('unable to save');
               }
        
        }
        else
        {
           $this->Session->setFlash('you dont have authority to add ');
        }
      }  
       
    }   
    
    
    public function login() {
    if ($this->request->is('post')) {
        
        if ($this->Auth->login()) {
          // pr($this->request->data); exit;
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
  }


public function logout() {
    $this->redirect($this->Auth->logout());
}
}

?>
