<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Eixos', array('controller' => 'eixos', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Eixos
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Eixos
		</div>
	</div>

	<div class="portlet-body">
		<h3>Eixo: <?php echo $eixo['Eixo']['eixo']; ?></h3>
		
		
	</div>
	<div class="clearfix">
	</div>

</div>
