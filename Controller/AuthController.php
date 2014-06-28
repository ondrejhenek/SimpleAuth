<?php
App::uses('AppController', 'Controller');

class AuthController extends AppController {
	
	public $uses = null;
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(array('login'));
	}
	
	public function login(){
		if ($this->Auth->login()) {
			return $this->redirect('/');
		} else {
			$this->Session->setFlash($this->Auth->authError);
		}
	}
	
	public function logout(){
		return $this->redirect($this->Auth->logout());
	}
	
}