<?php
App::uses('Person', 'Model');

/**
 * Person Test Case
 *
 */
class PersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.person',
		'app.course_registration',
		'app.course',
		'app.course_type',
		'app.course_price',
		'app.membership_type',
		'app.membership',
		'app.subscription_price',
		'app.presence',
		'app.subscription'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Person = ClassRegistry::init('Person');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Person);

		parent::tearDown();
	}

}
