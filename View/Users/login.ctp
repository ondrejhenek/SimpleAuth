<div class="centered">
<?php
	echo $this->Just->createBootstrapForm();
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->submit('Přihlásit se', array('class' => 'btn btn-primary'));
	echo $this->Form->end();
?>
</div>