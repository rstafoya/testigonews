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
				$this->redirect('/admin/users');
			}
			$this->Flash->set('Ocurrió un problema al momento de registrar al usuario.');
		}
	}
	/**************************************************************************/
	public function admin_edit($id=null){
		if (!$data = $this->User->findById($id)) {
			$this->Flash->set("No se encuentra el usuario");
			$this->redirect('/admin/users');
		}

		if ($this->request->is("post")) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->set("Se actualizaron los datos del usuario");
				$this->redirect("/admin/users");
			} else {
				$this->Flash->set("Ha ocurrido un error al momento de guardar");
			}			
		}

		$this->set("data",$data);
	}
	/**************************************************************************/
	public function admin_index(){
		$this->set("data",$this->User->find("all"));
	}
	/**************************************************************************/
	public function logout(){
		$this->redirect('/');
	}
	/***********************************************************/
	public function admin_delete($id = null){
		if ($this->User->delete($id)) {
			$this->Flash->set("Se ha borrado el usuario");
		}else{
			$this->Flash->set("No se ha podido borrar el usuario"); 			
		}
		$this->redirect('/admin/users');
	}

}
