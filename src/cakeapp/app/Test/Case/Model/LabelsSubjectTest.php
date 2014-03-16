<?php
App::uses('LabelsSubject', 'Model');

/**
 * LabelsSubject Test Case
 *
 */
class LabelsSubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.labels_subject',
		'app.subject',
		'app.information',
		'app.label',
		'app.informations_label',
		'app.informations_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LabelsSubject = ClassRegistry::init('LabelsSubject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LabelsSubject);

		parent::tearDown();
	}

}
