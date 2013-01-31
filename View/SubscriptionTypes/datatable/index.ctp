<?php

foreach($dtResults as $result) {

    $td_action = '';
	//$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['SubscriptionType']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['SubscriptionType']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['SubscriptionType']['id']), null, __('Are you sure you want to delete # %s?', $result['SubscriptionType']['id']));
	
    $this->dtResponse['aaData'][] = array(
        $result['SubscriptionType']['created'],
        $result['SubscriptionType']['name'],
		$result['SubscriptionType']['subscription_days'],
		$result['SubscriptionType']['prepaid'],
        $td_action,
    );

}

?>