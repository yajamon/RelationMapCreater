<?php
App::uses('AppModel', 'Model');
/**
 * Information Model
 *
 * @property Label $Label
 * @property Subject $Subject
 */
class Information extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'informations';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'summary' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Label' => array(
			'className' => 'Label',
			'joinTable' => 'informations_labels',
			'foreignKey' => 'information_id',
			'associationForeignKey' => 'label_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Subject' => array(
			'className' => 'Subject',
			'joinTable' => 'informations_subjects',
			'foreignKey' => 'information_id',
			'associationForeignKey' => 'subject_id',
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
