

<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Categorias', array('controller' => 'categorias', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Categorias
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Categorias
		</div>
	</div>

	<div class="portlet-body">
		<h3><?php echo $categoria['Categoria']['categoria']; ?></h3>
		       
	</div>
	<div class="clearfix">
	</div>

</div>