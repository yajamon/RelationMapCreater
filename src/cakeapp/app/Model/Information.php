<?php
App::uses('AppModel', 'Model');
/**
 * Information Model
 *
 * @property Object $Object
 * @property Tag $Tag
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
		'Object' => array(
			'className' => 'Object',
			'joinTable' => 'informations_objects',
			'foreignKey' => 'information_id',
			'associationForeignKey' => 'object_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Tag' => array(
			'className' => 'Tag',
			'joinTable' => 'informations_tags',
			'foreignKey' => 'information_id',
			'associationForeignKey' => 'tag_id',
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
