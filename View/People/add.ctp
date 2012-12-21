<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
		echo $this->Form->input('gender');
		echo $this->Form->input('address');
		echo $this->Form->input('zip');
		echo $this->Form->input('city');
		echo $this->Form->input('county');
		echo $this->Form->input('country');
		echo $this->Form->input('telephone');
		echo $this->Form->input('email');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
