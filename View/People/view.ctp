<div class="people view">
<h2><?php  echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($person['Person']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($person['Person']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($person['Person']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prepaid Presences'); ?></dt>
		<dd>
			<?php echo h($person['Person']['prepaid_presences']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($person['Person']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($person['Person']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($person['Person']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($person['Person']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('County'); ?></dt>
		<dd>
			<?php echo h($person['Person']['county']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($person['Person']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthdate'); ?></dt>
		<dd>
			<?php echo h($person['Person']['birthdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($person['Person']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Course Registrations'); ?></h3>
	<?php if (!empty($person['CourseRegistration'])): ?>
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
		foreach ($person['CourseRegistration'] as $courseRegistration): ?>
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
<div class="related">
	<h3><?php echo __('Related Memberships'); ?></h3>
	<?php if (!empty($person['Membership'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Membership Type Id'); ?></th>
		<th><?php echo __('Valid From'); ?></th>
		<th><?php echo __('Valid To'); ?></th>
		<th><?php echo __('Id Number'); ?></th>
		<th><?php echo __('Association'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Membership'] as $membership): ?>
		<tr>
			<td><?php echo $membership['id']; ?></td>
			<td><?php echo $membership['created']; ?></td>
			<td><?php echo $membership['modified']; ?></td>
			<td><?php echo $membership['person_id']; ?></td>
			<td><?php echo $membership['membership_type_id']; ?></td>
			<td><?php echo $membership['valid_from']; ?></td>
			<td><?php echo $membership['valid_to']; ?></td>
			<td><?php echo $membership['id_number']; ?></td>
			<td><?php echo $membership['association']; ?></td>
			<td><?php echo $membership['role']; ?></td>
			<td><?php echo $membership['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'memberships', 'action' => 'view', $membership['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'memberships', 'action' => 'edit', $membership['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'memberships', 'action' => 'delete', $membership['id']), null, __('Are you sure you want to delete # %s?', $membership['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Membership'), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Presences'); ?></h3>
	<?php if (!empty($person['Presence'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Subscription Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Presence'] as $presence): ?>
		<tr>
			<td><?php echo $presence['id']; ?></td>
			<td><?php echo $presence['created']; ?></td>
			<td><?php echo $presence['modified']; ?></td>
			<td><?php echo $presence['person_id']; ?></td>
			<td><?php echo $presence['subscription_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'presences', 'action' => 'view', $presence['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'presences', 'action' => 'edit', $presence['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'presences', 'action' => 'delete', $presence['id']), null, __('Are you sure you want to delete # %s?', $presence['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Presence'), array('controller' => 'presences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subscriptions'); ?></h3>
	<?php if (!empty($person['Subscription'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Subscription Type Id'); ?></th>
		<th><?php echo __('Valid From'); ?></th>
		<th><?php echo __('Valid To'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Subscription'] as $subscription): ?>
		<tr>
			<td><?php echo $subscription['id']; ?></td>
			<td><?php echo $subscription['created']; ?></td>
			<td><?php echo $subscription['modified']; ?></td>
			<td><?php echo $subscription['person_id']; ?></td>
			<td><?php echo $subscription['subscription_type_id']; ?></td>
			<td><?php echo $subscription['valid_from']; ?></td>
			<td><?php echo $subscription['valid_to']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subscriptions', 'action' => 'view', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subscriptions', 'action' => 'edit', $subscription['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subscriptions', 'action' => 'delete', $subscription['id']), null, __('Are you sure you want to delete # %s?', $subscription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>	
	
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscription'), array('controller' => 'subscription', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
