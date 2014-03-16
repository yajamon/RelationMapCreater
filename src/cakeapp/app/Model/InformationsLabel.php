<?php
App::uses('AppModel', 'Model');
/**
 * InformationsLabel Model
 *
 * @property Information $Information
 * @property Label $Label
 */
class InformationsLabel extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'information_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'label_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Information' => array(
			'className' => 'Information',
			'foreignKey' => 'information_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Label' => array(
			'className' => 'Label',
			'foreignKey' => 'label_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
