<?php

$this->start('pageTitle');
echo __('Memberships');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of memberships');
$this->end();

?>
<div class="memberships index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Memberships'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('Membership', 6, __('Actions')); // Set the label of the nth column to "Actions"
        			echo $this->DataTable->render('Membership', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div>
