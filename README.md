SimpleAuth
==========

Simple authentication plugin for CakePHP without using database

Only 3 easy steps to make authentication work
---------------------------------------------

1. Download the plugin to Plugin folder in your app and modify username and password in `SimpleAuth/Controller/Component/Auth/SimpleAuthenticatie.php`:

	 9: $request->data['username'] == 'Your username'
	10: &&
	11: $request->data['password'] == 'Your password'


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