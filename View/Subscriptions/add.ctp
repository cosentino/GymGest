<div class="subscriptions form">
<?php echo $this->Form->create('Subscription'); ?>
	<fieldset>
		<legend><?php echo __('Add Subscription'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('subscription_type_id');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
		echo $this->Form->input('prepaid_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
