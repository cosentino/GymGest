<?php

foreach($dtResults as $result) {

	$td_course_type = ' ' . $this->Html->link($result['CourseType']['name'], array('controller' => 'course_type', 'action' => 'view', $result['Course']['course_type_id']));

	$td_action = ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['Course']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['Course']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['Course']['id']), null, __('Are you sure you want to delete # %s?', $result['Course']['id']));
	
    $this->dtResponse['aaData'][] = array(
    	$result['Course']['id'],
        $result['Course']['created'],
        $td_course_type,       
	    $result['Course']['start_date'],
	    $result['Course']['end_date'],
	    $result['Course']['time_slot'],
        $td_action,
    );

}

?>