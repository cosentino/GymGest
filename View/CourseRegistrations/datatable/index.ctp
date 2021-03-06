<?php

//I need to call the find() function on a Model which is not on the default controller of this View.
//Thus i have to:
// 1. import and instantiate the controller I need
// 2. call the find function on the model of the controller I explicetely just loaded
App::import('Controller', 'CourseTypes');
$CourseTypesController = new CourseTypesController;

foreach($dtResults as $result) {
    $courseType = $CourseTypesController->CourseType->find('first', array('id' => $result['Course']['course_type_id']));

	$td_person = ' ' . $this->Html->link($result['Person']['name'] . ' ' . $result['Person']['surname'], array('controller' => 'people', 'action' => 'view', $result['CourseRegistration']['person_id']));

	$td_course = ' ' . $this->Html->link(
        $courseType['CourseType']['name'] . ' (' . $result['Course']['start_date'] . ')' ,
        array('controller' => 'courses', 'action' => 'view', $result['CourseRegistration']['course_id']));

    $td_action = '<span class="btn-group">';
    //$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['CourseRegistration']['id']));
    $td_action .= ' ' . $this->Html->link(
        '<i class="icon-pencil"></i>',
        array('action' => 'edit', $result['CourseRegistration']['id']),
        array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
    );
    $td_action .= ' ' . $this->Form->postLink(
        '<i class="icon-trash"></i>',
        array('action' => 'delete', $result['CourseRegistration']['id']),
        array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
        __('Are you sure you want to delete # %s?', $result['CourseRegistration']['id'])
    );
    $td_action .= '</span>';

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