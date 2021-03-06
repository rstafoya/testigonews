<?php
App::uses('AppController', 'Controller');
class AnunciosController extends AppController {
	/***********************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('random');
	}
	/***********************************************************/
	public function admin_index(){
		if ($this->Auth->user("administrador")==0) {
			$this->Flash->set("Usted no tiene privilegios de administrador");
			$this->redirect("/admin");
		}

		$this->set("data",$this->Anuncio->find('all'));
	}
	/***********************************************************/
	public function admin_add(){
		if ($this->Auth->user("administrador")==0) {
			$this->Flash->set("Usted no tiene privilegios de administrador");
			$this->redirect("/admin");
		}

		if ($this->request->is("post")) {
			$this->Anuncio->create();
			if ($this->Anuncio->save($this->request->data)) {
				$this->Flash->set("Se ha agregado un anuncion con éxito");
				$this->redirect("/admin/anuncios");
			} else {
				$this->Flash->set("Ha ocurrido un problema guardando el anuncio");
			}
		}
		$this->set('tipos',$this->Anuncio->Tipo->find('list'));
	}
	/***********************************************************/
	public function admin_edit($id = null){
		if ($this->Auth->user("administrador")==0) {
			$this->Flash->set("Usted no tiene privilegios de administrador");
			$this->redirect("/admin");
		}

		if (!$data = $this->Anuncio->findById($id)) {
			$this->Flash->set("No se encuentra el anuncio.");
			$this->redirect("/admin/anuncios");
		}

		if ($this->request->is("post")) {
			if ($this->Anuncio->save($this->request->data)) {
				$this->Flash->set("Se ha guardado el anuncio");
				$this->redirect("/admin/anuncios");
			} else {
				$this->Flash->set("No se ha podido guardar el anuncio.");
			}
		}
		$this->set('tipos',$this->Anuncio->Tipo->find('list'));
		$this->set('data',$data);
	}
	/***********************************************************/
	public function admin_delete($id = null){
		if ($this->Auth->user("administrador")==0) {
			$this->Flash->set("Usted no tiene privilegios de administrador");
			$this->redirect("/admin");
		}

		if ($this->Anuncio->delete($id)) {
			$this->Flash->set("Se ha borrado el anuncio");
		}else{
			$this->Flash->set("No se ha podido borrar el anuncio");
		}
		$this->redirect('/admin/anuncios');
	}
	/***********************************************************/
	public function random($tipo=1){
		$this->layout='ajax';
		$this->set("data",$this->Anuncio->find('first',[
			'order'=>'rand()',
			'conditions'=>[
				'Anuncio.tipo_id'    => $tipo,
				'Anuncio.inicio <= ' => date('Y-m-d'),
				'Anuncio.final >= '  => date('Y-m-d'),
				],
			'recursive'=>-1
			]));
	}
	/***********************************************************/
}
