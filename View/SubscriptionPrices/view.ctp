<div class="subscriptionPrices view">
<h2><?php  echo __('Subscription Price'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subscriptionPrice['SubscriptionPrice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subscriptionPrice['SubscriptionPrice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subscriptionPrice['SubscriptionPrice']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membership Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subscriptionPrice['MembershipType']['name'], array('controller' => 'membership_types', 'action' => 'view', $subscriptionPrice['MembershipType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscription Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subscriptionPrice['SubscriptionType']['name'], array('controller' => 'subscription_types', 'action' => 'view', $subscriptionPrice['SubscriptionType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($subscriptionPrice['SubscriptionPrice']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subscription Price'), array('action' => 'edit', $subscriptionPrice['SubscriptionPrice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subscription Price'), array('action' => 'delete', $subscriptionPrice['SubscriptionPrice']['id']), null, __('Are you sure you want to delete # %s?', $subscriptionPrice['SubscriptionPrice']['id'])); ?> </li>
	</ul>
</div>
