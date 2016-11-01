
<div class="container outsidemain">
	<div class="row">
		<div class="col-md-12"><h2><strong>Modelos de motor</strong> cadastrados</h2><?php echo $this->Html->Link("Adicionar Modelo", array('action' => 'add'),array('class' => 'btn btn-primary mr-xs mb-sm'));?></div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="table-responsive">
	            <table class="table table-striped table-condensed mb-none">
	                <thead>
	                    <tr>
							<th>Modelo</th>
							<th>Ação</th>
	                    </tr>
	                </thead>
	                <tbody>
					<?php foreach ($modelomotors as $modelo): ?>
						<tr>
							<td><?php echo $modelo['Modelomotor']['modelo']; ?></td>
							<td><?php echo $this->Form->postLink(
											'Delete',
											array('action' => 'delete', $modelo['Modelomotor']['id']),
											array('confirm' => 'Tem certeza?')); ?>

										<?php echo $this->Html->link('Edit', array('action' => 'edit', $modelo['Modelomotor']['id'])); ?>
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


