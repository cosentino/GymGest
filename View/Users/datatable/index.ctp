<?php

foreach($dtResults as $result) {

    $td_action = ' ';
	//$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['User']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['User']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['User']['id']), null, __('Are you sure you want to delete # %s?', $result['User']['id']));
	
    $this->dtResponse['aaData'][] = array(
        $result['User']['id'],
        $result['User']['created'],
        $result['User']['modified'],
        $result['User']['username'],
        $result['User']['role'],
        $td_action,
    );

}

?>