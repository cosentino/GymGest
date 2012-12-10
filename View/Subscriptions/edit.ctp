<div class="subscriptions form">
<?php echo $this->Form->create('Subscription'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subscription'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('person_id');
		echo $this->Form->input('subscription_type_id');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
		echo $this->Form->input('prepaid_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subscription.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subscription.id'))); ?></li>
	</ul>
</div>
