<?php
App::uses('PresenceType', 'Model');

/**
 * PresenceType Test Case
 *
 */
class PresenceTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.presence_type',
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
		'app.subscription_price'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PresenceType = ClassRegistry::init('PresenceType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PresenceType);

		parent::tearDown();
	}

}
