<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Combustível');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
        <thead>
			<tr>
				<th>Combustível</th>
				<th>Ação</th>
			</tr>
        </thead>
        <tbody>
		<?php foreach ($combustivels as $combustivel): ?>
			<tr>
				
				<td><?php echo $this->Html->link($combustivel['Combustivel']['tipo'], array('controller' => 'combustivels', 'action' => 'visualizar', $combustivel
				['Combustivel']['id'])); ?> </td>

											
				<td><?php echo $this->Form->postLink(
								'Delete',
								array('action' => 'delete', $combustivel['Combustivel']['id']),
								array('confirm' => 'Are you sure?')); ?>

							<?php echo $this->Html->link('Edit', array('action' => 'edit', $combustivel['Combustivel']['id'])); ?>
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