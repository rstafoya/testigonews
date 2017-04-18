<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	var $scaffold = 'admin';

	public $components = array('Paginator','Flash');

	public function beforeFilter(){
		if (isset($this->request->params['prefix'])) {
			$this->layout='admin';
		}
	}
}
