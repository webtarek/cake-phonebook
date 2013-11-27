<?php
echo    $this->Form->create('User',array('action','register'));
echo    $this->Form->input('name');
echo    $this->Form->input('email');
echo    $this->Form->input('password');
echo    $this->Form->end('register'); 
