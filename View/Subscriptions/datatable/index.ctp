<?php

foreach($dtResults as $result) {

	$td_person = ' ' . $this->Html->link($result['Person']['name'], array('controller' => 'people', 'action' => 'view', $result['Subscription']['person_id']));

	$td_subscription_type = ' ' . $this->Html->link($result['SubscriptionType']['name'], array('controller' => 'subscription_type', 'action' => 'view', $result['Subscription']['subscription_type_id']));

    $td_action = ' ';
	//$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['Subscription']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['Subscription']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['Subscription']['id']), null, __('Are you sure you want to delete # %s?', $result['Subscription']['id']));

    $this->dtResponse['aaData'][] = array(
        $result['Subscription']['created'],
        $td_person,
        $td_subscription_type,
        $result['Subscription']['prepaid_count'],
		$result['Subscription']['valid_from'],
		$result['Subscription']['valid_to'],
        $td_action,
    );

}

?>