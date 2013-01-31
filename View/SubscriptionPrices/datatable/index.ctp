
		<td>
			<?php echo $this->Html->link($subscriptionPrice['MembershipType']['name'], array('controller' => 'membership_types', 'action' => 'view', $subscriptionPrice['MembershipType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subscriptionPrice['SubscriptionType']['name'], array('controller' => 'subscription_types', 'action' => 'view', $subscriptionPrice['SubscriptionType']['id'])); ?>
		</td>
		


<?php

foreach($dtResults as $result) {

	$td_membership_type = ' ' . $this->Html->link($result['MembershipType']['name'], array('controller' => 'membership_types', 'action' => 'view', $result['SubscriptionPrice']['membership_type_id']));

	$td_subscription_type = ' ' . $this->Html->link($result['SubscriptionType']['name'], array('controller' => 'subscription_types', 'action' => 'view', $result['SubscriptionPrice']['subscription_type_id']));

    $td_action = ' ';
	//$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['SubscriptionPrice']['id']));
	$td_action .= ' ' . $this->Html->link(__('Edit'), array('action' => 'edit', $result['SubscriptionPrice']['id']));
	$td_action .= ' ' . $this->Form->postLink(__('Delete'), array('action' => 'delete', $result['SubscriptionPrice']['id']), null, __('Are you sure you want to delete # %s?', $result['SubscriptionPrice']['id']));
	
    $this->dtResponse['aaData'][] = array(
        $result['SubscriptionPrice']['created'],
        $td_membership_type,
        $td_subscription_type,
        $result['SubscriptionPrice']['price'],
        $td_action,
    );

}

?>