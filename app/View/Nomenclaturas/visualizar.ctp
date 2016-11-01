<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Nomenclaturas', array('controller' => 'nomenclatura', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Nomenclaturas
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Nomenclaturas
		</div>
	</div>

	<div class="portlet-body">
		<h3><strong>Nomenclatura:</strong> <?php echo $nomenclatura['Nomenclatura']['codigo']; ?></h3>
		
				
	</div>
	<div class="clearfix">
	</div>

</div>

