<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Válvula');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
		<thead>
			<tr>
				<th>Quantidade de Valvulas</th>
				<th>Ação</th>
				</tr>
		</thead>

		<tbody>

			<?php foreach ($valvulas as $valvula): ?>
				<tr>
					
					<td><?php echo $this->Html->link($valvula['Valvula']['quantidade'], array('controller' => 'valvulas', 'action' => 'visualizar', $valvula
					['Valvula']['id'])); ?> </td>

												
					<td><?php echo $this->Form->postLink(
									'Delete',
									array('action' => 'delete', $valvula['Valvula']['id']),
									array('confirm' => 'Are you sure?')); ?>

								<?php echo $this->Html->link('Edit', array('action' => 'edit', $valvula['Valvula']['id'])); ?>
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