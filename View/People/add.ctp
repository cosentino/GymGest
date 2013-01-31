<?php

$this->start('pageTitle');
echo __('Add Person');
$this->end();

$this->start('pageSubtitle');
echo __('');
$this->end();

?>
<div class="form">
	<div class="row-fluid">
    	<div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <span class="title"><?php echo __('Add Person'); ?></span>
                </div>
                <div class="widget-content form-container">
					<?php
						
						echo $this->Form->create('Person', array(
							'class' => 'form-horizontal',
							'inputDefaults' => array(
								'div' => 'control-group', 
								'label' => array('class' => 'control-label'), 
								'between' => '<div class="controls">', 
								'after' => '</div>',
								'class' => 'span12'
							)
						));

						echo $this->Form->input('name');
						echo $this->Form->input('surname');

						//Radio Options require a bit more code...
						echo '<div class="control-group">';
						echo '	<label class="control-label">' . _('Gender') . '</label>';
						echo '	<div class="controls">';
						echo '		<label class="radio">';
						echo $this->Form->radio(
							'gender',
							array(
								'M' => _('Man'),
								'F' => _('Woman')
							),
							array(
								'value' => 'M',
								'legend' => false,
								'label' => false,
								'separator' => '</label><label class="radio">'							
							)
						);
						echo '		</label>';
						echo '	</div>';
						echo '</div>';

						echo $this->Form->input('address');
						echo $this->Form->input('zip');
						echo $this->Form->input('city');
						echo $this->Form->input('county');
						echo $this->Form->input('country');
						echo $this->Form->input('telephone');
						echo $this->Form->input('email');
						echo $this->Form->input('birthdate', array('class' => 'span4'));
						echo $this->Form->input('notes');
						
						echo $this->Form->end(array(
							'label' => __('Submit'),
							'div' => array('class' => 'form-actions'),
							'class' => 'btn btn-primary'
						)); 
					?>
				</div>
			</div>
		</div>
	</div>
</div>
