<div class="presences form">
<?php echo $this->Form->create('Presence'); ?>
	<fieldset>
		<legend><?php echo __('Add Presence'); ?></legend>
	<?php		
		$default_person_id = $this->request->params['named']['person_id'];
		echo $this->Form->input('person_id', array('default' => $default_person_id));		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
