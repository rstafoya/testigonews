 <?php
 App::uses('AppController', 'Controller');
 class AnunciosController extends AppController {
 	/***********************************************************/
 	public function beforeFilter() {
 		parent::beforeFilter();
 	}
 	/***********************************************************/
 	public function admin_index(){
 		$this->set("data",$this->Anuncio->find('all'));
 	}
 	/***********************************************************/
 	public function admin_add(){
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
 	/***********************************************************/
 	/***********************************************************/
 	/***********************************************************/
 }
