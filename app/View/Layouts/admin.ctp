<?php $cakeDescription = __d('cake_dev', 'Assessor Automotivo');?>
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
<?php echo $this->Html->charset(); ?>
<title><?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
</title>
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

<!-- BEGIN THEME STYLES -->
<?php echo $this->Html->css('/assets/css/style-metronic'); ?>
<?php echo $this->Html->css('/assets/css/style'); ?>
<?php echo $this->Html->css('/assets/css/style-responsive'); ?>
<?php echo $this->Html->css('/assets/css/plugins'); ?>
<?php echo $this->Html->css('/assets/css/pages/tasks'); ?>
<?php echo $this->Html->css('/assets/css/themes/default'); ?>
<?php echo $this->Html->css('/assets/css/custom'); ?>
<?php echo $this->Html->css('/assets/plugins/jquery-multi-select/css/multi-select'); ?>

<?php echo $this->fetch('meta');
	  echo $this->fetch('css');
	  echo $this->fetch('script');
?>

<!-- END THEME STYLES -->
<?php echo $this->Html->meta('icon'); ?>

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->

<?php echo $this->Html->script('/assets/plugins/jquery-1.10.2.min'); ?> 
<?php echo $this->Html->script('/assets/plugins/jquery-migrate-1.2.1.min'); ?>

<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<?php echo $this->Html->script('/assets/plugins/bootstrap/js/bootstrap.min'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery-slimscroll/jquery.slimscroll.min'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery.blockui.min'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery.cokie.min'); ?>
<?php echo $this->Html->script('/assets/plugins/uniform/jquery.uniform.min'); ?>
<?php echo $this->Html->script('/assets/scripts/app'); ?>
<?php echo $this->Html->script('/assets/scripts/index'); ?>
<?php echo $this->Html->script('/assets/scripts/tasks'); ?>
<?php echo $this->Html->script('/assets/scripts/form-components'); ?>
<?php echo $this->Html->script('/assets/plugins/fuelux/js/spinner.min'); ?>
<?php echo $this->Html->script('/assets/plugins/ckeditor/ckeditor'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload'); ?>
<?php echo $this->Html->script('/assets/plugins/select2/select2.min'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker'); ?>
<?php echo $this->Html->script('/assets/plugins/clockface/js/clockface'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery.input-ip-address-control-1.0.min'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery-multi-select/js/jquery.multi-select'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery-multi-select/js/jquery.quicksearch'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min'); ?>
<?php echo $this->Html->script('/assets/plugins/jquery-tags-input/jquery.tagsinput.min'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-markdown/js/bootstrap-markdown'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-markdown/lib/markdown'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min'); ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-touchspin/bootstrap.touchspin'); ?>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<?php echo $this->element('headerSite'); ?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<?php echo $this->element('menuSite'); ?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">			
			<?php echo $this->Session->flash('sucesso',array('element' => 'success')); ?>
			<?php echo $this->Session->flash('erro',array('element' => 'failure')); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2013 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>


<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   /*Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initDashboardDaterange();
   Index.initIntro();
   Tasks.initDashboardWidget();*/
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>