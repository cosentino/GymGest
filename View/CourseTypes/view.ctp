<div class="courseTypes view">
<h2><?php  echo __('Course Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseType['CourseType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($courseType['CourseType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($courseType['CourseType']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($courseType['CourseType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($courseType['CourseType']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Type'), array('action' => 'edit', $courseType['CourseType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Type'), array('action' => 'delete', $courseType['CourseType']['id']), null, __('Are you sure you want to delete # %s?', $courseType['CourseType']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Course Prices'); ?></h3>
	<?php if (!empty($courseType['CoursePrice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Membership Type Id'); ?></th>
		<th><?php echo __('Course Type Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($courseType['CoursePrice'] as $coursePrice): ?>
		<tr>
			<td><?php echo $coursePrice['id']; ?></td>
			<td><?php echo $coursePrice['created']; ?></td>
			<td><?php echo $coursePrice['modified']; ?></td>
			<td><?php echo $coursePrice['membership_type_id']; ?></td>
			<td><?php echo $coursePrice['course_type_id']; ?></td>
			<td><?php echo $coursePrice['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'course_prices', 'action' => 'view', $coursePrice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'course_prices', 'action' => 'edit', $coursePrice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'course_prices', 'action' => 'delete', $coursePrice['id']), null, __('Are you sure you want to delete # %s?', $coursePrice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Price'), array('controller' => 'course_prices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($courseType['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Course Type Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Time Slot'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($courseType['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['created']; ?></td>
			<td><?php echo $course['modified']; ?></td>
			<td><?php echo $course['course_type_id']; ?></td>
			<td><?php echo $course['start_date']; ?></td>
			<td><?php echo $course['end_date']; ?></td>
			<td><?php echo $course['time_slot']; ?></td>
			<td><?php echo $course['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), null, __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
