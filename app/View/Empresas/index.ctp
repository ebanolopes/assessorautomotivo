<div class="container outsidemain">
	<div class="row">
		<div class="col-md-12"><h2><strong>Empresas</strong> cadastradas</h2><?php echo $this->Html->Link("Adicionar Empresa", array('action' => 'add'),array('class' => 'btn btn-primary mr-xs mb-sm'));?></div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="table-responsive">
	            <table class="table table-striped table-condensed mb-none">
					<thead>
						<tr>
							
							<th>Cnpj</th>
							
							<th>Razão Social</th>
							<th>Nome Fantasia</th>
							<th>Endereço</th>
							<th>Numero</th>
							
							<th>Bairro</th>
							<th>Cep</th>
							<th>Cidade</th>
							<th>Estado</th>
							<th>E-mail</th>
							
							<th>Contato</th>
							<th>Logomarca</th>
							<th>Status</th>
						
							<th>Ação</th>
						</tr>
					</thead>

					<tbody>

						<?php foreach ($empresas as $empresa): ?>
							<tr>
								
								<td><?php echo $this->Html->link($empresa['Empresa']['cnpj'], array('controller' => 'empresas', 'action' => 'visualizar', 
								$empresa['Empresa']['id'])); ?> </td>

								<td><?php echo $empresa['Empresa']['razao_social']; ?></td>
								<td><?php echo $empresa['Empresa']['nome_fantasia']; ?></td>
								<td><?php echo $empresa['Empresa']['endereco']; ?></td>
								<td><?php echo $empresa['Empresa']['numero']; ?></td>
								<td><?php echo $empresa['Empresa']['bairro']; ?></td>
								<td><?php echo $empresa['Empresa']['cep']; ?></td>
								<td><?php echo $empresa['Empresa']['cidade']; ?></td>
								<td><?php echo $empresa['Empresa']['estado']; ?></td>
								<td><?php echo $empresa['Empresa']['email']; ?></td>
								<td><?php echo $empresa['Empresa']['contato']; ?></td>
								<td><img src="/assessor/img/upload/<?php echo $empresa['Empresa']['logomarca']; ?>" width="40px"/></td>
								<td><?php echo ($empresa['Empresa']['status'] == 0)? 'Inativo':'Ativo'; ?></td>
								

								<td><?php echo $this->Form->postLink(
										'Delete',
										array('action' => 'delete', $empresa['Empresa']['id']),
										array('confirm' => 'Are you sure?')); ?>

									<?php echo $this->Html->link('Edit', array('action' => 'edit', $empresa['Empresa']['id'])); ?>
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