<?php
App::uses('InformationsSubject', 'Model');

/**
 * InformationsSubject Test Case
 *
 */
class InformationsSubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.informations_subject',
		'app.information',
		'app.label',
		'app.informations_label',
		'app.subject',
		'app.labels_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InformationsSubject = ClassRegistry::init('InformationsSubject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InformationsSubject);

		parent::tearDown();
	}

}
