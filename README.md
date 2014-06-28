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

4. Set up your username and password in your Config/core.php

		Configure::write('SimpleAuth', array(
			'username' => 'YOUR LOGIN INFO',
			'password' => 'YOUR SECRET PASSWORD',
			'return' => array(
				'nickname' => 'MAYBE YOUR NAME HERE?'
			)
		));

You can change your routing configuration or you can log in and out using ugly url like this:

		www.yourapp.com/simple_auth/auth/login
		www.yourapp.com/simple_auth/auth/logout

Configuration
----------------------

1. For prettier links add this to your Config/router.php

		Router::connect('/login', array('plugin' => 'simple_auth', 'controller' => 'auth', 'action' => 'login'));
		Router::connect('/logout', array('plugin' => 'simple_auth', 'controller' => 'auth', 'action' => 'logout'));


2. You can addiionally change SimpleAuth.return array value which is then accessible in session Auth.User. Just don't make return value false, it would break the magic.
http://book.cakephp.org/2.0/en/core-libraries/components/authentication.html#creating-custom-authentication-objects

To do
=====

1. Throw exception when configuration is not set.