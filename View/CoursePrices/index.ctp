<?php

$this->start('pageTitle');
echo __('Course Prices');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of course prices');
$this->end();

?>
<div class="coursePrices index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Course Prices'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('CoursePrice', 6, __('Actions')); // Set the label of the 3rd column to "Actions"
        			echo $this->DataTable->render('CoursePrice', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div><!--context-->
