<?php
/**
 * InformationsSubjectFixture
 *
 */
class InformationsSubjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => '情報_モノ連携id : 識別id'),
		'information_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'comment' => '情報id : 情報id'),
		'subject_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index', 'comment' => '主体id : モノID'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時 : 作成日時'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '変更日時 : 変更日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'subject_id' => array('column' => 'subject_id', 'unique' => 0),
			'information_id' => array('column' => 'information_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'information_id' => 1,
			'subject_id' => 1,
			'created' => '2014-03-16 15:15:10',
			'modified' => '2014-03-16 15:15:10'
		),
	);

}
