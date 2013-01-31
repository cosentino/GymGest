<?php

foreach($dtResults as $result) {

	$td_person = ' ' . $this->Html->link($result['Person']['name'], array('controller' => 'people', 'action' => 'view', $result['Presence']['person_id']));

    $td_action = '';
	//$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['Presence']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['Presence']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['Presence']['id']), null, __('Are you sure you want to delete # %s?', $result['Presence']['id']));
	
    $this->dtResponse['aaData'][] = array(
        $result['Presence']['created'],
        $td_person,
        $td_action,
    );

}

?>