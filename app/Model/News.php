<?php
App::uses('AppModel', 'Model');
/**
 * News Model
 *
 * @property Acteur $Acteur
 * @property Crise $Crise
 */
class News extends AppModel {
	public $belongsTo = array(
		'Acteur' => array(
			'className' => 'Acteur',
			'foreignKey' => 'acteur_id'
		),
		'Crise' => array(
			'className' => 'Crise',
			'foreignKey' => 'crise_id'
		),
	);
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'acteur_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'crise_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contenu' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Acteur' => array(
			'className' => 'Acteur',
			'foreignKey' => 'acteur_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Crise' => array(
			'className' => 'Crise',
			'foreignKey' => 'crise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
