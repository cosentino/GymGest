<div class="subscriptions view">
<h2><?php  echo __('Subscription'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subscription['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $subscription['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscription Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subscription['SubscriptionType']['name'], array('controller' => 'subscription_types', 'action' => 'view', $subscription['SubscriptionType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prepaid Count'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['prepaid_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid From'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid To'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['valid_to']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subscription'), array('action' => 'edit', $subscription['Subscription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subscription'), array('action' => 'delete', $subscription['Subscription']['id']), null, __('Are you sure you want to delete # %s?', $subscription['Subscription']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Presence'), array('controller' => 'presences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
