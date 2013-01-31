<?php

$this->start('pageTitle');
echo __('Add Presence');
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
                    <span class="title"><?php echo __('Add Presence'); ?></span>
                </div>
                <div class="widget-content form-container">
                <?php

                    echo $this->Form->create('Presence', array(
                        'class' => 'form-horizontal',
                        'inputDefaults' => array(
                            'div' => 'control-group',
                            'label' => array('class' => 'control-label'),
                            'between' => '<div class="controls">',
                            'after' => '</div>',
                            'class' => 'span12'
                        )
                    ));

                    echo $this->Form->input('person_id', array('default' => $par_person_id));

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
