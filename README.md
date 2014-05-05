SimpleAuth
==========

Simple authentication plugin for CakePHP without using database


Just add to your AppController

	'Auth' => array(
		'authenticate' => array(
			'Simple',
		),
		'loginAction' => array(
			'controller' => 'users',
			'action' => 'login',
		),
	),