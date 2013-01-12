<?php

$this->start('pageTitle');
echo __('Users');
$this->end();

$this->start('pageSubtitle');
echo __('The full list of users');
$this->end();

?>
<div class="users index">

	<div class="row-fluid">
	    <div class="span12 widget">
	        <div class="widget-header">
	            <span class="title"><?php echo __('Users'); ?></span>
	        </div>
	        <div class="widget-content table-container">
	        	<?php
	        		$this->DataTable->setLabel('User', 5, __('Actions')); // Set the label of the 3rd column to "Actions"
        			echo $this->DataTable->render('User', array('class' => 'table table-striped dataTable')); 
	        	?>
			 </div><!-- widget-content -->
        </div><!-- widget -->
	</div><!--row-fluid-->
	
</div><!--context-->
