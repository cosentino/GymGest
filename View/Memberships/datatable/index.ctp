<?php

foreach($dtResults as $result) {

	$td_person = ' ' . $this->Html->link($result['Person']['name'], array('controller' => 'people', 'action' => 'view', $result['Subscription']['person_id']));

	$td_membership_type = ' ' . $this->Html->link($result['MembershipType']['name'], array('controller' => 'membership_type', 'action' => 'view', $result['Membership']['membership_type_id']));

    $td_action = '<span class="btn-group">';
    //$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['Membership']['id']));
    $td_action .= ' ' . $this->Html->link(
        '<i class="icon-pencil"></i>',
        array('action' => 'edit', $result['Membership']['id']),
        array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
    );
    $td_action .= ' ' . $this->Form->postLink(
        '<i class="icon-trash"></i>',
        array('action' => 'delete', $result['Membership']['id']),
        array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
        __('Are you sure you want to delete # %s?', $result['Membership']['id'])
    );
    $td_action .= '</span>';

    $this->dtResponse['aaData'][] = array(
        $result['Membership']['created'],
        $td_person,
        $td_membership_type,
		$result['Membership']['valid_from'],
		$result['Membership']['valid_to'],
		$result['Membership']['id_number'],
		$result['Membership']['association'],
        $td_action,
    );

}

?>