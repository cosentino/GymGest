<div class="memberships view">
<h2><?php  echo __('Membership'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membership['Person']['name'], array('controller' => 'people', 'action' => 'view', $membership['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membership Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membership['MembershipType']['name'], array('controller' => 'membership_types', 'action' => 'view', $membership['MembershipType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid From'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid To'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Number'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['id_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['association']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($membership['Membership']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membership'), array('action' => 'edit', $membership['Membership']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membership'), array('action' => 'delete', $membership['Membership']['id']), null, __('Are you sure you want to delete # %s?', $membership['Membership']['id'])); ?> </li>
	</ul>
</div>
