<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Montadoras', array('controller' => 'montadoras', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Montadoras
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Montadoras
		</div>
	</div>

	<div class="portlet-body">
		<h3><strong>Montadora:</strong> <?php echo $montadora['Montadora']['montadora']; ?></h3>
		<p><strong>Status:</strong> <?php echo $montadora['Montadora']['status']; ?></p>
				
	</div>
	<div class="clearfix">
	</div>

</div>




