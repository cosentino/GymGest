<div class="courseRegistrations index">
	<h2><?php echo __('Course Registrations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('paid'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($courseRegistrations as $courseRegistration): ?>
	<tr>
		<td><?php echo h($courseRegistration['CourseRegistration']['id']); ?>&nbsp;</td>
		<td><?php echo h($courseRegistration['CourseRegistration']['created']); ?>&nbsp;</td>
		<td><?php echo h($courseRegistration['CourseRegistration']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($courseRegistration['Course']['id'], array('controller' => 'courses', 'action' => 'view', $courseRegistration['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($courseRegistration['Person']['name'], array('controller' => 'people', 'action' => 'view', $courseRegistration['Person']['id'])); ?>
		</td>
		<td><?php echo h($courseRegistration['CourseRegistration']['paid']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $courseRegistration['CourseRegistration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $courseRegistration['CourseRegistration']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $courseRegistration['CourseRegistration']['id']), null, __('Are you sure you want to delete # %s?', $courseRegistration['CourseRegistration']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
