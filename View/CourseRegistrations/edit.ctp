<div class="courseRegistrations form">
<?php echo $this->Form->create('CourseRegistration'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course Registration'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_id');
		echo $this->Form->input('person_id');
		echo $this->Form->input('paid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CourseRegistration.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CourseRegistration.id'))); ?></li>		
	</ul>
</div>
