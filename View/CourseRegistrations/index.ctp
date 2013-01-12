<?php

$this->start('pageTitle');
echo __('Course Registrations');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of course registrations');
$this->end();

?>
<div class="courseRegistrations index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Course Registrations'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('CourseRegistration', 5, __('Actions')); // Set the label of the 3rd column to "Actions"
        			echo $this->DataTable->render('CourseRegistration', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div><!--context-->
