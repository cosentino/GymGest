<?php

//I need to call the find() function on a Model which is not on the default controller of this View.
//Thus i have to:
// 1. import and instantiate the controller I need
// 2. call the find function on the model of the controller I explicetely just loaded
App::import('Controller', 'CourseTypes');
$CourseTypesController = new CourseTypesController;

foreach($dtResults as $result) {
    $course =
    $courseType = $CourseTypesController->CourseType->find('first', array('id' => $result['Course']['course_type_id']));

	$td_person = ' ' . $this->Html->link($result['Person']['name'], array('controller' => 'people', 'action' => 'view', $result['CourseRegistration']['person_id']));

	$td_course = ' ' . $this->Html->link(
        $courseType['CourseType']['name'] . ' (' . $result['Course']['start_date'] . ')' ,
        array('controller' => 'courses', 'action' => 'view', $result['CourseRegistration']['course_id']));

	$td_action = ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['CourseRegistration']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['CourseRegistration']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['CourseRegistration']['id']), null, __('Are you sure you want to delete # %s?', $result['CourseRegistration']['id']));
	
    $this->dtResponse['aaData'][] = array(
        $result['CourseRegistration']['created'],
        $result['CourseRegistration']['modified'],
        $td_person,
        $td_course,
        $result['CourseRegistration']['paid'],
        $td_action,
    );

}

?>