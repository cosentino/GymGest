<?php

$this->start('pageTitle');
echo __('People');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of people');
$this->end();

?>
<div class="people index">
	
	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('People'); ?></span>
	        </div>
	        <div class="widget-content table-container">
				<table id="demo-dtable-01" class="table table-striped">
                    <thead>
                		<tr>
                			<!--
								<th><?php //echo $this->Paginator->sort('id'); ?></th>
								<th><?php //echo $this->Paginator->sort('created'); ?></th>
								<th><?php //echo $this->Paginator->sort('modified'); ?></th>
							-->
								<th><?php echo $this->Paginator->sort('name'); ?></th>
								<th><?php echo $this->Paginator->sort('surname'); ?></th>
							<!--
								<th><?php //echo $this->Paginator->sort('prepaid_presences'); ?></th>
								<th><?php //echo $this->Paginator->sort('gender'); ?></th>
								<th><?php //echo $this->Paginator->sort('address'); ?></th>
								<th><?php //echo $this->Paginator->sort('zip'); ?></th>
								<th><?php //echo $this->Paginator->sort('city'); ?></th>
								<th><?php //echo $this->Paginator->sort('county'); ?></th>
								<th><?php //echo $this->Paginator->sort('country'); ?></th>
								<th><?php //echo $this->Paginator->sort('telephone'); ?></th>
								<th><?php //echo $this->Paginator->sort('email'); ?></th>
							-->
								<th><?php echo $this->Paginator->sort('birthdate'); ?></th>
							<!--
								<th><?php //echo $this->Paginator->sort('notes'); ?></th>
							-->
								<th class="actions"><?php echo __('Actions'); ?></th>
                		</tr>
                	</thead>
                    <tbody>
                        
                        <?php foreach ($people as $person): ?>
						<tr>
						<!--
							<td><?php //echo h($person['Person']['id']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['created']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['modified']); ?>&nbsp;</td>
						-->
							<td><?php echo h($person['Person']['name']); ?>&nbsp;</td>
							<td><?php echo h($person['Person']['surname']); ?>&nbsp;</td>
						<!--
							<td><?php //echo h($person['Person']['prepaid_presences']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['gender']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['address']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['zip']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['city']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['county']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['country']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['telephone']); ?>&nbsp;</td>
							<td><?php //echo h($person['Person']['email']); ?>&nbsp;</td>
						-->
							<td><?php echo h($person['Person']['birthdate']); ?>&nbsp;</td>
						<!--
							<td><?php //echo h($person['Person']['notes']); ?>&nbsp;</td>
						-->
                            <td class="actions">
                                <span class="btn-group">
                                    <?php
                                        //$td_action .= ' ' . $this->Html->link(__('View'), array('action' => 'view', $result['Person']['id']));
                                        echo ' ' . $this->Html->link(
                                            '<i class="icon-pencil"></i>',
                                            array('action' => 'edit', $person['Person']['id']),
                                            array('class' => 'btn btn-small', 'title' => __('Edit'), 'escape' => false)
                                        );
                                        echo ' ' . $this->Form->postLink(
                                            '<i class="icon-trash"></i>',
                                            array('action' => 'delete', $person['Person']['id']),
                                            array('class' => 'btn btn-small', 'title' => __('Delete'), 'escape' => false),
                                            __('Are you sure you want to delete # %s?', $person['Person']['id'])
                                        );
                                    ?>
                                </span>
							</td>
						</tr>

						<tr>
                            <td colspan="2">
                                <em>
                                    <?php echo __('Valid subscription: ') ?>
                                    <?php

                                        App::import('Controller', 'Subscriptions');// We need to load the class
                                        $Subscriptions = new SubscriptionsController;// If we want the model associations, components, etc to be loaded

                                        $valid_subscriptions = $Subscriptions->getValidSubscriptions($person['Person']['id']);
                                        if ($valid_subscriptions) {
                                            $valid_subscription = current($valid_subscriptions);

                                            //CASO Subscription contenente degli ingressi prepagati:
                                            //	mostro il numero di ingressi rimanenti
                                            if ($valid_subscription['SubscriptionType']['prepaid'] == true) {
                                                echo h($valid_subscription['SubscriptionType']['name']) .
                                                    " (Left: " . h($valid_subscription['Subscription']['prepaid_count']) . ")";
                                            }
                                            //CASO Subscription di tipo Abbonamento:
                                            // mostro la data di scadenza dell'abbonamento
                                            else {
                                                echo h($valid_subscription['SubscriptionType']['name']) .
                                                    " (Expiry: " . h($valid_subscription['Subscription']['valid_to']) . ")";
                                            }
                                        } else {
                                            echo __('None');
                                        }
                                    ?>
                                    <br />
                                    <?php echo $this->Html->link(__('+ Subscription'), array(
                                        'controller'=>'subscriptions',
                                        'action' => 'add',
                                        'person_id' => $person['Person']['id']
                                    )); ?>
                                </em>
                            </td>
                            <td>
                                <em><?php echo __('Memberships:') ?></em>
                                <?php
                                if ($person['Membership']) {
                                    //echo '<ul>';

                                    App::import('Model', 'MembershipType');// We need to load the class
                                    $MembershipType = new MembershipType;// If we want the model associations, components, etc to be loaded

                                    foreach ($person['Membership'] as $membership):
                                        $membership_type = $MembershipType->find('list', array(
                                            'fields' => array('MembershipType.name'),
                                            'conditions' => array('id' => $membership['membership_type_id'])
                                        ));

                                        if ($membership_type) {
                                            //echo '<li>';
                                            echo $this->Html->link(current($membership_type), array(
                                                'controller'=>'memberships',
                                                'action' => 'view',
                                                $membership['id']
                                            ));
                                            echo ', ';
                                            //echo '</li>';
                                        }
                                    endforeach;

                                    //echo '</ul>';

                                } else {
                                    echo __('None');
                                }
                                ?>
                                <br />

                                <?php
                                echo $this->Html->link(__('+ Membership'), array(
                                    'controller'=>'memberships',
                                    'action' => 'add',
                                    $person['Person']['id']
                                )); ?>
                            </td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('Register presence'), array(
                                    'controller'=>'presences',
                                    'action' => 'add_to_person',
                                    'person_id' => $person['Person']['id']
                                )); ?>
                            </td>
						</tr>
						<?php endforeach; ?>

                    </tbody>
                </table>
            </div><!-- widget-content -->
        </div><!-- widget -->
        
        
        <p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>
		</p>

		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>

    </div><!--row-fluid-->
		
</div><!--context-->
