<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Tipo de ventilação</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Tipo de ventilação</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<i class="fa fa-cogs"></i> <?php echo $this->Html->Link("Adicionar Tipo de ventilação", array('action' => 'add'));?>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="table-responsive">
	            <table class="table table-striped table-condensed mb-none">
				<thead>
					<tr>
						<th>Tipos de Ventilação</th>
						<th>Ação</th>
						</tr>
				</thead>

				<tbody>

					<?php foreach ($ventilacoes as $ventilacao): ?>
						<tr>
							
							<td><?php echo $this->Html->link($ventilacao['Ventilacao']['tipo'], array('controller' => 'ventilacoes', 'action' => 'visualizar', $ventilacao
							['Ventilacao']['id'])); ?> </td>

														
							<td><?php echo $this->Form->postLink(
											'Delete',
											array('action' => 'delete', $ventilacao['Ventilacao']['id']),
											array('confirm' => 'Are you sure?')); ?>

										<?php echo $this->Html->link('Edit', array('action' => 'edit', $ventilacao['Ventilacao']['id'])); ?>
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