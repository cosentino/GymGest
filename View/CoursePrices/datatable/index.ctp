<?php

foreach($dtResults as $result) {

	$td_course_type = ' ' . $this->Html->link($result['CourseType']['name'], array('controller' => 'course_types', 'action' => 'view', $result['CoursePrice']['course_type_id']));

	$td_membership_type = ' ' . $this->Html->link($result['MembershipType']['name'], array('controller' => 'membership_types', 'action' => 'view', $result['CoursePrice']['membership_type_id']));

	$td_action = ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['CoursePrice']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['CoursePrice']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['CoursePrice']['id']), null, __('Are you sure you want to delete # %s?', $result['CoursePrice']['id']));
	
    $this->dtResponse['aaData'][] = array(
        $result['CoursePrice']['id'],
        $result['CoursePrice']['created'],
        $result['CoursePrice']['modified'],
        $td_course_type,
        $td_membership_type,
        $result['CoursePrice']['price'],
        $td_action,
    );

}

?>