<?php
App::uses('PresencePrice', 'Model');

/**
 * PresencePrice Test Case
 *
 */
class PresencePriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.presence_price',
		'app.membership_type',
		'app.course_price',
		'app.course_type',
		'app.course',
		'app.course_registration',
		'app.person',
		'app.membership',
		'app.presence',
		'app.subscription',
		'app.subscription_price',
		'app.presence_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PresencePrice = ClassRegistry::init('PresencePrice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PresencePrice);

		parent::tearDown();
	}

}
