<?php

$this->start('pageTitle');
echo __('Add User');
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
                    <span class="title"><?php echo __('Add User'); ?></span>
                </div>
                <div class="widget-content form-container">
                    <?php

                    echo $this->Form->create('User', array(
                        'class' => 'form-horizontal',
                        'inputDefaults' => array(
                            'div' => 'control-group',
                            'label' => array('class' => 'control-label'),
                            'between' => '<div class="controls">',
                            'after' => '</div>',
                            'class' => 'span12'
                        )
                    ));

                    echo $this->Form->input('username');
                    echo $this->Form->input('password');
                    echo $this->Form->input('role');

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

