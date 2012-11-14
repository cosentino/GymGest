<?php
App::uses('SubscriptionPrice', 'Model');

/**
 * SubscriptionPrice Test Case
 *
 */
class SubscriptionPriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subscription_price',
		'app.membership_type',
		'app.course_price',
		'app.course_type',
		'app.course',
		'app.course_registration',
		'app.person',
		'app.membership',
		'app.presence',
		'app.subscription',
		'app.subscription_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubscriptionPrice = ClassRegistry::init('SubscriptionPrice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubscriptionPrice);

		parent::tearDown();
	}

}
