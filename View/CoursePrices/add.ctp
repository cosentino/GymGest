<div class="coursePrices form">
<?php echo $this->Form->create('CoursePrice'); ?>
	<fieldset>
		<legend><?php echo __('Add Course Price'); ?></legend>
	<?php
		echo $this->Form->input('membership_type_id');
		echo $this->Form->input('course_type_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
