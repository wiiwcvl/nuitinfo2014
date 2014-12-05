<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * Acteur Model
 *
 * @property News $News
 * @property Crisis $Crisis
 */
class Acteur extends AppModel {

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['pass'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['pass'] = $passwordHasher->hash(
				$this->data[$this->alias]['pass']
			);
		}
		return true;
	}
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'login' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pass' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nom' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mail' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'presentation' => array(
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
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'News' => array(
			'className' => 'News',
			'foreignKey' => 'acteur_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasAndBelongsToMany = array(
		'Crisis' => array(
			'className' => 'Crisis',
			'joinTable' => 'acteurs_crises',
			'foreignKey' => 'acteur_id',
			'associationForeignKey' => 'crise_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
