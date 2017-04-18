<?php
App::uses('AppController', 'Controller');
class CategoriasController extends AppController {
/***********************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
	}
/***********************************************************/
	public function index() {
		$this->Categoria->recursive = 1;
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
	public function ajax_menucategorias() {
		$this->layout='ajax';
		$this->Categoria->recursive = 0;
		$this->set('categorias', $this->Categoria->find("all"));
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
}
