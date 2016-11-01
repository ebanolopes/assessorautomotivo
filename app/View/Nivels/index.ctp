<h1>Nivel</h1>
<p><?php echo $this->Html->Link("Add nivel", array('action' => 'add')); ?></p>
<table>
	<tr>
		<th>Id</th>
		<th>Nivel</th>
		<th>Ação</th>
	</tr>


	<?php foreach ($nivels as $nivel): ?>
	<tr>
		<td><?php echo $nivel['Nivel']['id']; ?></td>
		<td><?php echo $this->Html->link($nivel['Nivel']['nivel'], array('controller' => 'nivels', 'action' => 
		'visualizar', $nivel['Nivel']['id'])); ?> </td>

			
		<td><?php echo $this->Form->postLink(
				'Delete',
				array('action' => 'delete', $nivel['Nivel']['id']),
				array('confirm' => 'Are you sure?')); ?>

			<?php echo $this->Html->link('Edit', array('action' => 'edit', $nivel['Nivel']['id'])); ?>
		</td>
		
	</tr>
	<?php endforeach ?> 
	<?php unset($post); ?>

</table>