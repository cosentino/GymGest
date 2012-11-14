<div class="membershipTypes form">
<?php echo $this->Form->create('MembershipType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Membership Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MembershipType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MembershipType.id'))); ?></li>		
	</ul>
</div>
