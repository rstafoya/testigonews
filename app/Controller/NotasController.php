<?php
App::uses('AppController', 'Controller');
class NotasController extends AppController {
	/***********************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('ver','buscar');
	}
	/***********************************************************/
	public function admin_index() {
		$this->Nota->recursive = 0;
		$this->Nota->order='Nota.modified desc';

		$this->set('notas', $this->Paginator->paginate());
	}
	/***********************************************************/
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Nota->create();
			$this->request->data["Nota"]["user_id"]=$this->Auth->user("id");
			if($this->Nota->save($this->request->data)){
				$this->Flash->set("Se ha guardado la nota");
				$this->redirect("/admin/");
			}else{
				$this->Flash->set("ha ocurrido un error al momento de guardar la nota");
			}
		}else{
			$this->set("categorias",$this->Nota->Categoria->find("list"));
		}

	}
	/***********************************************************/
	public function admin_edit($id=null) {
		if ($this->request->is('post')) {
			if($this->Nota->save($this->request->data)){
				$this->Flash->set("Se ha guardado la nota");
				$this->redirect("/admin/");
			} else {
				$this->Flash->set("Ha ocurrido un error al momento de guardar la nota");
			}
		} else {
			if ($notas = $this->Nota->findById($id)) {
				$this->set("notas",$notas);
				$this->set("categorias",$this->Nota->Categoria->find("list"));
				$this->set("users",$this->Nota->User->find("list"));
			} else {
				$this->Flash->set("No se ha encontrado la nota.");
			}
		}
	}
	/***********************************************************/
	public function admin_delete($id = null){
		if ($this->Notas->delete($id)) {
			$this->Flash->set("Se ha borrado la nota");
		}else{
			$this->Flash->set("No se ha podido borrar la nota");
		}
		$this->redirect('/admin/notas');
	}
	/***********************************************************/
	public function buscar($cad=''){
		if ($cad=='') {
			$this->redirect("/");
		}else{
			$lista = explode('-', $cad);
			$cond = [];
			foreach ($lista as $l) {
				$cond[]=["Nota.titulo like '%$l%'"];
			}
			$titulos = $this->Nota->find("all",[
				'recursive'=>-1,
				'fields'=>['titulo','imagen_de_portada','resumen','id','created'],
				'conditions'=>$cond,
				'limit'=>12*3,
				'order'=>'created desc'
				]);
			$this->set("titulos",$titulos);
		}
	}
	/***********************************************************/
	public function ver($id=null) {
		if ($nota = $this->Nota->findById($id)) {
			$this->set('nota',$nota);
		} else {
			$this->redirect('/');
		}

	}
}
