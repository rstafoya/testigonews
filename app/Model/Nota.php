<?php
App::uses('AppModel', 'Model');
class Nota extends AppModel {

	public $displayField = 'titulo';

	public $validate = array(
		'titulo' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Tiene que especificar un título para la nota',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ruta' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Ruta es el nombre "amigable" que aparecerá en la dirección',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'imagen_de_portada' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Todas las notas deberán incluír una imagen',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'resumen' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Escriba uno o dos párrafos que resuman la nota',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contenido' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'No puede dejar esto vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'categoria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_de_publicacion' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'La fecha de publicación de la nota',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_final' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Esta es la fecha que se dejará de publicar.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasMany = array('Foto');

	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
