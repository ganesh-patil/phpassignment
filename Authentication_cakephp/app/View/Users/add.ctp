<h1>Add post </h1>
<?php 
  echo $this->Form->create('User');
  //$this->Form->input('id');
  echo $this->Form->input('username');
  echo $this->Form->input('password');
  echo $this->Form->input('Profile.profilename');
  echo $this->Form->input('role',array('options' => array('admin' => 'Admin', 'author' => 'Author'))
);
  echo $this->Form->end('Save post');
  
?>
