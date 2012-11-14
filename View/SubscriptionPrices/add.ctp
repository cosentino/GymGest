<div class="subscriptionPrices form">
<?php echo $this->Form->create('SubscriptionPrice'); ?>
	<fieldset>
		<legend><?php echo __('Add Subscription Price'); ?></legend>
	<?php
		echo $this->Form->input('membership_type_id');
		echo $this->Form->input('subscription_type_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
