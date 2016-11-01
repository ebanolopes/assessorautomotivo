<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Grupos');
$this->assign('add_action','add_grupo');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
		<thead>
			<tr>
				<th>Grupo</th>
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
									array('action' => 'deletegrupos', $grupo['Grupo']['id']),
									array('confirm' => 'Are you sure?')); ?>

								<?php echo $this->Html->link('Edit', array('action' => 'edit_grupo', $grupo['Grupo']['id'])); ?>
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