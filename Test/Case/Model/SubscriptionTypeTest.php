<?php
App::uses('SubscriptionType', 'Model');

/**
 * SubscriptionType Test Case
 *
 */
class SubscriptionTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subscription_type',
		'app.subscription_price',
		'app.membership_type',
		'app.course_price',
		'app.course_type',
		'app.course',
		'app.course_registration',
		'app.person',
		'app.membership',
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
		$this->SubscriptionType = ClassRegistry::init('SubscriptionType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubscriptionType);

		parent::tearDown();
	}

}
