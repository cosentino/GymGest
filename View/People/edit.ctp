<?php

$this->start('pageTitle');
echo __('Edit Person');
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
                    <span class="title"><?php echo __('Person'); ?></span>
                    <div class="toolbar">
                    	<ul class="nav nav-pills">
                            <li class="active"><a href="#tab-01" data-toggle="tab">Personal Data</a></li>
                            <li><a href="#tab-02" data-toggle="tab">Membership</a></li>
                            <li><a href="#tab-03" data-toggle="tab">Subscriptions</a></li>
                            <li><a href="#tab-04" data-toggle="tab">Presences</a></li>
                            <li><a href="#tab-05" data-toggle="tab">Courses</a></li>
                        </ul>
					</div>
                </div><!-- widget-header -->

                <!--div class="tab-content"-->
                <div class="tab-content widget-content form-container">

                    <!-- Personal Data -->
                	<div class="tab-pane active" id="tab-01">
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

							//echo $this->Form->input('id');
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
                                array('action' => 'delete', $this->Form->value('Person.id')),
                                array('class' => 'btn btn-danger'),
                                __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))
                            );
                            ?>
                        </div>
					</div><!-- tab-01: Personal Data -->

                    <!-- Membership -->
					<div class="tab-pane" id="tab-02">
						<div class="widget-content table-container">
                            <?php if (!empty($this->data['Membership'])): ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><?php echo __('Created'); ?></th>
                                        <th><?php echo __('Membership Type'); ?></th>
                                        <th><?php echo __('Valid From'); ?></th>
                                        <th><?php echo __('Valid To'); ?></th>
                                        <th><?php echo __('Id Number'); ?></th>
                                        <th><?php echo __('Association'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($this->data['Membership'] as $membership):
                                ?>
                                    <tr>
                                        <td><?php echo $membership['created']; ?></td>
                                        <td><?php
                                                echo $this->Html->link(
                                                    $membership['MembershipType']['name'],
                                                    array('controller' => 'membership_types', 'action' => 'edit', $membership['membership_type_id'])
                                                );
                                        ?></td>
                                        <td><?php echo $membership['valid_from']; ?></td>
                                        <td><?php echo $membership['valid_to']; ?></td>
                                        <td><?php echo $membership['id_number']; ?></td>
                                        <td><?php echo $membership['association']; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(
                                                __('Edit'),
                                                array('controller' => 'memberships', 'action' => 'edit', $membership['id']),
                                                array('class' => 'btn btn-small')); ?>
                                            <?php echo $this->Form->postLink(
                                                __('Delete'),
                                                array('controller' => 'memberships', 'action' => 'delete', $membership['id']),
                                                array('class' => 'btn btn-small'),
                                                __('Are you sure you want to delete # %s?', $membership['id'])); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php endif; ?>

						    <div class="btn-toolbar">
								<ul>
									<li><?php echo $this->Html->link(
                                        __('New Membership'),
                                        array('controller' => 'memberships', 'action' => 'add'),
                                        array('class' => 'btn btn-success')
                                    ); ?></li>
								</ul>
							</div>
						</div><!-- widget-content -->												
					</div><!-- tab-02: Membership -->

                    <!-- Subscription -->
					<div class="tab-pane" id="tab-03">
                        <div class="widget-content table-container">
                            <?php if (!empty($this->data['Subscription'])): ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th><?php echo __('Created'); ?></th>
                                    <th><?php echo __('Modified'); ?></th>
                                    <th><?php echo __('Subscription Type'); ?></th>
                                    <th><?php echo __('Prepaid Count'); ?></th>
                                    <th><?php echo __('Valid From'); ?></th>
                                    <th><?php echo __('Valid To'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($this->data['Subscription'] as $subscription):
                                ?>
                                    <tr>
                                        <td><?php echo $subscription['created']; ?></td>
                                        <td><?php echo $subscription['modified']; ?></td>
                                        <td><?php
                                            echo $this->Html->link(
                                                $subscription['SubscriptionType']['name'],
                                                array('controller' => 'subscription_types', 'action' => 'edit', $subscription['subscription_type_id'])
                                            );
                                        ?></td>
                                        <td><?php echo $subscription['prepaid_count']; ?></td>
                                        <td><?php echo $subscription['valid_from']; ?></td>
                                        <td><?php echo $subscription['valid_to']; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'subscriptions', 'action' => 'edit',  $subscription['id']), array('class' => 'btn btn-small')); ?>
                                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subscriptions', 'action' => 'delete', $subscription['id']), array('class' => 'btn btn-small'), __('Are you sure you want to delete # %s?', $subscription['id'])); ?>
                                        </td>
                                    </tr>
							    <?php endforeach; ?>
                                </tbody>
                            </table>
						    <?php endif; ?>

                            <div class="btn-toolbar">
                                <ul>
                                    <li><?php echo $this->Html->link(
                                        __('New Subscription'),
                                        array('controller' => 'subscription', 'action' => 'add'),
                                        array('class' => 'btn btn-success'));
                                        ?></li>
                                </ul>
                            </div>
						</div>
					</div><!-- tab-03: Subscription -->

                    <!-- Presence -->
					<div class="tab-pane" id="tab-04">
                        <div class="widget-content table-container">
                            <?php if (!empty($this->data['Presence'])): ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th><?php echo __('Date & Time'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($this->data['Presence'] as $presence): ?>
                                    <tr>
                                        <td><?php echo $presence['created']; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'presences', 'action' => 'edit', $presence['id']), array('class' => 'btn btn-small')); ?>
                                            <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'presences', 'action' => 'delete', $presence['id']), array('class' => 'btn btn-small'), __('Are you sure you want to delete # %s?', $presence['id'])); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
							</table>
					    	<?php endif; ?>

                            <div class="btn-toolbar">
                                <ul>
                                    <li><?php echo $this->Html->link(
                                        __('New Presence'),
                                        array('controller' => 'presences', 'action' => 'add'),
                                        array('class' => 'btn btn-success'));
                                        ?></li>
                                </ul>
                            </div>
						</div>
					</div><!-- tab-04: Presences -->

                    <!-- Course Registration -->
					<div class="tab-pane" id="tab-05">
                        <div class="widget-content table-container">
                            <?php if (!empty($this->data['CourseRegistration'])): ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th><?php echo __('Created'); ?></th>
                                    <th><?php echo __('Course'); ?></th>
                                    <th><?php echo __('Paid'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 0;
                                    foreach ($this->data['CourseRegistration'] as $courseRegistration):
                                ?>
								<tr>
									<td><?php echo $courseRegistration['created']; ?></td>
									<td><?php echo $courseRegistration['course_id']; ?></td>
                                    <td><?php
                                        echo $this->Html->link(
                                            $courseRegistration['Course']['name'],
                                            array('controller' => 'course', 'action' => 'edit', $courseRegistration['course_id'])
                                        );
                                    ?></td>
									<td><?php echo $courseRegistration['paid']; ?></td>
									<td class="actions">
										<?php echo $this->Html->link(__('Edit'), array('controller' => 'course_registrations', 'action' => 'edit', $courseRegistration['id']), array('class' => 'btn btn-small')); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'course_registrations', 'action' => 'delete', $courseRegistration['id']), array('class' => 'btn btn-small'), __('Are you sure you want to delete # %s?', $courseRegistration['id'])); ?>
									</td>
								</tr>
							    <?php endforeach; ?>
                                </tbody>
							</table>
						    <?php endif; ?>

                            <div class="btn-toolbar">
                                <ul>
                                    <li><?php echo $this->Html->link(
                                        __('New Course Registration'),
                                        array('controller' => 'course_registrations', 'action' => 'add'),
                                        array('class' => 'btn btn-success'));
                                        ?></li>
                                </ul>
                            </div>
						</div>
					</div><!-- tab-05: Course subscription -->

				</div><!-- tab-content -->
			</div><!-- widget -->

		</div>
	</div>
</div>