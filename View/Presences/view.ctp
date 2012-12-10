<div class="presences view">
<h2><?php  echo __('Presence'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($presence['Presence']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($presence['Presence']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($presence['Presence']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presence['Person']['name'], array('controller' => 'people', 'action' => 'view', $presence['Person']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Presence'), array('action' => 'edit', $presence['Presence']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Presence'), array('action' => 'delete', $presence['Presence']['id']), null, __('Are you sure you want to delete # %s?', $presence['Presence']['id'])); ?> </li>		
	</ul>
</div>
