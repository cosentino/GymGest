<div class="memberships form">
<?php echo $this->Form->create('Membership'); ?>
	<fieldset>
		<legend><?php echo __('Add Membership'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('membership_type_id');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
		echo $this->Form->input('id_number');
		echo $this->Form->input('association');
		echo $this->Form->input('role');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
