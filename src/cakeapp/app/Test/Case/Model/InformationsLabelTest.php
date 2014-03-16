<?php
App::uses('InformationsLabel', 'Model');

/**
 * InformationsLabel Test Case
 *
 */
class InformationsLabelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.informations_label',
		'app.information',
		'app.label',
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
		$this->InformationsLabel = ClassRegistry::init('InformationsLabel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InformationsLabel);

		parent::tearDown();
	}

}
