<?php

foreach($dtResults as $result) {

	$td_membership_type = ' ' . $this->Html->link($result['MembershipType']['name'], array('controller' => 'membership_types', 'action' => 'view', $result['SubscriptionPrice']['membership_type_id']));

	$td_subscription_type = ' ' . $this->Html->link($result['SubscriptionType']['name'], array('controller' => 'subscription_types', 'action' => 'view', $result['SubscriptionPrice']['subscription_type_id']));

    $td_action = '<span class="btn-group">';
    //$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['SubscriptionPrice']['id']));
    $td_action .= ' ' . $this->Html->link(
        '<i class="icon-pencil"></i>',
        array('action' => 'edit', $result['SubscriptionPrice']['id']),
        array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
    );
    $td_action .= ' ' . $this->Form->postLink(
        '<i class="icon-trash"></i>',
        array('action' => 'delete', $result['SubscriptionPrice']['id']),
        array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
        __('Are you sure you want to delete # %s?', $result['SubscriptionPrice']['id'])
    );
    $td_action .= '</span>';

    $this->dtResponse['aaData'][] = array(
        $result['SubscriptionPrice']['created'],
        $td_membership_type,
        $td_subscription_type,
        $result['SubscriptionPrice']['price'],
        $td_action,
    );

}

?>