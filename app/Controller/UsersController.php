<?php

/* 
 * @Author: Tarek Rahman
 * Users Controller
 */

class UsersController extends AppController
{
    public $name = 'Users';
    
    public function login()
    {
        if($this->request->is('post')){
            if($this->Auth->login()){
                if($this->Auth->user('role')=='admin'){
                    $this->redirect(array('action'=>'admin_view'));
                   }else{
                       return $this->redirect(array('controller'=>'posts','action'=>'index'));
                   }
              
            }else{
                $this->Session->setFlash('Invalid Username or Password');
            }
        }
    }
    
    public function logout()
    {
        if($this->Auth->logout()){
            $this->redirect(array('action'=>'login'));
        }
    }
    
    public function index()
    {
        
    }
    
    public function register()
    {
        if(!empty($this->request->data)){
            $this->User->create();
            if($this->User->save($this->request->data)){
                $this->Session->setFlash('Registration Successfull');
                $this->redirect(array('action'=>'login'));
                //$this->redirect(array('acton'=>'login'));
            } else{
                $this->Session->setFlash('Registration Not Complete');
                $this->redirect(array('action'=>'register'));
            }
        }
    }
    public function admin_view()
    {
        if($this->Auth->user('role')=='admin'){
            $this->set('adviews',$this->User->find('all'));
        }else{
            $this->Session->setFlash('You are not authorized to access this area');
            $this->redirect(array('action'=>'index'));
        }
        
    }
    public function delete($id = NULL)
    {
        $this->User->delete($id);
        $this->Session->setFlash('This user has been deleted');
        $this->redirect(array('action'=>'admin_view'));
    }
    
}