<?php

foreach($dtResults as $result) {

	$td_person = ' ' . $this->Html->link($result['Person']['name'] . ' ' . $result['Person']['surname'], array('controller' => 'people', 'action' => 'view', $result['Subscription']['person_id']));

	$td_subscription_type = ' ' . $this->Html->link($result['SubscriptionType']['name'], array('controller' => 'subscription_type', 'action' => 'view', $result['Subscription']['subscription_type_id']));


    $td_action = '<span class="btn-group">';
    //$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['Subscription']['id']));
    $td_action .= ' ' . $this->Html->link(
        '<i class="icon-pencil"></i>',
        array('action' => 'edit', $result['Subscription']['id']),
        array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
    );
    $td_action .= ' ' . $this->Form->postLink(
        '<i class="icon-trash"></i>',
        array('action' => 'delete', $result['Subscription']['id']),
        array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
        __('Are you sure you want to delete # %s?', $result['Subscription']['id'])
    );
    $td_action .= '</span>';

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