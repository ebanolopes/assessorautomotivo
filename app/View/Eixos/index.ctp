<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Eixos</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Eixos</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<i class="fa fa-cogs"></i><?php echo $this->Html->Link("Adicionar Eixo", array('action' => 'add')); ?>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="table-responsive">
	            <table class="table table-striped table-condensed mb-none">
				<thead>
					<tr>
						<th>Eixo</th>
						<th>Ação</th>
						</tr>
				</thead>

				<tbody>

					<?php foreach ($eixos as $eixo): ?>
						<tr>
							
							<td><?php echo $this->Html->link($eixo['Eixo']['eixo'], array('controller' => 'eixos', 'action' => 'visualizar', $eixo
							['Eixo']['id'])); ?> </td>

														
							<td><?php echo $this->Form->postLink(
											'Delete',
											array('action' => 'delete', $eixo['Eixo']['id']),
											array('confirm' => 'Are you sure?')); ?>

										<?php echo $this->Html->link('Edit', array('action' => 'edit', $eixo['Eixo']['id'])); ?>
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