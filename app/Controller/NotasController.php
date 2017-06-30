<?php
App::uses('AppController', 'Controller');
function publica($evento, $titulo, $ruta, $resumen=''){
	$titulo		=	urlencode($titulo);
	$ruta		=	urlencode($ruta);
	$resumen	=	urlencode($resumen);

	$url		=	'https://maker.ifttt.com/trigger/'.$evento.'/with/key/pyWc4JgtUwD4yLwkf3FgKRSkFrfor8QE04Ym3SrUoxg';
	$ch			=	curl_init($url);
	$json		=	"value1=$titulo&value2=$ruta&value3=$resumen";

	$saz=curl_setopt($ch, CURLOPT_POST, 1);
	$saz=curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

	$response = curl_exec($ch);
	$saz=curl_close($ch);
}
class NotasController extends AppController {
	/***********************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('ver','buscar','dolar');
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
				$titulo		=	$this->request->data["Nota"]["titulo"];
				$ruta		=	'http://testigonewsbajio.mx/nota/'.$this->request->data["Nota"]["ruta"];
				$resumen	=	$this->request->data["Nota"]["resumen"];

				echo "<style>body{background:#ccc;}</style>\n\n<div style='padding: 50px; text-align:center;background:white;margin:100px auto; width:50%; font-size:20px; font-family: Helvetica, Arial; color:#333; '>";
				publica('difunde_twitter',$titulo,$ruta,$resumen);
				echo "<br><br>";
				publica('difunde_facebook',$titulo,$ruta,$resumen);
				echo "</div>\n\n";

				$this->Flash->set("Se ha guardado la nota");

				echo '<script>setTimeout(function(){location.href="/admin/"},1000)</script>';
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
		if ($this->Auth->user("administrador")==0) {
			$this->Flash->set("Usted no tiene privilegios de administrador");
			$this->redirect("/admin");
		}

		if ($this->Nota->delete($id)) {
			$this->Flash->set("Se ha borrado la nota");
		}else{
			$this->Flash->set("No se ha podido borrar la nota");
		}
		$this->redirect('/admin/notas');
	}
	/***********************************************************/
	public function buscar($cad=''){

		$valido="";
		$cad=strtolower($cad);

		for ($i=0; $i < strlen($cad); $i++) {
			$c=$cad[$i];
			if (strpos(" -qwertyuiopasdfghjklñzxcvbnm7894561230 ", $c)) {
				$valido.=$c;
			}
		}
		$cad=$valido;

		if ($cad=='') {
			$this->redirect("/");
		}else{
			$lista = explode('-', $cad);
			$cond = [];
			foreach ($lista as $l) {
				$cond[]=["Nota.titulo like '%$l%'"];
			}
			$titulos = $this->Nota->find("all",$op=[
				'recursive'=>1,
				'fields'=>['Nota.titulo','Nota.imagen_de_portada','Nota.resumen','Nota.id','Nota.created','Categoria.nombre'],
				'conditions'=>$cond,
				'limit'=>12*3,
				'order'=>'created desc'
				]);
			$this->set("titulos",$titulos);
		}
	}
	/***********************************************************/
	public function ver($ruta) {
		if (empty($this->request->params['ruta'])) {
			$this->redirect('/');
		}
		$ruta=$this->request->params['ruta'];
		$opciones = ['conditions'=>['Nota.ruta'=>$ruta]];

		if ($nota = $this->Nota->find('first',$opciones)) {
			$this->set('nota',$nota);
			$this->set("title_for_layout","Testigo News | ".$nota['Nota']['titulo']);
		} else {
			$this->redirect('/');
		}
	}
	/***********************************************************/
	public function dolar($dll = -999){
		$archivo = Configure::read('App.www_root').'dolar.txt';
		if ($dll>10 and $dll < 30) {
			file_put_contents($archivo, $dll);
		}

		$this->layout="ajax";
		$this->set("dll",file_get_contents($archivo));
	}
	/***********************************************************/
}
