<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($course['Course']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($course['Course']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['CourseType']['name'], array('controller' => 'course_types', 'action' => 'view', $course['CourseType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($course['Course']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($course['Course']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Slot'); ?></dt>
		<dd>
			<?php echo h($course['Course']['time_slot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($course['Course']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Course Registrations'); ?></h3>
	<?php if (!empty($course['CourseRegistration'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Paid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['CourseRegistration'] as $courseRegistration): ?>
		<tr>
			<td><?php echo $courseRegistration['id']; ?></td>
			<td><?php echo $courseRegistration['created']; ?></td>
			<td><?php echo $courseRegistration['modified']; ?></td>
			<td><?php echo $courseRegistration['course_id']; ?></td>
			<td><?php echo $courseRegistration['person_id']; ?></td>
			<td><?php echo $courseRegistration['paid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'course_registrations', 'action' => 'view', $courseRegistration['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'course_registrations', 'action' => 'edit', $courseRegistration['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'course_registrations', 'action' => 'delete', $courseRegistration['id']), null, __('Are you sure you want to delete # %s?', $courseRegistration['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Registration'), array('controller' => 'course_registrations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
