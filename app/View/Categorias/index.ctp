<h3 class="page-title">Relatório de Categorias</h3>

<ul class="page-breadcrumb breadcrumb">
	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="#">Relatório de Categorias</a>
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i><?php echo $this->Html->Link("Adicionar Categoria", array('action' => 'add')); ?>
		</div>
		<div class="tools">
			
		</div>
	</div>
	<div class="portlet-body">
		<div class="table-responsive">

			<table class="table table-hover">
				<thead>
					<tr>
						
						<th>Categoria</th>
						<!--<th>É Subgrupo?</th>-->
						<th>Ação</th>
					</tr>
				</thead>

				<tbody>

					<?php foreach ($Categorias as $categoria): ?>
						<tr>
							
							<td><?php echo $this->Html->link($categoria['Categoria']['categoria'], array('controller' => 'categorias', 'action' => 'visualizar', $categoria
							['Categoria']['id'])); ?> </td>

														
							<td><?php echo $this->Form->postLink(
											'Delete',
											array('action' => 'delete', $categoria['Categoria']['id']),
											array('confirm' => 'Are you sure?')); ?>

										<?php echo $this->Html->link('Edit', array('action' => 'edit', $categoria['Categoria']['id'])); ?>
									</td>

							
							
						</tr>
					<?php endforeach ?> 
					<?php unset($post); ?>
				</tbody>

			</table>
		</div>
	</div>
</div> 



