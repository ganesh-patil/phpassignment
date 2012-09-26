<?php 
  class User extends AppModel{
    public $name='User';
    //public $hasOne='Profile','role';
    //public $hasOne='role';
    public $hasOne = array(
         'Profile' => array (
          'className' =>  'profile',
           'foreignKey' => 'user_id'
           ),
          
          'Role'  => array(
           'className' => 'Role',
           'foreignKey' => 'id'  
        )
    );


   // public $hasMany='Roles_user';
     public $validate = array(
        
        'username' => array(
            'rule' => 'notEmpty'
        )
    );
    
    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}
  }
?>
