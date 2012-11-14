<?php
/**
 * SubscriptionFixture
 *
 */
class SubscriptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'subscription_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'valid_from' => array('type' => 'date', 'null' => true, 'default' => null),
		'valid_to' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_UNIQUE' => array('column' => 'id', 'unique' => 1),
			'fk_abbonamenti_utenti_idx' => array('column' => 'person_id', 'unique' => 0),
			'fk_gp_abbonamenti_gp_tipi_abbonamenti1_idx' => array('column' => 'subscription_type_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'created' => '2012-11-06 01:07:52',
			'modified' => '2012-11-06 01:07:52',
			'person_id' => 1,
			'subscription_type_id' => 1,
			'valid_from' => '2012-11-06',
			'valid_to' => '2012-11-06'
		),
	);

}
