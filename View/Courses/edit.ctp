<?php

$this->start('pageTitle');
echo __('Edit Course');
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
                    <span class="title"><?php echo __('Course'); ?></span>
                    <div class="toolbar">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#tab-01" data-toggle="tab"><?php echo __('Details'); ?></a></li>
                            <li><a href="#tab-02" data-toggle="tab"><?php echo __('Registrations'); ?></a></li>
                        </ul>
                    </div>
                </div><!-- widget-header -->

                <div class="tab-content widget-content form-container">

                    <!-- Details -->
                    <div class="tab-pane active" id="tab-01">
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

                        echo $this->Form->input('id');
                        echo $this->Form->input('course_type_id');
                        echo $this->Form->input('start_date', array('class' => 'span4'));
                        echo $this->Form->input('end_date', array('class' => 'span4'));
                        echo $this->Form->input('time_slot');
                        echo $this->Form->input('notes');

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
                                array('action' => 'delete', $this->Form->value('Course.id')),
                                array('class' => 'btn btn-danger'),
                                __('Are you sure you want to delete # %s?', $this->Form->value('Course.id'))
                            );
                            ?>
                        </div>
                    </div><!-- tab-01: Details -->

                    <!-- Registrations -->
                    <div class="tab-pane" id="tab-02">
                        <div class="widget-content table-container">

                            <?php if (!empty($this->data['CourseRegistration'])): ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!--<th><?php /*echo __('Id'); */?></th>-->
                                        <th><?php echo __('Created'); ?></th>
                                        <!--<th><?php /*echo __('Modified'); */?></th>-->
                                        <!--<th><?php /*echo __('Course'); */?></th>-->
                                        <th><?php echo __('Person'); ?></th>
                                        <th><?php echo __('Paid'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 0;
                                foreach ($this->data['CourseRegistration'] as $courseRegistration): ?>
                                    <tr>
                                        <!--<td><?php /*echo $courseRegistration['id']; */?></td>-->
                                        <td><?php echo $courseRegistration['created']; ?></td>
                                        <!--<td><?php /*echo $courseRegistration['modified']; */?></td>-->
                                        <!--<td><?php /*echo $courseRegistration['course_id']; */?></td>-->
                                        <td><?php echo $courseRegistration['person_id']; ?></td>
                                        <td><?php echo $courseRegistration['paid']; ?></td>
                                        <td class="actions">
                                            <?php /*echo $this->Html->link(__('View'), array('controller' => 'course_registrations', 'action' => 'view', $courseRegistration['id'])); */?>
                                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'course_registrations', 'action' => 'edit', $courseRegistration['id']), array('class' => 'btn btn-small')); ?>
                                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'course_registrations', 'action' => 'delete', $courseRegistration['id']), array('class' => 'btn btn-small'), __('Are you sure you want to delete # %s?', $courseRegistration['id'])); ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                            </table>
                            <?php endif; ?>

                            <div class="btn-toolbar">
                                <ul>
                                    <li><?php echo $this->Html->link(
                                        __('New Registration'),
                                        array('controller' => 'registrations', 'action' => 'add'),
                                        array('class' => 'btn btn-success')
                                    ); ?> </li>
                                </ul>
                            </div>
                        </div><!-- widget-content -->
                    </div><!-- tab-02: Registrations -->

