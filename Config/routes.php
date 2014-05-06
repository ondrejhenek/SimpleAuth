<?php
	Router::connect('/login', array('plugin' => 'simple_auth', 'controller' => 'auth', 'action' => 'login'));
	Router::connect('/logout', array('plugin' => 'simple_auth', 'controller' => 'auth', 'action' => 'logout'));