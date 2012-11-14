<div class="subscriptionTypes view">
<h2><?php  echo __('Subscription Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subscriptionType['SubscriptionType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subscriptionType['SubscriptionType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subscriptionType['SubscriptionType']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subscriptionType['SubscriptionType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscription Days'); ?></dt>
		<dd>
			<?php echo h($subscriptionType['SubscriptionType']['subscription_days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prepaid'); ?></dt>
		<dd>
			<?php echo h($subscriptionType['SubscriptionType']['prepaid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($subscriptionType['SubscriptionType']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subscription Type'), array('action' => 'edit', $subscriptionType['SubscriptionType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subscription Type'), array('action' => 'delete', $subscriptionType['SubscriptionType']['id']), null, __('Are you sure you want to delete # %s?', $subscriptionType['SubscriptionType']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subscription Prices'); ?></h3>
	<?php if (!empty($subscriptionType['SubscriptionPrice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Membership Type Id'); ?></th>
		<th><?php echo __('Subscription Type Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subscriptionType['SubscriptionPrice'] as $subscriptionPrice): ?>
		<tr>
			<td><?php echo $subscriptionPrice['id']; ?></td>
			<td><?php echo $subscriptionPrice['created']; ?></td>
			<td><?php echo $subscriptionPrice['modified']; ?></td>
			<td><?php echo $subscriptionPrice['membership_type_id']; ?></td>
			<td><?php echo $subscriptionPrice['subscription_type_id']; ?></td>
			<td><?php echo $subscriptionPrice['price']; ?></td>
			<td><?php echo $subscriptionPrice['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subscription_prices', 'action' => 'view', $subscriptionPrice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subscription_prices', 'action' => 'edit', $subscriptionPrice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subscription_prices', 'action' => 'delete', $subscriptionPrice['id']), null, __('Are you sure you want to delete # %s?', $subscriptionPrice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscription Price'), array('controller' => 'subscription_prices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subscriptions'); ?></h3>
	<?php if (!empty($subscriptionType['Subscription'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Subscription Type Id'); ?></th>
		<th><?php echo __('Valid From'); ?></th>
		<th><?php echo __('Valid To'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subscriptionType['Subscription'] as $subscription): ?>
		<tr>
			<td><?php echo $subscription['id']; ?></td>
			<td><?php echo $subscription['created']; ?></td>
			<td><?php echo $subscription['modified']; ?></td>
			<td><?php echo $subscription['person_id']; ?></td>
			<td><?php echo $subscription['subscription_type_id']; ?></td>
			<td><?php echo $subscription['valid_from']; ?></td>
			<td><?php echo $subscription['valid_to']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subscriptions', 'action' => 'view', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subscriptions', 'action' => 'edit', $subscription['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subscriptions', 'action' => 'delete', $subscription['id']), null, __('Are you sure you want to delete # %s?', $subscription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscription'), array('controller' => 'subscription', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
