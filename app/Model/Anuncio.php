<?php
App::uses('AppModel', 'Model');
class Anuncio extends AppModel {

	public $displayField = 'nombre';
	public $order = 'Anuncio.inicio';

	public $validate = array(
		'nombre' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'El nombre del anuncio es obligatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'imagen' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Todos los anuncios teben incluír una imágen',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'url' => array(
			'url' => array(
				'rule' => array('url'),
				'message' => 'La dirección del anuncio no es válida',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'inicio' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Debe ingresar una fecha válida',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'final' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Debe ingresar una fecha válida',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $belongsTo = array(
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
