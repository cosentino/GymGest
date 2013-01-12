<?php

$this->start('pageTitle');
echo __('Courses');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of courses');
$this->end();

?>
<div class="courses index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Courses'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('Course', 6, __('Actions')); // Set the label of the 3rd column to "Actions"
        			echo $this->DataTable->render('Course', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div><!--context-->
