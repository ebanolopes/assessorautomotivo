<div class="container outsidemain">
	<div class="row">
		<div class="col-md-12"><h2><strong>Cilindros</strong> cadastrados</h2><?php echo $this->Html->Link("Adicionar Cilindro", array('action' => 'add'),array('class' => 'btn btn-primary mr-xs mb-sm'));?></div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="table-responsive">
	            <table class="table table-striped table-condensed mb-none">
					<thead>
						<tr>
							<th>Cilindro</th>
							<th>Ação</th>
							</tr>
					</thead>

					<tbody>

						<?php foreach ($cilindros as $cilindros): ?>
							<tr>
								
								<td><?php echo $cilindros['Cilindro']['quantidade']; ?> </td>

															
								<td><?php echo $this->Form->postLink(
												'Delete',
												array('action' => 'delete', $cilindros['Cilindro']['id']),
												array('confirm' => 'Tem certeza?')); ?>

											<?php echo $this->Html->link('Edit', array('action' => 'edit', $cilindros['Cilindro']['id'])); ?>
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