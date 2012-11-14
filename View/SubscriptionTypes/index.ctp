<div class="subscriptionTypes index">
	<h2><?php echo __('Subscription Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('subscription_days'); ?></th>
			<th><?php echo $this->Paginator->sort('prepaid'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($subscriptionTypes as $subscriptionType): ?>
	<tr>
		<td><?php echo h($subscriptionType['SubscriptionType']['id']); ?>&nbsp;</td>
		<td><?php echo h($subscriptionType['SubscriptionType']['created']); ?>&nbsp;</td>
		<td><?php echo h($subscriptionType['SubscriptionType']['modified']); ?>&nbsp;</td>
		<td><?php echo h($subscriptionType['SubscriptionType']['name']); ?>&nbsp;</td>
		<td><?php echo h($subscriptionType['SubscriptionType']['subscription_days']); ?>&nbsp;</td>
		<td><?php echo h($subscriptionType['SubscriptionType']['prepaid']); ?>&nbsp;</td>
		<td><?php echo h($subscriptionType['SubscriptionType']['notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subscriptionType['SubscriptionType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subscriptionType['SubscriptionType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subscriptionType['SubscriptionType']['id']), null, __('Are you sure you want to delete # %s?', $subscriptionType['SubscriptionType']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>