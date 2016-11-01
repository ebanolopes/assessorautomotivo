<h3 class="page-title">Editar Categoria</h3>
<ul class="page-breadcrumb breadcrumb">

<li>
		<i class="fa fa-home"></i>
		<?php echo $this->Html->link('Início', array('controller' => 'gerais', 'action' => 'home')); ?>
		<i class="fa fa-angle-right"></i>
	</li>
	<li>		
		<?php echo $this->Html->link('Relatório de Categorias', array('controller' => 'categorias', 'action' => 'index')); ?>
		<i class="fa fa-angle-right"></i>

	</li>
	<li>
		Cadastro de Categorias
	</li>
</ul>

<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-cogs"></i>Editar Categoria
		</div>
		<div class="tools">
			
		</div>
	</div>

	<div class="portlet-body">

		<?php echo $this->Form->create('Categoria',array('role' => 'form','class' => 'form-horizontal form-bordered')); ?>
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
				?>

				<?php

				$optionsField['label']['text'] = 'Categoria';
				echo $this->Form->input('categoria',array_merge(array('type' => 'text'),$optionsField));

		
				echo $this->Form->input('id', array('type' => 'hidden'));		
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
<script type="text/javascript">
    jQuery(document).ready(function($){        
        $('#cnpj').focus();
        FormComponents.init();

        //$("#cnpj").mask("99.999.999/9999-99");
        //$("#data_cadastro").mask("99/99/9999");
        //$("#cep").mask("99999-999");
    });
</script>

