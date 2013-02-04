<?php

$this->start('pageTitle');
echo __('Edit User');
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
                    <span class="title"><?php echo __('Edit User'); ?></span>
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

                    echo $this->Form->input('id');
                    echo $this->Form->input('username');
                    echo $this->Form->input('password');
                    echo $this->Form->input('role');

                    ?>
                    <div class="form-actions btn-toolbar">
                        <?php
                        echo $this->Form->end(array(
                            'label' => __('Submit'),
                            'div' => false,
                            'class' => 'btn btn-primary'
                        ));
                        echo $this->Form->postLink(
                            __('Delete'),
                            array('action' => 'delete', $this->Form->value('User.id')),
                            array('class' => 'btn btn-danger'),
                            __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))
                        );
                        ?>
                    </div>
                </div><!-- widget-content -->

            </div><!-- widget -->
        </div>
    </div>
</div>
