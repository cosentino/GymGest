<?php
App::uses('Membership', 'Model');

/**
 * Membership Test Case
 *
 */
class MembershipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.membership',
		'app.person',
		'app.membership_type',
		'app.course_price',
		'app.course_type',
		'app.course',
		'app.course_registration',
		'app.subscription_price'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Membership = ClassRegistry::init('Membership');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Membership);

		parent::tearDown();
	}

}
