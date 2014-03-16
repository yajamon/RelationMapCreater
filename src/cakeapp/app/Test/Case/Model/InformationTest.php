<?php
App::uses('Information', 'Model');

/**
 * Information Test Case
 *
 */
class InformationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.information',
		'app.label',
		'app.informations_label',
		'app.subject',
		'app.informations_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Information = ClassRegistry::init('Information');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Information);

		parent::tearDown();
	}

}
