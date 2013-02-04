<?php

foreach($dtResults as $result) {

    $td_action = '<span class="btn-group">';
    //$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['CourseType']['id']));
    $td_action .= ' ' . $this->Html->link(
        '<i class="icon-pencil"></i>',
        array('action' => 'edit', $result['CourseType']['id']),
        array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
    );
    $td_action .= ' ' . $this->Form->postLink(
        '<i class="icon-trash"></i>',
        array('action' => 'delete', $result['CourseType']['id']),
        array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
        __('Are you sure you want to delete # %s?', $result['CourseType']['id'])
    );
    $td_action .= '</span>';

    $this->dtResponse['aaData'][] = array(
    	$result['CourseType']['id'],
        $result['CourseType']['created'],
        $result['CourseType']['name'],
        $result['CourseType']['notes'],
        $td_action,
    );

}

?>