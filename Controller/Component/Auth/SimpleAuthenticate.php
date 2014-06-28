<?php
App::uses('BaseAuthenticate', 'Controller/Component/Auth');

class SimpleAuthenticate extends BaseAuthenticate{
	
	public function authenticate(CakeRequest $request, CakeResponse $response) {
		
		$config = Configure::read('SimpleAuth');
		
		$result = (isset($request->data['username']) && isset($request->data['password'])
				&&
				$request->data['username'] == $config['username']
				&&
				$request->data['password'] == $config['password']
			);
		if ($result) return $config['return'];
		else return false;
	}
}