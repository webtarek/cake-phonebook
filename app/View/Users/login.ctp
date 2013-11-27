<h2>Login
<?php
echo    $this->Form->create('User'); 
echo    $this->Form->input('email', array('label' => 'Username(email)'));
echo    $this->Form->input('password');
echo    $this->Form->end('Login');
?>
<div style="color: red"><?php echo $this->html->link('Register',array('action'=>'register')); ?></div>
</h2>