<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Tipos de Freio');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
		<thead>
			<tr>
				<th>Tipos de Freio</th>
				<th>Ação</th>
				</tr>
		</thead>

		<tbody>

			<?php foreach ($freiotipos as $freiotipo): ?>
				<tr>
					<td><?php echo $this->Html->link($freiotipo['Freiotipo']['tipo'], array('controller' => 'freiotipos', 'action' => 'visualizar', $freiotipo
					['Freiotipo']['id'])); ?> </td>

												
					<td><?php echo $this->Form->postLink(
									'Delete',
									array('action' => 'delete', $freiotipo['Freiotipo']['id']),
									array('confirm' => 'Are you sure?')); ?>

								<?php echo $this->Html->link('Edit', array('action' => 'edit', $freiotipo['Freiotipo']['id'])); ?>
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