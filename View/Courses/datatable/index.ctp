<?php

foreach($dtResults as $result) {

	$td_course_type = ' ' . $this->Html->link($result['CourseType']['name'], array('controller' => 'course_type', 'action' => 'view', $result['Course']['course_type_id']));

    $td_action = '<span class="btn-group">';
	//$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['Course']['id']));
	$td_action .= ' ' . $this->Html->link(
        '<i class="icon-pencil"></i>',
        array('action' => 'edit', $result['Course']['id']),
        array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
    );
	$td_action .= ' ' . $this->Form->postLink(
        '<i class="icon-trash"></i>',
        array('action' => 'delete', $result['Course']['id']),
        array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
        __('Are you sure you want to delete # %s?', $result['Course']['id'])
    );
    $td_action .= '</span>';
	
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