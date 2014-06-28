SimpleAuth
==========

Simple authentication plugin for CakePHP without using database

Only 4 easy steps to make authentication work
---------------------------------------------

1. Download the plugin to Plugin folder

2. Add to your AppController:

		public $components = array(
			'Auth' => array(
				'authenticate' => array(
					'SimpleAuth.Simple',
				),
				'loginAction' => array(
					'plugin' => 'simple_auth',
					'controller' => 'auth',
					'action' => 'login',
				),
			)
		);


3. And load your plugin with routing enabled (to use pretty /login and /logout URLs):

		CakePlugin::loadAll(array(
			'SimpleAuth' => array(
				'routes' => true
			),
		));

4. Set up your username and password in your core.php

		Configure::write('SimpleAuth', array(
			'username' => 'masterofuniverse',
			'password' => 'qwerty01',
			'return' => array(
				'username' => 'masterofuniverse'
			)
		));

You can additionally change SimpleAuth.return array value which is then accessible in session Auth.User

To do
=====

Throw exception when configuration is not set.