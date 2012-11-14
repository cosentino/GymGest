<div class="membershipTypes view">
<h2><?php  echo __('Membership Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membershipType['MembershipType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($membershipType['MembershipType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($membershipType['MembershipType']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($membershipType['MembershipType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($membershipType['MembershipType']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membership Type'), array('action' => 'edit', $membershipType['MembershipType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membership Type'), array('action' => 'delete', $membershipType['MembershipType']['id']), null, __('Are you sure you want to delete # %s?', $membershipType['MembershipType']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Course Prices'); ?></h3>
	<?php if (!empty($membershipType['CoursePrice'])): ?>
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
		foreach ($membershipType['CoursePrice'] as $coursePrice): ?>
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
	<h3><?php echo __('Related Memberships'); ?></h3>
	<?php if (!empty($membershipType['Membership'])): ?>
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
		foreach ($membershipType['Membership'] as $membership): ?>
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
	<h3><?php echo __('Related Subscription Prices'); ?></h3>
	<?php if (!empty($membershipType['SubscriptionPrice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Membership Type Id'); ?></th>
		<th><?php echo __('Subscription Type Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($membershipType['SubscriptionPrice'] as $subscriptionPrice): ?>
		<tr>
			<td><?php echo $subscriptionPrice['id']; ?></td>
			<td><?php echo $subscriptionPrice['created']; ?></td>
			<td><?php echo $subscriptionPrice['modified']; ?></td>
			<td><?php echo $subscriptionPrice['membership_type_id']; ?></td>
			<td><?php echo $subscriptionPrice['subscription_type_id']; ?></td>
			<td><?php echo $subscriptionPrice['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subscription_prices', 'action' => 'view', $subscriptionPrice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subscription_prices', 'action' => 'edit', $subscriptionPrice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subscription_prices', 'action' => 'delete', $subscriptionPrice['id']), null, __('Are you sure you want to delete # %s?', $subscriptionPrice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscription Price'), array('controller' => 'subscription_prices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
