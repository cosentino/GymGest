<div class="presences form">
<?php echo $this->Form->create('Presence'); ?>
	<fieldset>
		<legend><?php echo __('Add Presence'); ?></legend>

		<div class="input text">
			<label><?php echo __('Person'); ?></label>
			<span>
				<?php echo $this->Form->input('person_id', array('type' => 'hidden', 'default' => $par_person_id)); ?>
				<?php echo $person['Person']['name'] . ' ' . $person['Person']['surname']; ?>
			</span>
		</div>

		<?php echo $this->Form->input('subscription_id', array('options' => $valid_subscriptions)); ?>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
