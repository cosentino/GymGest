<?php
App::uses('AppModel', 'Model');
/**
 * Subscription Model
 *
 * @property Person $Person
 * @property SubscriptionType $SubscriptionType
 * @property Presence $Presence
 */
class Subscription extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	//public $virtualFields = array("full_name"=>"CONCAT(SubscriptionType.name)");
    //public $displayField = 'full_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'person_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subscription_type_id' => array(
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
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubscriptionType' => array(
			'className' => 'SubscriptionType',
			'foreignKey' => 'subscription_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
