<div class="courseTypes form">
<?php echo $this->Form->create('CourseType'); ?>
	<fieldset>
		<legend><?php echo __('Add Course Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
