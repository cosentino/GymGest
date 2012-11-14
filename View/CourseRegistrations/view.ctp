<div class="courseRegistrations view">
<h2><?php  echo __('Course Registration'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseRegistration['CourseRegistration']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($courseRegistration['CourseRegistration']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($courseRegistration['CourseRegistration']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseRegistration['Course']['id'], array('controller' => 'courses', 'action' => 'view', $courseRegistration['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseRegistration['Person']['name'], array('controller' => 'people', 'action' => 'view', $courseRegistration['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid'); ?></dt>
		<dd>
			<?php echo h($courseRegistration['CourseRegistration']['paid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Registration'), array('action' => 'edit', $courseRegistration['CourseRegistration']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Registration'), array('action' => 'delete', $courseRegistration['CourseRegistration']['id']), null, __('Are you sure you want to delete # %s?', $courseRegistration['CourseRegistration']['id'])); ?> </li>
	</ul>
</div>
