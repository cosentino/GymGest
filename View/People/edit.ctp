<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))); ?></li>		
	</ul>
</div>
