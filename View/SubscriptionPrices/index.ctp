<?php

$this->start('pageTitle');
echo __('Subscription Prices');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of subscription prices');
$this->end();

?>
<div class="subscriptionPrices index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Subscription Prices'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('SubscriptionPrice', 4, __('Actions')); // Set the label of the 3rd column to "Actions"
        			echo $this->DataTable->render('SubscriptionPrice', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div><!--context-->
