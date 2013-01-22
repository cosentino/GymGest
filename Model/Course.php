<?php
App::uses('AppModel', 'Model');
/**
 * Course Model
 *
 * @property CourseType $CourseType
 * @property CourseRegistration $CourseRegistration
 */
class Course extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $virtualFields = array("course_dates"=>"CONCAT(Course.start_date, ' ', Course.time_slot)");
	public $displayField = 'course_dates';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'course_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CourseType' => array(
			'className' => 'CourseType',
			'foreignKey' => 'course_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CourseRegistration' => array(
			'className' => 'CourseRegistration',
			'foreignKey' => 'course_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
