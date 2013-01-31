<?php

$this->start('pageTitle');
echo __('Add Membership');
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
                    <span class="title"><?php echo __('Add Membership'); ?></span>
                </div>
                <div class="widget-content form-container">
                    <?php

                    echo $this->Form->create('Membership', array(
                        'class' => 'form-horizontal',
                        'inputDefaults' => array(
                            'div' => 'control-group',
                            'label' => array('class' => 'control-label'),
                            'between' => '<div class="controls">',
                            'after' => '</div>',
                            'class' => 'span12'
                        )
                    ));

                    echo $this->Form->input('person_id');
                    echo $this->Form->input('membership_type_id');
                    echo $this->Form->input('valid_from', array('class' => 'span4'));
                    echo $this->Form->input('valid_to', array('class' => 'span4'));
                    echo $this->Form->input('id_number');
                    echo $this->Form->input('association');
                    echo $this->Form->input('role');
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
