<?php
App::uses('CoursePrice', 'Model');

/**
 * CoursePrice Test Case
 *
 */
class CoursePriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_price',
		'app.membership_type',
		'app.course_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CoursePrice = ClassRegistry::init('CoursePrice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoursePrice);

		parent::tearDown();
	}

}
