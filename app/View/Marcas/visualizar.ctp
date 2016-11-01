<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Marcas', array('controller' => 'marcas', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Marcas
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Marcas
		</div>
	</div>

	<div class="portlet-body">
		<h3><strong>Marca:</strong> <?php echo $marca['Marca']['marca']; ?></h3>
		<p><strong>Razão Social:</strong> <?php echo $marca['Empresa']['razao_social']; ?></p>
		<p><strong>Nome Fantasia:</strong> <?php echo $marca['Empresa']['nome_fantasia']; ?></p>
		
		
	</div>
	<div class="clearfix">
	</div>

</div>


