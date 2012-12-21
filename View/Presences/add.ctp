<div class="presences form">
<?php echo $this->Form->create('Presence'); ?>
	<fieldset>
		<legend><?php echo __('Add Presence'); ?></legend>
		<?php echo $this->Form->input('person_id', array('default' => $par_person_id));	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
