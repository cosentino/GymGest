<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 * @property CourseRegistration $CourseRegistration
 * @property Membership $Membership
 * @property Presence $Presence
 * @property Subscription $Subscription
 */
class Person extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $virtualFields = array("full_name"=>"CONCAT(Person.name, ' ', Person.surname)");
	public $displayField = 'full_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'prepaid_presences' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CourseRegistration' => array(
			'className' => 'CourseRegistration',
			'foreignKey' => 'person_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Membership' => array(
			'className' => 'Membership',
			'foreignKey' => 'person_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Presence' => array(
			'className' => 'Presence',
			'foreignKey' => 'person_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Subscription' => array(
			'className' => 'Subscription',
			'foreignKey' => 'person_id',
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

/* 
Searchable implementation
*/	
	
	public $actsAs = array('Search.Searchable');
	
	public $filterArgs = array(
        //'status' => array('type' => 'value'),
        'search' => array('type' => 'like', 'field' => array('Person.surname', 'Person.name')),
        //'range' => array('type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Article.views BETWEEN ? AND ?'),        
        //'tags' => array('type' => 'subquery', 'method' => 'findByTags', 'field' => 'Article.id'),
        //'filter' => array('type' => 'query', 'method' => 'orConditions'),
        //'enhanced_search' => array('type' => 'like', 'encode' => true, 'before' => false, 'after' => false, 'field' => array('ThisModel.name','OtherModel.name')),
    );
	
	// public function findByTags($data = array()) {
        // $this->Tagged->Behaviors->attach('Containable', array('autoFields' => false));
        // $this->Tagged->Behaviors->attach('Search.Searchable');
        // $query = $this->Tagged->getQuery('all', array(
            // 'conditions' => array('Tag.name'  => $data['tags']),
            // 'fields' => array('foreign_key'),
            // 'contain' => array('Tag')
        // ));
        // return $query;
    // }

    // public function orConditions($data = array()) {
        // $filter = $data['filter'];
        // $cond = array(
            // 'OR' => array(
                // $this->alias . '.title LIKE' => '%' . $filter . '%',
                // $this->alias . '.body LIKE' => '%' . $filter . '%',
            // ));
        // return $cond;
    // }
	

}
