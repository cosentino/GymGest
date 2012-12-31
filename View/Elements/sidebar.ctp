<aside id="sidebar">
	<nav id="navigation" class="collapse">
    	<ul>

    		<!-- ACCESS CONTROL & CHECK-IN -->
        	<li class="active">
            	<span title="General">
            		<i class="icon-home"></i>
					<span class="nav-title">General</span>
                </span>
            	<ul class="inner-nav">
					
					<li class="active"><?php echo $this->Html->link(
						'<i class="icol-traffic"></i> ' . __('List Presences'), 
						array('controller' => 'presences', 'action' => 'index'), array('escape' => false)); ?> </li>

					<li><?php echo $this->Html->link(
						'<i class="icol-ticket"></i> ' . __('New Presence'), 
						array('controller' => 'presences', 'action' => 'add'), array('escape' => false)); ?> 
						</li>

					<li><?php echo $this->Html->link(
						'<i class="icol-traffic"></i> ' . __('List Subscriptions'), 
						array('controller' => 'subscriptions', 'action' => 'index'), array('escape' => false)); ?> </li>

					<li><?php echo $this->Html->link(
						'<i class="icol-traffic"></i> ' . __('New Subscriptions'), 
						array('controller' => 'subscriptions', 'action' => 'add'), array('escape' => false)); ?> </li>

					<li><?php echo $this->Html->link(
						'<i class="icol-traffic"></i> ' . __('List Subscription Types'), 
						array('controller' => 'subscription_types', 'action' => 'index'), array('escape' => false)); ?> </li>

					<li><?php echo $this->Html->link(
						'<i class="icol-traffic"></i> ' . __('New Subscription Type'), 
						array('controller' => 'subscription_types', 'add' => 'index'), array('escape' => false)); ?> </li>

					<li><?php echo $this->Html->link(
						'<i class="icol-traffic"></i> ' . __('List Subscription Price'), 
						array('controller' => 'subscription_prices', 'add' => 'index'), array('escape' => false)); ?> </li>

					<li><?php echo $this->Html->link(
						'<i class="icol-traffic"></i> ' . __('New Subscription Price'), 
						array('controller' => 'subscription_prices', 'add' => 'add'), array('escape' => false)); ?> </li>
		                                        
                </ul>
            </li>

            <!-- PEOPLE & MEMBERSHIPS -->
        	<li>
            	<span title="<?php echo __('People') ?>">
            		<i class="icon-users"></i>
					<span class="nav-title"><?php echo __('People') ?></span>
                </span>
            	<ul class="inner-nav">

					<li><?php echo $this->Html->link(
						'<i class="icol-application-view-list"></i> ' . __('List People'), 
						array('controller' => 'people', 'action' => 'index'), array('escape' => false)); ?> </li>

					<li><?php echo $this->Html->link(
						'<i class="icol-application-add"></i> ' . __('New Person'), 
						array('controller' => 'people', 'action' => 'add'), array('escape' => false)); ?></li>
                	
					<li><?php echo $this->Html->link(
						'<i class="icol-vcard"></i> ' . __('List Memberships'), 
						array('controller' => 'memberships', 'action' => 'index'), array('escape' => false)); ?></li>

					<li><?php echo $this->Html->link(
						'<i class="icol-vcard"></i> ' . __('New Memberships'), 
						array('controller' => 'memberships', 'action' => 'add'), array('escape' => false)); ?></li>

					<li><?php echo $this->Html->link(
						'<i class="icol-zones"></i> ' . __('List Membership Types'), 
						array('controller' => 'membership_types', 'action' => 'index'), array('escape' => false)); ?></li>								

					<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('New Membership Types'), 
						array('controller' => 'membership_types', 'action' => 'add'), array('escape' => false)); ?></li>											

				</ul>

            </li>

            <!-- COURSES -->
			<li>
				<span title="Courses">										
					<!--<i class="icon-book"></i>
					<i class="icon-briefcase"></i>
                	<i class="icon-bell"></i>-->
                	<i class="icon-bookmark"></i>
					<span class="nav-title">Courses</span>
                </span>
            	<ul class="inner-nav">

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('List Courses'), 
						array('controller' => 'courses', 'action' => 'index'), array('escape' => false)); ?></li>

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('New Course'), 
						array('controller' => 'courses', 'action' => 'add'), array('escape' => false)); ?></li>

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('List Course Registrations'), 
						array('controller' => 'course_registrations', 'action' => 'index'), array('escape' => false)); ?></li>

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('New Course Registration'), 
						array('controller' => 'course_registrations', 'action' => 'add'), array('escape' => false)); ?></li>

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('List Course Types'), 
						array('controller' => 'course_types', 'action' => 'index'), array('escape' => false)); ?></li>

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('New Course Type'), 
						array('controller' => 'course_types', 'action' => 'add'), array('escape' => false)); ?></li>

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('List Course Prices'), 
						array('controller' => 'course_prices', 'action' => 'index'), array('escape' => false)); ?></li>

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('New Course Price'), 
						array('controller' => 'course_prices', 'action' => 'add'), array('escape' => false)); ?></li>

				</ul>									
			</li>

            <!-- SETTINGS -->
           	<li>
       			<span title="Settings">
                	<i class="icon-cogs"></i>
					<span class="nav-title">Settings</span>
                </span>
            	<ul class="inner-nav">
           			
            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('List Users'), 
						array('controller' => 'course_prices', 'action' => 'index'), array('escape' => false)); ?></li>

            		<li><?php echo $this->Html->link(
						'<i class="icol-zone"></i> ' . __('New User'), 
						array('controller' => 'course_prices', 'action' => 'add'), array('escape' => false)); ?></li>
			
				</ul>
           	</li>

        </ul>
    </nav>
</aside>

<div id="sidebar-separator"></div>