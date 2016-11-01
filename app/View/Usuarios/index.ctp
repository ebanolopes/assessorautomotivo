<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Usuários');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
    	<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Usuario</th>
				<th>E-mail</th>
				<th>Status</th>
				<th>Empresas</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($usuarios as $usuario): ?>
			<tr>
				<td><?php echo $usuario['Usuario']['id']; ?></td>
				<td><?php echo $this->Html->link($usuario['Usuario']['nome'], array('controller' => 'usuarios', 'action' => 
				'visualizar', $usuario['Usuario']['id'])); ?> </td>
				<td><?php echo $usuario['Usuario']['usuario']; ?></td>
				<td><?php echo $usuario['Usuario']['email']; ?></td>
				<td><?php echo $usuario['Usuario']['status']; ?></td>
				<td><?php echo $usuario ['Empresa'] ['razao_social']?></td>
						
				<td><?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $usuario['Usuario']['id']),
						array('confirm' => 'Are you sure?')); ?>

					<?php echo $this->Html->link('Edit', array('action' => 'edit', $usuario['Usuario']['id'])); ?>
				</td>
				
			</tr>						
			<?php endforeach ?> 
		</tbody>
		<?php unset($post); ?>
    </table>
</div>
<?php
$this->end();
?>