<div class="coursePrices view">
<h2><?php  echo __('Course Price'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coursePrice['CoursePrice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($coursePrice['CoursePrice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($coursePrice['CoursePrice']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membership Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursePrice['MembershipType']['name'], array('controller' => 'membership_types', 'action' => 'view', $coursePrice['MembershipType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursePrice['CourseType']['name'], array('controller' => 'course_types', 'action' => 'view', $coursePrice['CourseType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($coursePrice['CoursePrice']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Price'), array('action' => 'edit', $coursePrice['CoursePrice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Price'), array('action' => 'delete', $coursePrice['CoursePrice']['id']), null, __('Are you sure you want to delete # %s?', $coursePrice['CoursePrice']['id'])); ?> </li>		
	</ul>
</div>
