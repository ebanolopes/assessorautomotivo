<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Grupos', array('controller' => 'grupos', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Grupo e Sub Grupos
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Grupo e seus respectivos Sub Grupos
		</div>
	</div>

	<div class="portlet-body">
		<h3>Grupo: <?php echo h($grupo['Grupo']['grupo']) ?></h3>
		<?php
		if ($grupo['Pai']['id'] != null){
			?> É Subgrupo de: <?php echo $grupo['Pai']['grupo']; ?><?php	
		} ?>

		<?php
		if (sizeof($grupo['Subgrupos']) >0){
			echo 'Sub grupos: <br /><br />';
			foreach ($grupo['Subgrupos'] as $c) {
				?> <p><?php echo $c['grupo']; ?></p><?php	
			}
		}
		?>
	</div>
	<div class="clearfix">
	</div>

</div>

