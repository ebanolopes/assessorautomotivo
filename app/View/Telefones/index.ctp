<h3 class="page-title">Relatório de Telefones</h3>
<ul class="page-breadcrumb breadcrumb">
						
	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<a href="#">Relatório de Telefones</a>
		
	</li>
						
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i><?php echo $this->Html->Link("Adicionar Telefones", array('action' => 'add')); ?>
		</div>
		<div class="tools">
			
		</div>
	</div>
	<div class="portlet-body">
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Telefone</th>
						<th>Empresa</th>
						<th>Ação</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($telefones as $telefone): ?>
					<tr>
						<td><?php echo $telefone['Telefone']['id']; ?></td>
						<td><?php echo $this->Html->link($telefone['Telefone']['fone'], array('controller' => 'telefones', 'action' => 
						'visualizar', $telefone['Telefone']['id'])); ?> </td>
						<td><?php echo $telefone ['Empresa'] ['razao_social']?></td>
								
						<td><?php echo $this->Form->postLink(
								'Delete',
								array('action' => 'delete', $telefone['Telefone']['id']),
								array('confirm' => 'Are you sure?')); ?>

							<?php echo $this->Html->link('Edit', array('action' => 'edit', $telefone['Telefone']['id'])); ?>
						</td>
						
					</tr>
					<?php endforeach ?> 
					<?php unset($post); ?>
				</tbody>

			</table>
		</div>
	</div>
</div>

