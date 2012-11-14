<div class="presences form">
<?php echo $this->Form->create('Presence'); ?>
	<fieldset>
		<legend><?php echo __('Add Presence'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('subscription_id');
		echo debug($subscriptions);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
