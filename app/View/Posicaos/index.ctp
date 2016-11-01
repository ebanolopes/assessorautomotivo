<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Posições');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
        <thead>
			<tr>
				<th>Posição</th>
				<th>Ação</th>
			</tr>
        </thead>
        <tbody>
		<?php foreach ($posicaos as $posicao): ?>
			<tr>
				
				<td><?php echo $this->Html->link($posicao['Posicao']['posicao'], array('controller' => 'posicaos', 'action' => 'visualizar', $posicao
				['Posicao']['id'])); ?> </td>

											
				<td><?php echo $this->Form->postLink(
								'Delete',
								array('action' => 'delete', $posicao['Posicao']['id']),
								array('confirm' => 'Are you sure?')); ?>

							<?php echo $this->Html->link('Edit', array('action' => 'edit', $posicao['Posicao']['id'])); ?>
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
