<?php
/* 
 * @Author: Tarek Rahman
 * Posts Controller
 */

class PostsController extends AppController
{   
    public $name = 'Posts';
    
    
    public function index($id = NULL)
    {
       // $this->request->data['Post']['user_id'] = $this->Auth->user('id');
        if($this->Auth->user('role')=='admin'){
            
            $this->set('views',$this->Post->find('all', array('conditions'=>array('fk'=>$id))));
        }else{
        $sdd = $this->Auth->user('id');
        $this->set('views',$this->Post->find('all', array('conditions'=>array('fk'=>$sdd))));
        }
    }
    
    public function view($id = NULL)
    {
        $this->set('view',$this->Post->read(NULL,$id));
    }
    
    public function add()
    {
        $rec = $this->Auth->user('email');
        $name = $this->Auth->user('name');
        if(!empty($this->request->data)){
            //use create
            if($this->Post->save($this->request->data)){
                //$this->Session->setFlash('Record was successfully added');
                if($this->conf_mail('shaharia.azam@gmail.com', 'Shaharia Azam') === true){
                    $this->Session->setFlash('Successfully added');
                }
                $this->redirect(array('action'=>'index'));
            }  else {
                $this->Session->setFlash('Record not saved');
                $$this->redirect(array('action'=>'index'));
            }
        }
    }
    
    public function edit($id = NULL)
    {
        if(empty($this->request->data)){
            $this->request->data = $this->Post->read(NULL,$id);
        }else{
            $this->Post->id = $id;
            $this->Post->save($this->request->data);
            $this->Session->setFlash('Record Successfully Edited');
            $this->redirect(array('action'=>'view', $id));
        }
    }
    public function delete($id = NULL)
    {
        $this->Post->delete($id);
        $this->Session->setFlash('This Phonebook has been deleted');
        $this->redirect(array('action'=>'index'));
    }
    public function conf_mail($rec = null, $name = null) {
        $message = 'Hello,' . $name . ', Your phonebook successfully updated';
        App::uses('CakeEmail', 'Network/Email');
        $email = new CakeEmail('gmail');
        $email->from('tarek.k.mail@gmail.com');
        $email->to($rec);
        $email->subject('Confirmation mail');
        $email->send($message);
        $this->redirect(array('action'=>'index'));
        return true;
    }
}
