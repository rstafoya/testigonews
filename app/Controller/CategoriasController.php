<?php
App::uses('AppController', 'Controller');
class CategoriasController extends AppController {
	/***********************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','ver','ajax_menucategorias');
	}
	/***********************************************************/
	public function index() {
		$this->Categoria->recursive = 1;
		$this->Categoria->hasMany['Nota']['limit']=5;

		$this->set('categorias', $this->Categoria->find('all'));
		$this->set('ultimos',$this->Categoria->Nota->find('all',[
			'limit'=>4,
			'order'=>'Nota.id desc',
			]));
	}
	/***********************************************************/
	public function admin_index() {
		$this->Categoria->recursive = 0;
		$this->set('categorias', $this->Categoria->find('all'));
	}
	/***********************************************************/
	public function admin_add(){
		if ($this->request->is("post")) {
			$this->Categoria->create();
			if ($this->Categoria->save($this->request->data)) {
				$this->Flash->set("Se ha agregado una categoría nueva");
				$this->redirect("/admin/categorias");
			} else {
				$this->Flash->set("Ha ocurrido un error al momento de guardar");
			}
		}
		$this->Categoria->recursive=-1;
		$this->set("data",$this->Categoria->find('all'));
		$this->set("lstCatego",$this->Categoria->find('list',[
			'conditions'=>'Categoria.padre is null'
			]));
	}
	/***********************************************************/
	public function admin_edit($id=null){
		if (!$data = $this->Categoria->findById($id)) {
			$this->Flash->set("No se ha encontrado la categoría");
			$this->redirect("/admin/categorias");
		}else{
			$this->set("categoria",$data);
			$this->Categoria->recursive=-1;
			$this->set("data",$this->Categoria->find('all'));
			$this->set("lstCatego",$this->Categoria->find('list',[
				'conditions'=>'Categoria.padre is null'
				]));
		}

		if ($this->request->is("post")) {
			if ($this->Categoria->save($this->request->data)) {
				$this->Flash->set("Se actualziaron los datos de la categoría");
				$this->redirect("/admin/categorias");
			} else {
				$this->Flash->set("Ha ocurrido un error al momento de guardar");
			}
		}
	}
	/***********************************************************/
	public function ajax_menucategorias() {
		$this->layout='ajax';
		$this->Categoria->recursive = 0;
		$this->set('categorias', $this->Categoria->find("all",[
			'conditions'=>['visible'=>1]
			]));
	}
	/***********************************************************/
	public function admin_delete($id = null){
		if ($this->Categoria->delete($id)) {
			$this->Flash->set("Se ha borrado la categoria");
		}else{
			$this->Flash->set("No se ha podido borrar la categoría");
		}
		$this->redirect('/admin/categorias');
	}
	/***********************************************************/
	public function ver($id=null){
		if ($data = $this->Categoria->findById($id)) {
			$this->set('data',$data);
		}else{
			$this->redirect('/');
		}
	}
	/***********************************************************/
	public function admin_ordenar(){
		if ($this->request->is("post")) {
			$this->log(print_r($this->request->data,true));
			foreach ($this->request->data as $data) {
				$this->Categoria->save($data);
			}
			$this->redirect("/admin/categorias");
		} else {
			$this->Categoria->recursive=-1;
			$this->set("data",$this->Categoria->find("all"));
		}
	}
	/***********************************************************/
}
