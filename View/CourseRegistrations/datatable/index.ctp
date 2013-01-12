<?php

foreach($dtResults as $result) {

	$td_person = ' ' . $this->Html->link($result['Person']['name'], array('controller' => 'people', 'action' => 'view', $result['CourseRegistration']['person_id']));

	$td_course = ' ' . $this->Html->link($result['Course']['name'], array('controller' => 'courses', 'action' => 'view', $result['CourseRegistration']['course_id']));

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