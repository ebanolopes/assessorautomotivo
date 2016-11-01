<div class="container outsidemain">
	<div class="row">
		<div class="col-md-12"><h2><strong>Tipos de direção</strong> cadastrados</h2><?php echo $this->Html->Link("Adicionar Tipo de diração", array('action' => 'add'),array('class' => 'btn btn-primary mr-xs mb-sm'));?></div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="table-responsive">
	            <table class="table table-striped table-condensed mb-none">
					<thead>
						<tr>
							<th>Tipo de Direção</th>
							<th>Ação</th>
							</tr>
					</thead>

					<tbody>

						<?php foreach ($direcoes as $direcao): ?>
							<tr>
								
								<td><?php echo $this->Html->link($direcao['Direcao']['tipo'], array('controller' => 'direcoes', 'action' => 'visualizar', $direcao
								['Direcao']['id'])); ?> </td>

															
								<td><?php echo $this->Form->postLink(
												'Delete',
												array('action' => 'delete', $direcao['Direcao']['id']),
												array('confirm' => 'Are you sure?')); ?>

											<?php echo $this->Html->link('Edit', array('action' => 'edit', $direcao['Direcao']['id'])); ?>
										</td>
							</tr>
						<?php endforeach ?> 
						<?php unset($post); ?>
					</tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>