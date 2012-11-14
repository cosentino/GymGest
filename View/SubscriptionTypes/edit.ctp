<div class="subscriptionTypes form">
<?php echo $this->Form->create('SubscriptionType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subscription Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('subscription_days');
		echo $this->Form->input('prepaid');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubscriptionType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubscriptionType.id'))); ?></li>		
	</ul>
</div>
