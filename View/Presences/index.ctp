<div class="presences index">

	<h2><?php echo __('Presences'); ?></h2>

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('People'); ?></span>
	        </div>
	        <div class="widget-content table-container">
				<table id="demo-dtable-01" class="table table-striped">
                    <thead>	
						<tr>
							<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<!--<th><?php echo $this->Paginator->sort('modified'); ?></th>-->
							<th><?php echo $this->Paginator->sort('person_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
                	<tbody>
						<?php
						foreach ($presences as $presence): ?>
						<tr>
							<!--<td><?php echo h($presence['Presence']['id']); ?>&nbsp;</td>-->
							<td><?php echo h($presence['Presence']['created']); ?>&nbsp;</td>
							<!--<td><?php echo h($presence['Presence']['modified']); ?>&nbsp;</td>-->
							<td>
								<?php echo $this->Html->link($presence['Person']['name'], array('controller' => 'people', 'action' => 'view', $presence['Person']['id'])); ?>
							</td>		
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $presence['Presence']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $presence['Presence']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $presence['Presence']['id']), null, __('Are you sure you want to delete # %s?', $presence['Presence']['id'])); ?>
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
