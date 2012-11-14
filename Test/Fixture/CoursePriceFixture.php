<?php
/**
 * CoursePriceFixture
 *
 */
class CoursePriceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'membership_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'course_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'price' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '8,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_UNIQUE' => array('column' => 'id', 'unique' => 1),
			'fk_gp_tipi_tesseramenti_has_gp_tipi_corsi_gp_tipi_corsi1_idx' => array('column' => 'course_type_id', 'unique' => 0),
			'fk_gp_tipi_tesseramenti_has_gp_tipi_corsi_gp_tipi_tesserame_idx' => array('column' => 'membership_type_id', 'unique' => 0)
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
			'created' => '2012-11-06 01:07:41',
			'modified' => '2012-11-06 01:07:41',
			'membership_type_id' => 1,
			'course_type_id' => 1,
			'price' => 1
		),
	);

}
