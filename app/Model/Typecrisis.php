<?php
App::uses('AppModel', 'Model');
/**
 * Typecrisis Model
 *
 */
class Typecrisis extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'intitule' => array(
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
}
