<div class="container outsidemain">
	<div class="row">
		<div class="col-md-12"><h2><strong>Gerações</strong> cadastradas</h2><?php echo $this->Html->Link("Adicionar Geração", array('action' => 'add'),array('class' => 'btn btn-primary mr-xs mb-sm'));?></div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="table-responsive">
	            <table class="table table-striped table-condensed mb-none">
	                <thead>
						<tr>
							<th>Geração</th>
							<th>Ação</th>
						</tr>
	                </thead>
	                <tbody>
					<?php foreach ($geracoes as $g): ?>
						<tr>
							<td><?php echo $g['Geracao']['geracao']; ?></td>
							<td><?php echo $this->Form->postLink(
											'Delete',
											array('action' => 'delete', $g['Geracao']['id']),
											array('confirm' => 'Tem certeza que deseja deletar??')); ?>

										<?php echo $this->Html->link('Editar', array('action' => 'edit', $g['Geracao']['id'])); ?></td>
						</tr>
					<?php endforeach ?> 
					<?php unset($post); ?>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>