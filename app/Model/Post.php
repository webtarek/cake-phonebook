<?php

/* 
 * @Author: Tarek Rahman
 * Post Model
 */
class Post extends AppModel
{
    public $name = 'Post';
    
    public $validate = array(
        'fname'=>array(
            'not_empty_check'=>array(
                'rule'=>'notEmpty',
                'message'=>'missing title'
            ),
        ),
        'lname'=>array(
            'lname_empty_check'=>array(
                'rule'=>'notEmpty',
                'message'=>'missing title'
            ),
        ),
        'email'=>array(
            'email_not_empty'=>array(
                'rule'=>'notEmpty',
                'message'=>'missing title'
            ),
                 'valid_email' => array(
                            'rule'=>array('email'),
                            'message'=>'invalid email address'
                     )
        ),
        'contact1'=>array(
            'contact1_not_empty'=>array(
                'rule'=>'notEmpty',
                'message'=>'Contact1 Field Requid'
            )
        )
    );
    
    //this will affect when fk will be renamed to user_id
   // public $belongsTo = array('User');
}

