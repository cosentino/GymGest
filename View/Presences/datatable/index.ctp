<?php

foreach($dtResults as $result) {

	$td_person = ' ' . $this->Html->link(
        $result['Person']['name'] . ' ' . $result['Person']['surname'],
        array('controller' => 'people', 'action' => 'view', $result['Presence']['person_id'])
    );

    $td_action = '<span class="btn-group">';
    //$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['Presence']['id']));
    $td_action .= ' ' . $this->Html->link(
        '<i class="icon-pencil"></i>',
        array('action' => 'edit', $result['Presence']['id']),
        array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
    );
    $td_action .= ' ' . $this->Form->postLink(
        '<i class="icon-trash"></i>',
        array('action' => 'delete', $result['Presence']['id']),
        array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
        __('Are you sure you want to delete # %s?', $result['Presence']['id'])
    );
    $td_action .= '</span>';

    $this->dtResponse['aaData'][] = array(
        $result['Presence']['created'],
        $td_person,
        $td_action,
    );

}

?>