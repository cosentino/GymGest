<div class="membershipTypes form">
<?php echo $this->Form->create('MembershipType'); ?>
	<fieldset>
		<legend><?php echo __('Add Membership Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>