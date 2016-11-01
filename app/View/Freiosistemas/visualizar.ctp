<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Sistemas de Freio', array('controller' => 'freiosistema', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Sistemas de Freio
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Sistemas de Freio
		</div>
	</div>

	<div class="portlet-body">
		<h3>Sistemas de Freio: <?php echo $freiosistema['Freiosistema']['sistema']; ?></h3>
		
		
	</div>
	<div class="clearfix">
	</div>

</div>
