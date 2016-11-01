<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Tipos de Direção', array('controller' => 'direcoes', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Tipos de Direção
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Tipos de Direção
		</div>
	</div>

	<div class="portlet-body">
		<h3>Tipos de Direção: <?php echo $direcao['Direcao']['tipo']; ?></h3>
		
		
	</div>
	<div class="clearfix">
	</div>

</div>
