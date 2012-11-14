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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework'), 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			
			<div class="main-menu actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>
					<li>
						<h4><?php echo __('People') ?></h4>
						<ul>
							<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?></li>
						</ul>
					</li>
					<li>
						<h4><?php echo __('Courses') ?></h4>
						<ul>
							<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?></li>
							<li><?php echo $this->Html->link(__('List Course Registrations'), array('controller' => 'course_registrations', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Course Registration'), array('controller' => 'course_registrations', 'action' => 'add')); ?> </li>
							<li><?php echo $this->Html->link(__('List Course Types'), array('controller' => 'course_types', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Course Type'), array('controller' => 'course_types', 'action' => 'add')); ?> </li>
							<li><?php echo $this->Html->link(__('List Course Prices'), array('controller' => 'course_prices', 'action' => 'index')); ?></li>	
							<li><?php echo $this->Html->link(__('New Course Price'), array('controller' => 'course_prices', 'action' => 'add')); ?></li>
						</ul>
					</li>
					<li>
						<h4><?php echo __('Memberships') ?></h4>
						<ul>		
							<li><?php echo $this->Html->link(__('List Memberships'), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Membership'), array('controller' => 'memberships', 'action' => 'add')); ?> </li>		
							<li><?php echo $this->Html->link(__('List Membership Types'), array('controller' => 'membership_types', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Membership Type'), array('controller' => 'membership_types', 'action' => 'add')); ?> </li>							
						</ul>
					</li>
					<li>
						<h4><?php echo __('Presences') ?></h4>
						<ul>
							<li><?php echo $this->Html->link(__('List Presences'), array('controller' => 'presences', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Presence'), array('controller' => 'presences', 'action' => 'add')); ?> </li>
						</ul>
					</li>
					<li>
						<h4><?php echo __('Subscriptions') ?></h4>
						<ul>
							<li><?php echo $this->Html->link(__('List Subscriptions'), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Subscription'), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
							<li><?php echo $this->Html->link(__('List Subscription Types'), array('controller' => 'subscription_types', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Subscription Type'), array('controller' => 'subscription_types', 'action' => 'add')); ?> </li>
							<li><?php echo $this->Html->link(__('List Subscription Prices'), array('controller' => 'subscription_prices', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Subscription Price'), array('controller' => 'subscription_prices', 'action' => 'add')); ?> </li>						
						</ul>
					</li>
					<li>
						<h4><?php echo __('Users'); ?></h4>
						<ul>
							<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
						</ul>
					</li>				
				</ul>
			</div>

			<?php echo $this->fetch('content'); ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => __('CakePHP: the rapid development php framework'), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
