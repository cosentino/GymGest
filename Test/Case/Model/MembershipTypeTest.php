<?php
App::uses('MembershipType', 'Model');

/**
 * MembershipType Test Case
 *
 */
class MembershipTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.membership_type',
		'app.course_price',
		'app.course_type',
		'app.course',
		'app.course_registration',
		'app.person',
		'app.membership',
		'app.subscription_price'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MembershipType = ClassRegistry::init('MembershipType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MembershipType);

		parent::tearDown();
	}

}
