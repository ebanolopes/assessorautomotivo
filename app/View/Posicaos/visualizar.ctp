<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Posições', array('controller' => 'posicaos', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Posições
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Posições
		</div>
	</div>

	<div class="portlet-body">
		<h3>Posições: <?php echo $posicao['Posicao']['posicao']; ?></h3>
		
		
	</div>
	<div class="clearfix">
	</div>

</div>
