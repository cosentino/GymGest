<?php

$this->start('pageTitle');
echo __('Course Types');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of course types');
$this->end();

?>
<div class="courseTypes index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Course Types'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('CourseType', 4, __('Actions')); // Set the label of the 3rd column to "Actions"
        			echo $this->DataTable->render('CourseType', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div><!--context-->
