<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Lados');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
        <thead>
			<tr>
				<th>Lado</th>
				<th>Ação</th>
			</tr>
        </thead>
        <tbody>
		<?php foreach ($lados as $lado): ?>
			<tr>
				
				<td><?php echo $lado['Lado']['lado']; ?> </td>
											
				<td><?php echo $this->Form->postLink(
								'Deletar',
								array('action' => 'delete', $lado['Lado']['id']),
								array('confirm' => 'Tem certeza?')); ?>

							<?php echo $this->Html->link('Editar', array('action' => 'edit', $lado['Lado']['id'])); ?>
						</td>

				
				
			</tr>
		<?php endforeach ?> 
        </tbody>
    </table>
</div>
<?php
$this->end();
?>