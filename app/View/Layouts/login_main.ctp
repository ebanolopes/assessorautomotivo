<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.3
Version: 1.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<?php echo $this->Html->css('/assets/plugins/font-awesome/css/font-awesome.min'); ?>
<?php echo $this->Html->css('/assets/plugins/bootstrap/css/bootstrap.min'); ?>
<?php echo $this->Html->css('/assets/plugins/uniform/css/uniform.default'); ?>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<?php echo $this->Html->css('/assets/plugins/select2/select2_metro'); ?>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<?php echo $this->Html->css('/assets/css/style-metronic'); ?>
<?php echo $this->Html->css('/assets/css/style'); ?>
<?php echo $this->Html->css('/assets/css/style-responsive'); ?>
<?php echo $this->Html->css('/assets/css/plugins'); ?>
<?php echo $this->Html->css('/assets/css/themes/default'); ?>
<?php echo $this->Html->css('/assets/css/pages/login'); ?>
<?php echo $this->Html->css('/assets/css/custom'); ?>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<img src="assets/img/logo-big.png" alt=""/>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<?php echo $this->fetch('content'); ?>	
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2013 &copy; Metronic. Admin Dashboard Template.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<?php echo $this->Html->script('/assets/plugins/respond.min'); ?> 
	<?php echo $this->Html->script('/assets/plugins/excanvas.min'); ?> 
<![endif]-->
<?php echo $this->Html->script('/assets/plugins/jquery-1.10.2.min'); ?> 
<?php echo $this->Html->script('/assets/plugins/jquery-migrate-1.2.1.min'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap/js/bootstrap.min'); ?> 
<?php echo $this->Html->script('/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min'); ?> 
<?php echo $this->Html->script('/assets/plugins/jquery-slimscroll/jquery.slimscroll.min'); ?> 
<?php echo $this->Html->script('/assets/plugins/jquery.blockui.min'); ?> 
<?php echo $this->Html->script('/assets/plugins/jquery.cokie'); ?> 
<?php echo $this->Html->script('/assets/plugins/uniform/jquery.uniform.min'); ?> 
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min'); ?> 
<?php echo $this->Html->script('/assets/plugins/select2/select2.min'); ?> 
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php echo $this->Html->script('/assets/scripts/app'); ?> 
<?php echo $this->Html->script('/assets/scripts/login'); ?> 
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>