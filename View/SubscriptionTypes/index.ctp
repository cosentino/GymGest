<?php

$this->start('pageTitle');
echo __('Subscription Types');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of subscription types');
$this->end();

?>
<div class="subscriptionTypes index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Subscription Types'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('SubscriptionType', 4, __('Actions')); // Set the label of the nth column to "Actions"
        			echo $this->DataTable->render('SubscriptionType', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->

</div>