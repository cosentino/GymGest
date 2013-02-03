<?php

$this->start('pageTitle');
echo __('Add Course');
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
                    <span class="title"><?php echo __('Add Course'); ?></span>
                </div>
                <div class="widget-content form-container">
                    <?php

                    echo $this->Form->create('Course', array(
                        'class' => 'form-horizontal',
                        'inputDefaults' => array(
                            'div' => 'control-group',
                            'label' => array('class' => 'control-label'),
                            'between' => '<div class="controls">',
                            'after' => '</div>',
                            'class' => 'span12'
                        )
                    ));

                    echo $this->Form->input('course_type_id');
                    echo $this->Form->input('start_date', array('class' => 'span4'));
                    echo $this->Form->input('end_date', array('class' => 'span4'));
                    echo $this->Form->input('time_slot');
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