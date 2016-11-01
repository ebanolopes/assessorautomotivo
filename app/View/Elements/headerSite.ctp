<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
		<img src="/Assessor/assets/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="/Assessor/assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			
			<!-- BEGIN INBOX DROPDOWN -->
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<?php if (AuthComponent::user()): ?>
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">					
					<span class="username">
						<?php echo AuthComponent::user()['nome']; ?>
					</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<?php echo $this->Html->link('Meu Perfil', array('controller' => 'usuarios', 'action' => 'dashboard')); ?>
						</li>
						<li class="divider">
						</li>
						<li>
							<?php echo $this->Html->link('Sair', array('controller' => 'usuarios', 'action' => 'logout')); ?>
						</li>
					</ul>
				</li>
			<?php endif; ?>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
