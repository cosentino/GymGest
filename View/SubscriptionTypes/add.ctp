<div class="subscriptionTypes form">
<?php echo $this->Form->create('SubscriptionType'); ?>
	<fieldset>
		<legend><?php echo __('Add Subscription Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('subscription_days');
		echo $this->Form->input('prepaid');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>