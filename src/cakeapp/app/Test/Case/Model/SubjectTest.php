<?php
App::uses('Subject', 'Model');

/**
 * Subject Test Case
 *
 */
class SubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject',
		'app.information',
		'app.label',
		'app.informations_label',
		'app.labels_subject',
		'app.informations_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subject = ClassRegistry::init('Subject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subject);

		parent::tearDown();
	}

}
