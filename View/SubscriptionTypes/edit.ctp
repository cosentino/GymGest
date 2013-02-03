<?php

$this->start('pageTitle');
echo __('Edit Subscription Type');
$this->end();

$this->start('pageSubtitle');
echo __('');
$this->end();

?>
<div class="form">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">

                <div class="widget-header">
                    <span class="title"><?php echo __('Subscription Type'); ?></span>
                    <div class="toolbar">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#tab-01" data-toggle="tab"><?php echo __('Details'); ?></a></li>
                            <li><a href="#tab-02" data-toggle="tab"><?php echo __('Prices'); ?></a></li>
                        </ul>
                    </div>
                </div><!-- widget-header -->

                <div class="tab-content widget-content form-container">

                    <!-- Details -->
                    <div class="tab-pane active" id="tab-01">
                        <?php

                        echo $this->Form->create('SubscriptionType', array(
                            'class' => 'form-horizontal',
                            'inputDefaults' => array(
                                'div' => 'control-group',
                                'label' => array('class' => 'control-label'),
                                'between' => '<div class="controls">',
                                'after' => '</div>',
                                'class' => 'span12'
                            )
                        ));

                        echo $this->Form->input('name');
                        echo $this->Form->input('subscription_days');
                        echo $this->Form->input('prepaid');
                        echo $this->Form->input('notes');
                        ?>
                        <div class="form-actions btn-toolbar">
                            <?php
                                echo $this->Form->end(array(
                                    'label' => __('Submit'),
                                    'div' => false,
                                    'class' => 'btn btn-primary'
                                ));
                                echo $this->Form->postLink(
                                    __('Delete'),
                                    array('action' => 'delete', $this->Form->value('SubscriptionType.id')),
                                    array('class' => 'btn btn-danger'),
                                    __('Are you sure you want to delete # %s?', $this->Form->value('SubscriptionType.id'))
                                );
                            ?>
                        </div>
                    </div><!-- tab-01: Details -->

                    <!-- Prices -->
                    <div class="tab-pane" id="tab-02">
                        <div class="widget-content table-container">
                            <?php if (!empty($this->data['SubscriptionPrice'])): ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!--<th><?php /*echo __('Id'); */?></th>-->
                                        <th><?php echo __('Created'); ?></th>
                                        <!--<th><?php /*echo __('Modified'); */?></th>-->
                                        <th><?php echo __('Membership Type'); ?></th>
                                        <!--<th><?php /*echo __('Subscription Type Id'); */?></th>-->
                                        <th><?php echo __('Price'); ?></th>
                                        <!--<th><?php /*echo __('Notes'); */?></th>-->
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 0;
                                foreach ($this->data['SubscriptionPrice'] as $subscriptionPrice): ?>
                                    <tr>
                                        <!--<td><?php /*echo $subscriptionPrice['id']; */?></td>-->
                                        <td><?php echo $subscriptionPrice['created']; ?></td>
                                        <!--<td><?php /*echo $subscriptionPrice['modified']; */?></td>-->
                                        <td><?php
                                            echo $this->Html->link(
                                                $subscriptionPrice['MembershipType']['name'],
                                                array('controller' => 'membership_types', 'action' => 'edit', $subscriptionPrice['membership_type_id'])
                                            );
                                        ?></td>
                                        <!--<td><?php /*echo $subscriptionPrice['subscription_type_id']; */?></td>-->
                                        <td><?php echo $subscriptionPrice['price']; ?></td>
                                        <!--<td><?php /*echo $subscriptionPrice['notes']; */?></td>-->
                                        <td class="actions">
                                            <?php /*echo $this->Html->link(__('View'), array('controller' => 'subscription_prices', 'action' => 'view', $subscriptionPrice['id'])); */?>
                                            <?php echo $this->Html->link(
                                                __('Edit'),
                                                array('controller' => 'subscription_prices', 'action' => 'edit', $subscriptionPrice['id']),
                                                array('class' => 'btn btn-small')); ?>
                                            <?php echo $this->Form->postLink(
                                                __('Delete'),
                                                array('controller' => 'subscription_prices', 'action' => 'delete', $subscriptionPrice['id']),
                                                array('class' => 'btn btn-small'),
                                                __('Are you sure you want to delete # %s?', $subscriptionPrice['id'])); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php endif; ?>

                            <div class="btn-toolbar">
                                <ul>
                                    <li><?php echo $this->Html->link(
                                        __('New Subscription Price'),
                                        array('controller' => 'subscription_prices', 'action' => 'add'),
                                        array('class' => 'btn btn-success')
                                    ); ?> </li>
                                </ul>
                            </div>
                        </div><!-- widget-content -->
                    </div><!-- tab-02: Prices -->

                </div><!-- tab-content -->

            </div><!-- widget -->
        </div>
    </div>
</div>
