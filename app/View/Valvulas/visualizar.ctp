<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Quantidade de Válvulas', array('controller' => 'valvulas', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Quantidade de Válvulas
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Quantidade de Válvulas
		</div>
	</div>

	<div class="portlet-body">
		<h3>Quantidade de Válvulas: <?php echo $valvula['Valvula']['quantidade']; ?></h3>
		
		
	</div>
	<div class="clearfix">
	</div>

</div>



