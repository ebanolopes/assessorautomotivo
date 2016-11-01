<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Veículos');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
		<thead>
			<tr>
				<th>Montadora</th>
				<th>Veículo</th>
				<th>Ação</th>
				</tr>
		</thead>

		<tbody>

			<?php foreach ($veiculos as $veiculo): ?>
				<tr>
					<td><?php echo $veiculo['Montadora']['montadora']; ?></td>
					<td><?php echo $this->Html->link($veiculo['Veiculo']['descricao'], array('controller' => 'veiculos', 'action' => 'visualizar', $veiculo
					['Veiculo']['id'])); ?> </td>

												
					<td><?php echo $this->Form->postLink(
									'Delete',
									array('action' => 'delete', $veiculo['Veiculo']['id']),
									array('confirm' => 'Are you sure?')); ?>

								<?php echo $this->Html->link('Edit', array('action' => 'edit', $veiculo['Veiculo']['id'])); ?>
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