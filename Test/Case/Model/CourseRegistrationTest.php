<?php
App::uses('CourseRegistration', 'Model');

/**
 * CourseRegistration Test Case
 *
 */
class CourseRegistrationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_registration',
		'app.course',
		'app.person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseRegistration = ClassRegistry::init('CourseRegistration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseRegistration);

		parent::tearDown();
	}

}
