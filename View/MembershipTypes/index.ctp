<?php

$this->start('pageTitle');
echo __('Membership Types');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of membership types');
$this->end();

?>
<div class="membershipTypes index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Membership Types'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('MembershipType', 3, __('Actions')); // Set the label of the 3rd column to "Actions"
        			echo $this->DataTable->render('MembershipType', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div><!--context-->