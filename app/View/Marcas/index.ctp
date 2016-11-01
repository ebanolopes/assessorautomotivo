<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Marcas');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
		<thead>
			<tr>
				<th>Marca</th>
				<th>Empresa</th>
				<th>Ação</th>
				</tr>
		</thead>

		<tbody>

			<?php foreach ($marcas as $marca): ?>
				<tr>
					
					<td><?php echo $this->Html->link($marca['Marca']['marca'], array('controller' => 'marcas', 'action' => 'visualizar', 
					$marca['Marca']['id'])); ?> </td>

					<td><?php echo $marca['Empresa']['razao_social']; ?></td>


					<td><?php echo $this->Form->postLink(
									'Delete',
									array('action' => 'delete', $marca['Marca']['id']),
									array('confirm' => 'Are you sure?')); ?>

								<?php echo $this->Html->link('Edit', array('action' => 'edit', $marca['Marca']['id'])); ?>
							</td>

					
					
				</tr>
			<?php endforeach ?> 
			<?php unset($post); ?>
		</tbody>
	</table>
</div>
<?php
$this->end();
?>