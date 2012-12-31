<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
	?>

	<!-- Bootstrap Stylesheet -->
	<link rel="stylesheet" href="<?php echo $this->base; ?>/bootstrap/css/bootstrap.min.css" media="screen">

	<!-- jquery-ui Stylesheets -->
	<link rel="stylesheet" href="<?php echo $this->base; ?>/assets/jui/css/jquery.ui.all.css" media="screen">
	<link rel="stylesheet" href="<?php echo $this->base; ?>/assets/jui/jquery-ui.custom.css" media="screen">
	<link rel="stylesheet" href="<?php echo $this->base; ?>/assets/jui/timepicker/jquery-ui-timepicker.css" media="screen">

	<!-- Uniform Stylesheet -->
	<link rel="stylesheet" href="<?php echo $this->base; ?>/plugins/uniform/css/uniform.default.css">

	<!-- Plugin Stylsheets first to ease overrides -->

	<!-- iButton -->
	<link rel="stylesheet" href="<?php echo $this->base; ?>/plugins/ibutton/jquery.ibutton.css" media="screen">

	<!-- Circular Stat -->
	<link rel="stylesheet" href="<?php echo $this->base; ?>/custom-plugins/circular-stat/circular-stat.css">

	<!-- Fullcalendar -->
	<link rel="stylesheet" href="<?php echo $this->base; ?>/plugins/fullcalendar/fullcalendar.css" media="screen">
	<link rel="stylesheet" href="<?php echo $this->base; ?>/plugins/fullcalendar/fullcalendar.print.css" media="print">

	<!-- End Plugin Stylesheets -->

	<!-- Main Layout Stylesheet -->
	<link rel="stylesheet" href="<?php echo $this->base; ?>/assets/css/fonts/icomoon/style.css" media="screen">
	<link rel="stylesheet" href="<?php echo $this->base; ?>/assets/css/mooncake.min.css" media="screen">
	<link rel="stylesheet" href="<?php echo $this->base; ?>/assets/css/plugins/plugins.min.css" media="screen">

	<?php echo $this->fetch('css'); ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php echo $this->fetch('scriptTop'); ?>
</head>
<body>

	<div id="wrapper">
        <header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
					<div class="brand-wrap pull-left">
						<div class="brand-img">
							<a class="brand" href="#">
								<img src="<?php echo $this->base; ?>/assets/images/logo.png" alt="">
							</a>
						</div>
					</div>
                    
                    <div id="header-right" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
						<div id="header-search">
							<span id="search-toggle" data-toggle="dropdown">
								<i class="icon-search"></i>
							</span>
							<form class="navbar-search">
								<input type="text" class="search-query" placeholder="Search">
							</form>
						</div>
						<div id="dropdown-lists">
							<a class="item" href="#">
								<span class="item-icon"><i class="icon-exclamation-sign"></i></span>
								<span class="item-label">Notifications</span>
								<span class="item-count">4</span>
							</a>
							<a class="item" href="mail.html">
								<span class="item-icon"><i class="icon-envelope"></i></span>
								<span class="item-label">Messages</span>
								<span class="item-count">16</span>
							</a>
						</div>
                        
                        <div id="header-functions" class="pull-right">
                        	<div id="user-info" class="clearfix">
                                <span class="info">
                                	Welcome
                                    <span class="name">Marcello</span>
                                </span>
                            	<div class="avatar">
                                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                    	<img src="<?php echo $this->base; ?>/assets/images/pp.jpg" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    	<li><a href="profile.html"><i class="icol-user"></i> My Profile</a></li>
                                    	<li><a href="#"><i class="icol-layout"></i> My Invoices</a></li>                                        
                                        <li class="divider"></li>
                                        <li><a href="index.html"><i class="icol-key"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                            	<a href="index.html"><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">                		
			    	
                    	<?php echo $this->element('sidebar'); ?>

                    	<section id="main" class="clearfix">
                		
                			<!-- Start View Block: Page Title -->
                    		<?php if ($this->fetch('pageTitle')): ?>
							<div id="main-header" class="page-header">

								<ul class="breadcrumb">
							    	<li>
							        	<i class="icon-home"></i>MoonCake
							            <span class="divider">&raquo;</span>
							        </li>
							        <li>
							        	<a href="#"><?php echo $this->fetch('pageTitle'); ?></a>
							        </li>
							    </ul>
							    
							    <h1 id="main-heading">
							    	<?php echo $this->fetch('pageTitle'); ?>
							    	
						    		<?php if ($this->fetch('pageTitle')): ?>
							    	<span><?php echo $this->fetch('pageSubtitle'); ?></span>
							    	<?php endif; ?>

							    </h1>
							</div>
							<?php endif; ?>
							<!-- End View Block: Page Title -->

                            <div id="main-content">
                				<?php 
                					//echo $this->Session->flash();
                					echo $this->TwitterBootstrap->flashes();
                				?>    											
								<?php echo $this->fetch('content'); ?>
							</div>

            			</section>
    				</div>
                </div>
            </div>
        </div>
        
        <footer id="footer">
            <div class="footer-left">MoonCake - Responsive Admin Template</div>
            <div class="footer-right"><p>Copyright 2012. All Rights Reserved.</p></div>

			<!--?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => __('CakePHP: the rapid development php framework'), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?-->

        </footer>        
    </div>


	<?php echo $this->element('sql_dump'); ?>

    <!-- Core Scripts -->
    <script src="<?php echo $this->base; ?>/assets/js/libs/jquery-1.8.2.min.js"></script>
    <script src="<?php echo $this->base; ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->base; ?>/assets/js/libs/jquery.placeholder.min.js"></script>
    <script src="<?php echo $this->base; ?>/assets/js/libs/jquery.mousewheel.min.js"></script>
    
    <!-- Template Script -->
    <script src="<?php echo $this->base; ?>/assets/js/template.js"></script>
    <script src="<?php echo $this->base; ?>/assets/js/setup.js"></script>

    <!-- Customizer, remove if not needed -->
    <script src="<?php echo $this->base; ?>/assets/js/customizer.js"></script>

    <!-- Uniform Script -->
    <script src="<?php echo $this->base; ?>/plugins/uniform/jquery.uniform.min.js"></script>
    
    <!-- jquery-ui Scripts -->
    <script src="<?php echo $this->base; ?>/assets/jui/js/jquery-ui-1.8.24.min.js"></script>
    <script src="<?php echo $this->base; ?>/assets/jui/jquery-ui.custom.min.js"></script>
    <script src="<?php echo $this->base; ?>/assets/jui/timepicker/jquery-ui-timepicker.min.js"></script>
    <script src="<?php echo $this->base; ?>/assets/jui/jquery.ui.touch-punch.min.js"></script>
    
    <!-- Plugin Scripts -->
    
    <!-- Flot -->
    <!--[if lt IE 9]>
    <script src="<?php echo $this->base; ?>/assets/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?php echo $this->base; ?>/plugins/flot/jquery.flot.min.js"></script>
    <script src="<?php echo $this->base; ?>/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo $this->base; ?>/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="<?php echo $this->base; ?>/plugins/flot/plugins/jquery.flot.resize.min.js"></script>

    <!-- Circular Stat -->
    <script src="<?php echo $this->base; ?>/custom-plugins/circular-stat/circular-stat.min.js"></script>

    <!-- SparkLine -->
    <script src="<?php echo $this->base; ?>/plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!-- iButton -->
    <script src="<?php echo $this->base; ?>/plugins/ibutton/jquery.ibutton.js"></script>

    <!-- Full Calendar -->
    <script src="<?php echo $this->base; ?>/plugins/fullcalendar/fullcalendar.min.js"></script>
    
    <!-- DataTables -->
    <script src="<?php echo $this->base; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->base; ?>/plugins/datatables/TableTools/js/TableTools.min.js"></script>
    <script src="<?php echo $this->base; ?>/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo $this->base; ?>/plugins/datatables/jquery.dataTables.columnFilter.js"></script>
    
    <!-- Demo Scripts -->
    <script src="<?php echo $this->base; ?>/assets/js/common.js"></script>

    <?php echo $this->fetch('dataTableSettings'); ?>
	<?php echo $this->fetch('script'); ?>
</body>
</html>
