<?php
App::uses('BaseAuthenticate', 'Controller/Component/Auth');

class SimpleAuthenticate extends BaseAuthenticate{
	
	public function authenticate(CakeRequest $request, CakeResponse $response) {
		$result = (isset($request->data['username']) && isset($request->data['password'])
				&&
				$request->data['username'] == '##YOURUSERNAME##'
				&&
				$request->data['password'] == '##YOURPASSWORD##'
			);
		if ($result) return array('username' => 'All your base are belong to us!');
		else return false;
	}
}