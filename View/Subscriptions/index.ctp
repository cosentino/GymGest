<?php

$this->start('pageTitle');
echo __('Subscriptions');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of subscriptions');
$this->end();

?>
<div class="subscriptions index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Subscriptions'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('Subscription', 6, __('Actions')); // Set the label of the nth column to "Actions"
        			echo $this->DataTable->render('Subscription', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div>