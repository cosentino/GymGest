<?php

$this->start('pageTitle');
echo __('Edit Course Type');
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
                    <span class="title"><?php echo __('Edit Course Type'); ?></span>
                    <div class="toolbar">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#tab-01" data-toggle="tab"><?php echo __('Details'); ?></a></li>
                            <li><a href="#tab-02" data-toggle="tab"><?php echo __('Prices'); ?></a></li>
                            <li><a href="#tab-03" data-toggle="tab"><?php echo __('Courses'); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content widget-content form-container">

                    <!-- Details -->
                    <div class="tab-pane active" id="tab-01">
                        <?php
                        echo $this->Form->create('CourseType', array(
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
                        echo $this->Form->input('name');
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
                                array('action' => 'delete', $this->Form->value('CourseType.id')),
                                array('class' => 'btn btn-danger'),
                                __('Are you sure you want to delete # %s?', $this->Form->value('CourseType.id'))
                            );
                            ?>
                        </div>
                    </div><!-- tab-01: Details -->

                    <!-- Prices -->
                    <div class="tab-pane" id="tab-02">
                        <div class="widget-content table-container">
                            <?php if (!empty($this->data['CoursePrice'])): ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!--<th><?php /*echo __('Id'); */?></th>-->
                                        <th><?php echo __('Created'); ?></th>
                                        <!--<th><?php /*echo __('Modified'); */?></th>-->
                                        <th><?php echo __('Membership Type'); ?></th>
                                        <!--<th><?php /*echo __('Course Type Id'); */?></th>-->
                                        <th><?php echo __('Price'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($this->data['CoursePrice'] as $coursePrice): ?>
                                        <tr>
                                            <!--<td><?php /*echo $coursePrice['id']; */?></td>-->
                                            <td><?php echo $coursePrice['created']; ?></td>
                                            <!--<td><?php /*echo $coursePrice['modified']; */?></td>-->
                                            <td><?php
                                                echo $this->Html->link(
                                                    $coursePrice['MembershipType']['name'],
                                                    array('controller' => 'membership_types', 'action' => 'edit', $coursePrice['membership_type_id'])
                                                );
                                            ?></td>
                                            <!--<td><?php /*echo $coursePrice['course_type_id']; */?></td>-->
                                            <td><?php echo $coursePrice['price']; ?></td>
                                            <td class="actions">
                                                <?php /*echo $this->Html->link(__('View'), array('controller' => 'course_prices', 'action' => 'view', $coursePrice['id'])); */?>
                                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'course_prices', 'action' => 'edit', $coursePrice['id']), array('class' => 'btn btn-small')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'course_prices', 'action' => 'delete', $coursePrice['id']), array('class' => 'btn btn-small'), __('Are you sure you want to delete # %s?', $coursePrice['id'])); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php endif; ?>

                            <div class="btn-toolbar">
                                <ul>
                                    <li><?php echo $this->Html->link(
                                        __('New Course Price'),
                                        array('controller' => 'course_prices', 'action' => 'add'),
                                        array('class' => 'btn btn-success')
                                    ); ?> </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- tab-02: Prices -->

                    <!-- Courses -->
                    <div class="tab-pane" id="tab-03">
                        <div class="widget-content table-container">
                            <?php if (!empty($this->data['Course'])): ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!--<th><?php /*echo __('Id'); */?></th>-->
                                        <th><?php echo __('Created'); ?></th>
                                        <!--<th><?php /*echo __('Modified'); */?></th>-->
                                        <!--<th><?php /*echo __('Course Type Id'); */?></th>-->
                                        <th><?php echo __('Start Date'); ?></th>
                                        <th><?php echo __('End Date'); ?></th>
                                        <th><?php echo __('Time Slot'); ?></th>
                                        <!--<th><?php /*echo __('Notes'); */?></th>-->
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 0;
                                foreach ($this->data['Course'] as $course): ?>
                                    <tr>
                                        <!--<td><?php /*echo $course['id']; */?></td>-->
                                        <td><?php echo $course['created']; ?></td>
                                        <!--<td><?php /*echo $course['modified']; */?></td>-->
                                        <!--<td><?php /*echo $course['course_type_id']; */?></td>-->
                                        <td><?php echo $course['start_date']; ?></td>
                                        <td><?php echo $course['end_date']; ?></td>
                                        <td><?php echo $course['time_slot']; ?></td>
                                        <!--<td><?php /*echo $course['notes']; */?></td>-->
                                        <td class="actions">
                                            <?php /*echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); */?>
                                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id']), array('class' => 'btn btn-small')); ?>
                                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), array('class' => 'btn btn-small'), __('Are you sure you want to delete # %s?', $course['id'])); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php endif; ?>

                            <div class="btn-toolbar">
                                <ul>
                                    <li><?php echo $this->Html->link(
                                        __('New Course'),
                                        array('controller' => 'courses', 'action' => 'add'),
                                        array('class' => 'btn btn-success')
                                    ); ?> </li>
                                </ul>
                            </div>

                        </div>
                    </div><!-- tab-03: Course -->

                </div><!-- widget-content -->

            </div><!-- widget -->
        </div>
    </div>
</div>
