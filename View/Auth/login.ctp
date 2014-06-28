<div class="centered">
<?php
	echo $this->Form->create(null, array(
		'inputDefaults' => array(
			'div' => 'form-group',
			'class' => 'form-control'
		),
	));
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->submit('Log in', array('class' => 'btn btn-primary'));
	echo $this->Form->end();
?>
</div>