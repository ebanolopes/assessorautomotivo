<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Sistema de freios');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
		<thead>
			<tr>
				<th>Sistemas de Freio</th>
				<th>Ação</th>
				</tr>
		</thead>

		<tbody>

			<?php foreach ($freiosistemas as $freiosistema): ?>
				<tr>
					
					<td><?php echo $this->Html->link($freiosistema['Freiosistema']['sistema'], array('controller' => 'freiosistema', 'action' => 'visualizar', $freiosistema
					['Freiosistema']['id'])); ?> </td>

												
					<td><?php echo $this->Form->postLink(
									'Delete',
									array('action' => 'delete', $freiosistema['Freiosistema']['id']),
									array('confirm' => 'Are you sure?')); ?>

								<?php echo $this->Html->link('Edit', array('action' => 'edit', $freiosistema['Freiosistema']['id'])); ?>
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