<?php

foreach($dtResults as $result) {

    $td_action = '<span class="btn-group">';
    //$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['MembershipType']['id']));
    $td_action .= ' ' . $this->Html->link(
        '<i class="icon-pencil"></i>',
        array('action' => 'edit', $result['MembershipType']['id']),
        array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
    );
    $td_action .= ' ' . $this->Form->postLink(
        '<i class="icon-trash"></i>',
        array('action' => 'delete', $result['MembershipType']['id']),
        array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
        __('Are you sure you want to delete # %s?', $result['MembershipType']['id'])
    );
    $td_action .= '</span>';

    $this->dtResponse['aaData'][] = array(
        $result['MembershipType']['created'],
        $result['MembershipType']['name'],
        $result['MembershipType']['notes'],
        $td_action,
    );

}

?>