<?php
App::uses('AppController', 'Controller');
/***********************************************************/
class UsersController extends AppController {
	/***********************************************************/
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login','logout','admin_registrar');
	}
	/**************************************************************************/
	public function login(){
		if ($this->request->is('post')) {
			if (!$this->Auth->login()) {
				$this->Flash->set("Usuario o contraseña incorrecta.");
			}else{
				$this->redirect('/');
			}
		}
	}
	/**************************************************************************/
	public function admin_registrar(){
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->set('El usuario se ha registrado con éxito');
				$this->redirect('/');
			}
			$this->Flash->set('Ocurrió un problema al momento de registrar al usuario.');
		}
	}
	/**************************************************************************/
	public function logout(){
		$this->redirect('/');
	}

}
