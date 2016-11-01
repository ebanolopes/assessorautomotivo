<?php
$this->extend('/Commons/commons');
$this->assign('title', 'SubGrupos');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
	<thead>
		<tr>
			<th>Sub Grupo</th>
			<th>Ação</th>
			</tr>
	</thead>

	<tbody>

		<?php foreach ($grupos as $grupo): ?>
			<tr>
				<td><?php echo $this->Html->link($grupo['Grupo']['grupo'], array('controller' => 'grupos', 'action' => 'visualizar', 
				$grupo['Grupo']['id'])); ?> </td>						
				<td><?php echo $this->Form->postLink(
								'Delete',
								array('action' => 'delete', $grupo['Grupo']['id']),
								array('confirm' => 'Deseja realmente excluir esse ítem ?')); ?>

							<?php echo $this->Html->link('Edit', array('action' => 'edit', $grupo['Grupo']['id'])); ?>
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