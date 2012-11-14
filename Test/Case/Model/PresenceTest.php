<?php
App::uses('Presence', 'Model');

/**
 * Presence Test Case
 *
 */
class PresenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.presence',
		'app.person',
		'app.course_registration',
		'app.course',
		'app.course_type',
		'app.course_price',
		'app.membership_type',
		'app.membership',
		'app.subscription_price',
		'app.subscription'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Presence = ClassRegistry::init('Presence');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Presence);

		parent::tearDown();
	}

}
