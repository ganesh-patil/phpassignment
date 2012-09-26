<?php
class ArtistsController extends AppController {
public $helpers = array('Html', 'Form');

public function index() {
       //pr($this->Artist->find('all'));
        $this->set('artists', $this->Artist->find('all'));
        
 }
 
 public function add() {
        if ($this->request->is('post')) {
            $this->Artist->create();
            if ($this->Artist->saveAssociated($this->request->data)) {
                $this->Session->setFlash('Your artist has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your Artist.');
            }
        } 
    }

    public function view($id = null) {
        $this->Artist->id = $id;
        $this->set('artist', $this->Artist->read());
    }

 
 }
 
 ?>
