
<?php
echo    $this->Form->create('Post',array('acion'=>'edit'));
echo    $this->Form->input('id',array('type'=>'hidden'));
echo    $this->Form->input('fname');
echo    $this->Form->input('lname');
echo    $this->Form->input('email');
echo    $this->Form->input('contact1');
echo    $this->Form->input('contact2');
echo    $this->Form->input('contact3');
echo    $this->Form->input('webadd');
echo    $this->Form->input('facebook');
echo    $this->Form->input('googleplus');
echo    $this->Form->input('twitter');

echo    $this->Form->end('submit');