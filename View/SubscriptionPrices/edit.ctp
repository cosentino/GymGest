<div class="subscriptionPrices form">
<?php echo $this->Form->create('SubscriptionPrice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subscription Price'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('membership_type_id');
		echo $this->Form->input('subscription_type_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubscriptionPrice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubscriptionPrice.id'))); ?></li>
	</ul>
</div>
