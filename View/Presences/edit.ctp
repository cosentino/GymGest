<?php

$this->start('pageTitle');
echo __('Edit Presence');
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
                    <span class="title"><?php echo __('Edit Presence'); ?></span>
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

                    echo $this->Form->input('id');
                    echo $this->Form->input('person_id');

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
                            array('action' => 'delete', $this->Form->value('Presence.id')),
                            array('class' => 'btn btn-danger'),
                            __('Are you sure you want to delete # %s?', $this->Form->value('Presence.id'))
                        );
                        ?>
                    </div>
                </div><!-- widget-content -->

            </div><!-- widget -->
        </div>
    </div>
</div>
