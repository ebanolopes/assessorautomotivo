<!--//busca no model-->

<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Potências de Motor', array('controller' => 'potenciamotors', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando de Tipos de Motores
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Tipos de Motores
		</div>
	</div>

	<div class="portlet-body">
		<h3>Tipos de Motores: <?php echo $potencia['Potenciamotor']['potencia']; ?></h3>
		
		
	</div>
	<div class="clearfix">
	</div>

</div>
