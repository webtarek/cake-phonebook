<?php

/* 
 * @Author: Tarek Rahman
 * User Model
 */
class User extends AppModel
{
    public $name = 'User';
    public $validate = array(
        'email'=>array(
            'not_empty_check'=>array(
                'rule'=>'notEmpty',
                'message'=>'mail field is empty'
            ),
             'duplicate_check'=>array(
                 'rule'=>'isUnique',
                 'message'=>'This email address already exists'
             ),
              'valid_email' => array(
                            'rule'=>array('email'),
                            'message'=>'invalid email address'
                     )
        ),
        'name'=>array(
            'not_empty_check'=>array(
                'rule'=>'notEmpty',
                'message'=>'Missing name'
            )
           )
    ); 
    
    //public $hasMany = array('Post');
    
    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;

    }
   
}
