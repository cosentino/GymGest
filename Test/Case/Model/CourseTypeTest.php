<?php
App::uses('CourseType', 'Model');

/**
 * CourseType Test Case
 *
 */
class CourseTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_type',
		'app.course_price',
		'app.membership_type',
		'app.course'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseType = ClassRegistry::init('CourseType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseType);

		parent::tearDown();
	}

}
