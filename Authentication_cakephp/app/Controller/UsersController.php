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
      //pr($this->request->data); exit;
        $this->set('users',$this->User->find('all'));
      }
      
     public function view($id = null) {
       $this->User->id = $id;
      $this->set('user', $this->User->read());
     }


      public function add()
      {
      
        
        
        if($this->request->is('post'))
        {
           //pr($this->request->data); exit;
          // if($this->request->data['User']['role'] == 'Admin')
          // {
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
        
        //}
        //else
       // {
          // $this->Session->setFlash('you dont have authority to add ');
       // }
      }  
       
    }   
    

  public function edit($id = null) {
    $this->User->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->User->read();
    } else {
        if ($this->User->saveAssociated($this->request->data)) {
            $this->Session->setFlash('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update your post.');
        }
    }
  }
   

   public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->User->delete($id)) {
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
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
