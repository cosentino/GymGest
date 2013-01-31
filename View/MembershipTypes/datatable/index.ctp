<?php

foreach($dtResults as $result) {

    $td_action = '';
	//$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['MembershipType']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['MembershipType']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['MembershipType']['id']), null, __('Are you sure you want to delete # %s?', $result['MembershipType']['id']));
	
    $this->dtResponse['aaData'][] = array(
        $result['MembershipType']['created'],
        $result['MembershipType']['name'],
        $result['MembershipType']['notes'],
        $td_action,
    );

}

?>