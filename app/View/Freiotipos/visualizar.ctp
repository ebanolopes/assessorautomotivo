<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Tipos de Freio', array('controller' => 'define('direcoes', '');
		', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Tipos de Freio
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Tipos de Freio
		</div>
	</div>

	<div class="portlet-body">
		<h3>Tipos de Freio : <?php echo $freiotipo['Freiotipo']['tipo']; ?></h3>
		
		
	</div>
	<div class="clearfix">
	</div>

</div>
