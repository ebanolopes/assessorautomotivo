<ul class="page-breadcrumb breadcrumb">

	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>
		<?php echo $this->Html->link('Relatório de Empresas', array('controller' => 'empresas', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Visualizando Empresas
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Empresas
		</div>
	</div>

	<div class="portlet-body">
		<h3><strong>Empresa: </strong> <?php echo $empresa['Empresa']['razao_social']; ?></h3>
	    <p><strong>Nome Fantasia:</strong> <?php echo $empresa['Empresa']['nome_fantasia']; ?></p>
	    <p><strong>CNPJ:</strong> <?php echo $empresa['Empresa']['cnpj']; ?></p>
	    <p><strong>Inscrição Estadual:</strong> <?php echo $empresa['Empresa']['inscr']; ?></p>
	    <p><strong>Endereço:</strong> <?php echo $empresa['Empresa']['endereco']; ?></p>
	    <p><strong>Número:</strong> <?php echo $empresa['Empresa']['numero']; ?></p>
	    <p><strong>Complemento:</strong> <?php echo $empresa['Empresa']['complemento']; ?></p>
	    <p><strong>Bairro:</strong> <?php echo $empresa['Empresa']['bairro']; ?></p>
	    <p><strong>Cep:</strong> <?php echo $empresa['Empresa']['cep']; ?></p>
	    <p><strong>Cidade:</strong> <?php echo $empresa['Empresa']['cidade']; ?></p>
	    <p><strong>Estado:</strong> <?php echo $empresa['Empresa']['estado']; ?></p>
	    <p><strong>E-mail:</strong> <?php echo $empresa['Empresa']['email']; ?></p>
	    <p><strong>Site:</strong> <?php echo $empresa['Empresa']['site']; ?></p>
	    <p><strong>Contato:</strong> <?php echo $empresa['Empresa']['contato']; ?></p>
	</div>

	<div class="clearfix">
	</div>

</div>



