<?php
App::uses('AppController', 'Controller');
/**
 * Agrees Controller
 *
 * @property Agree $Agree
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
	
	public $uses = null;
	
	public function login(){
		if ($this->Auth->login()) {
			return $this->redirect('/');
		} else {
			$this->Session->setFlash('Username or password is incorrect');
		}
	}
	
}