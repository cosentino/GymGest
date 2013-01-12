<?php

foreach($dtResults as $result) {

	$td_action = ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['CourseType']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['CourseType']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['CourseType']['id']), null, __('Are you sure you want to delete # %s?', $result['CourseType']['id']));
	
    $this->dtResponse['aaData'][] = array(
    	$result['CourseType']['id'],
        $result['CourseType']['created'],
        $result['CourseType']['name'],
        $result['CourseType']['notes'],
        $td_action,
    );

}

?>