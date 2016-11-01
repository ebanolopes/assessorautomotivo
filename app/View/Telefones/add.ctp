<h3 class="page-title">Cadastrar Telefones</h3>
<ul class="page-breadcrumb breadcrumb">
						
	<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>		
		<?php echo $this->Html->link('Relatório de Telefones', array('controller' => 'telefones', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Cadastro de Telefones
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Adicionar Telefones
		</div>
		<div class="tools">
			
		</div>
	</div>
	<div class="portlet-body">
		<?php echo $this->Form->create('Telefone',array('role' => 'form', 'class' => 'form-horizontal form-bordered')); ?>
			<div class="form-body">


				<?php 
				$optionsField = array(
                'label' => array(
                    'class' => 'col-md-3 control-label'
                ),
                'div'   => array(
                    'class' => 'form-group'
                ),
                'between' => '<div class="col-md-4">',
                'after'   => '</div>',
                'class'   => 'form-control',
                
            	); 
				echo $this->Form->input('fone',$optionsField);
				echo $this->Form->input('empresas_id_empr', array_merge(array('options' => $empresas),$optionsField));

				?>

			</div>
        <?php
        $options = array(
            'label' => 'Salvar',
            'class' => 'btn blue',
            'div' => array(
                'class' => 'form-actions right'
            ));
        ?>
		<?php echo $this->Form->end($options); ?>
	</div>
</div>



