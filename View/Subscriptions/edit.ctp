<?php

$this->start('pageTitle');
echo __('Edit Subscription');
$this->end();

$this->start('pageSubtitle');
echo __('');
$this->end();

?>
<div class="people form">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <span class="title"><?php echo __('Subscription'); ?></span>
                </div>
                <div class="widget-content form-container">
                    <?php

                        echo $this->Form->create('Subscription', array(
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
                        echo $this->Form->input('subscription_type_id');
                        echo $this->Form->input('valid_from', array('class' => 'span4'));
                        echo $this->Form->input('valid_to', array('class' => 'span4'));
                        echo $this->Form->input('prepaid_count');
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
                            array('action' => 'delete', $this->Form->value('Subscription.id')),
                            array('class' => 'btn btn-danger'),
                            __('Are you sure you want to delete # %s?', $this->Form->value('Subscription.id'))
                        );
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
