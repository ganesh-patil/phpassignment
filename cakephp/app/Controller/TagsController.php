<?php
class TagsController extends AppController {
public $helpers = array('Html', 'Form');

public function index() {
       pr($this->Tag->find('all'));
        $this->set('tags', $this->Tag->find('all'));
    }
    
public function edit($id = null) {
    $this->Tag->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Tag->read();
    } else {
        if ($this->Tag->save($this->request->data)) {
            $this->Session->setFlash('Your Tag has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update your Tag.');
        }
    }
}

public function add() {
        if ($this->request->is('post')) {
            $this->Tag->create();
            if ($this->Tag->saveAssociated($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }
}   
?>
