<?php
App::uses('Label', 'Model');

/**
 * Label Test Case
 *
 */
class LabelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.label',
		'app.information',
		'app.informations_label',
		'app.subject',
		'app.informations_subject',
		'app.labels_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Label = ClassRegistry::init('Label');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Label);

		parent::tearDown();
	}

}
