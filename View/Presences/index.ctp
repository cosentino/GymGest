<?php

$this->start('pageTitle');
echo __('Presences');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of presences');
$this->end();

?>
<div class="presences index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Presences'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('Presence', 2, __('Actions')); // Set the label of the 3rd column to "Actions"
        			echo $this->DataTable->render('Presence', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div><!--context-->
