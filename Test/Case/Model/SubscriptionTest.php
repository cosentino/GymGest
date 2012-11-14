<?php
App::uses('Subscription', 'Model');

/**
 * Subscription Test Case
 *
 */
class SubscriptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subscription',
		'app.person',
		'app.course_registration',
		'app.course',
		'app.course_type',
		'app.course_price',
		'app.membership_type',
		'app.membership',
		'app.subscription_price',
		'app.subscription_type',
		'app.presence'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subscription = ClassRegistry::init('Subscription');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subscription);

		parent::tearDown();
	}

}
