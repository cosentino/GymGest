<div class="courseRegistrations form">
<?php echo $this->Form->create('CourseRegistration'); ?>
	<fieldset>
		<legend><?php echo __('Add Course Registration'); ?></legend>
	<?php
		echo $this->Form->input('course_id');
		echo $this->Form->input('person_id');
		echo $this->Form->input('paid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
