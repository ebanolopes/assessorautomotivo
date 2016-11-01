<li class="start active">
	<a href="javascript:;">
	<i class="fa fa-cogs"></i>
	<span class="title">
		Cadastros
	</span>
	<span class="arrow ">
	</span>
	</a>
	<ul class="sub-menu">
		<?php if (AuthComponent::user()['nivel'] == 'adm'): ?>
			<li><?php echo $this->Html->link('Cilindros', array('controller' => 'cilindros', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Combustível', array('controller' => 'combustivels', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Empresa', array('controller' => 'empresas', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Freios', array('controller' => 'freiotipos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Grupo', array('controller' => 'grupos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Marca', array('controller' => 'marcas', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Montadora', array('controller' => 'montadoras', 'action' => 'index')); ?></li>
		<?php endif; ?>
		<li><?php echo $this->Html->link('Nomenclatura', array('controller' => 'nomenclaturas', 'action' => 'index')); ?></li>
		<?php if (AuthComponent::user()['nivel'] == 'adm'): ?>
			<li><?php echo $this->Html->link('Potência de Motor', array('controller' => 'potenciamotors', 'action' => 'index')); ?></li>
		<?php endif; ?>
		<li><?php echo $this->Html->link('Produto', array('controller' => 'produtos', 'action' => 'index')); ?></li>
		<?php if (AuthComponent::user()['nivel'] == 'adm'): ?>
			<li><?php echo $this->Html->link('Quantidade de Valvula', array('controller' => 'valvulas', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Sessões', array('controller' => 'sessaos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Sistema de freios', array('controller' => 'freiossistemas', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Sub Grupo', array('controller' => 'grupos', 'action' => 'subgrupos')); ?></li>
			<li><?php echo $this->Html->link('Tipos de direção', array('controller' => 'direcaos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Transmissões', array('controller' => 'transmissaos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Usuários', array('controller' => 'usuarios', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Veículo', array('controller' => 'veiculos', 'action' => 'index')); ?></li>
		<?php endif; ?>
		<li><?php echo $this->Html->link('Sair', array('controller' => 'usuarios', 'action' => 'logout')); ?></li>
	</ul>
</li>