<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Nomenclaturas');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Ação</th>
				</tr>
		</thead>

		<tbody>

			<?php foreach ($nomenclaturas as $nomenclatura): ?>
				<tr>
					
					<td><?php echo $this->Html->link($nomenclatura['Nomenclatura']['codigo'], array('controller' => 'nomenclaturas', 'action' => 'visualizar', $nomenclatura['Nomenclatura']['id'])); ?> </td>

												
					<td><?php echo $this->Form->postLink(
									'Delete',
									array('action' => 'delete', $nomenclatura['Nomenclatura']['id']),
									array('confirm' => 'Are you sure?')); ?>

								<?php echo $this->Html->link('Edit', array('action' => 'edit', $nomenclatura['Nomenclatura']['id'])); ?>
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
