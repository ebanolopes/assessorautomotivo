<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Montadora');
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

			<?php foreach ($montadoras as $montadora): ?>
				<tr>
					
					<td><?php echo $this->Html->link($montadora['Montadora']['montadora'], array('controller' => 'montadoras', 'action' => 'visualizar', $montadora['Montadora']['id'])); ?> </td>

												
					<td><?php echo $this->Form->postLink(
									'Delete',
									array('action' => 'delete', $montadora['Montadora']['id']),
									array('confirm' => 'Are you sure?')); ?>

								<?php echo $this->Html->link('Edit', array('action' => 'edit', $montadora['Montadora']['id'])); ?>
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
