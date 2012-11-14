<div class="courseTypes index">
	<h2><?php echo __('Course Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($courseTypes as $courseType): ?>
	<tr>
		<td><?php echo h($courseType['CourseType']['id']); ?>&nbsp;</td>
		<td><?php echo h($courseType['CourseType']['created']); ?>&nbsp;</td>
		<td><?php echo h($courseType['CourseType']['modified']); ?>&nbsp;</td>
		<td><?php echo h($courseType['CourseType']['name']); ?>&nbsp;</td>
		<td><?php echo h($courseType['CourseType']['notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $courseType['CourseType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $courseType['CourseType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $courseType['CourseType']['id']), null, __('Are you sure you want to delete # %s?', $courseType['CourseType']['id'])); ?>
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
