			<div class="form-body">

				<?php 
				$optionsField = array(
                'label' => array(
                    'class' => 'sr-only'
                ),
                'div'   => array(
                    'class' => 'col-md-4'
                ),
                'before'  => '<div class="form-group">',
                'between' => '<div class="col-md-12">',
                'after'   => '</div></div>',
                'class'   => 'form-control'                
            	); 	
				?>
				<!--<h3>Códigos do produto</h3>-->
				<div class="row">
				<?php
					$optionsField['label']['text'] = 'Código de Fabrica';
					$optionsField['placeholder'] = 'Código de Fabrica';
					echo $this->Form->input('cod_fabricante',$optionsField);

					$optionsField['label']['text'] = 'Código Original';
					$optionsField['placeholder'] = 'Código Orignal';
					echo $this->Form->input('cod_original',$optionsField);

					$optionsField['label']['text'] = 'Código Auxiliar';
					$optionsField['placeholder'] = 'Código Auxiliar';
					echo $this->Form->input('cod_similar',$optionsField);
				?></div>
				<!--<h3>Grupos e subgrupos</h3>-->
				<div class="row">
				<?php
					$optionsField['label']['text'] = 'Grupo';
					$optionsField['id'] = 'selectGrupo';
					$optionsField['placeholder'] = 'Grupo';
					echo $this->Form->input('grupos_id_grupo',array_merge(array('options' => $grupo),$optionsField));
					?>

					<div id="subgrupoSelect"><?php
					$optionsField['label']['text'] = 'Subgrupo';
					$optionsField['id'] = '';
					$optionsField['placeholder'] = 'Subgrupo';
					echo $this->Form->input('id_subgrupo',array_merge(array('options' => array(null => 'Selecione um grupo')),$optionsField));
				?></div><?php
				?></div>


				


				<div class="row">
				<?php

				/*$optionsField['label']['text'] = 'Descrição';
				echo $this->Form->input('descricao',$optionsField);*/

				$optionsField['label']['text'] = 'Posição';
				$optionsField['placeholder'] = 'Posição';
				echo $this->Form->input('posicao',$optionsField);
				?>
				</div>

				<div class="row">
				<?php
				/*
				$optionsField['label']['text'] = 'Preço';
				$optionsField['placeholder'] = 'Preço';
				echo $this->Form->input('preco',array_merge(array('type' => 'text'),$optionsField));
				*/
				$optionsField['label']['text'] = 'Quantidade Aplicada';
				$optionsField['placeholder'] = 'Quantidade Aplicada';
				echo $this->Form->input('qa',$optionsField);
				/*
				$optionsField['label']['text'] = 'Estoque';
				$optionsField['placeholder'] = 'Estoque';
				echo $this->Form->input('estoque',array_merge(array('type' => 'text'),$optionsField));
				*/
				$optionsField['label']['text'] = 'Especificações';
				$optionsField['placeholder'] = 'Especificações';
				echo $this->Form->input('especificacao',$optionsField);
				?></div>
				<div class="row">
				<?php

				$optionsField['label']['text'] = 'Imagem';
				$optionsField['placeholder'] = 'Imagem';
				echo $this->Form->input('imagem',array_merge(array('type' => 'file'),$optionsField));

				$optionsField['label']['text'] = 'Mês Inicial';
				$optionsField['placeholder'] = 'Mês Inicial';
				echo $this->Form->input('mes_inicial',array_merge(array('options' => $mes),$optionsField));
				?></div>
				<div class="row">
				<?php

				$optionsField['label']['text'] = 'Ano inicial';
				$optionsField['placeholder'] = 'Ano Inicial';
				echo $this->Form->input('ano_inicial',array_merge(array('options' => $anos),$optionsField));

				$optionsField['label']['text'] ='Mês Final';
				$optionsField['placeholder'] = 'Mês Final';
				echo $this->Form->input('mes_final',array_merge(array('options' => $mes),$optionsField));
				?></div>

				<div class="row">
				<?php						
				$optionsField['label']['text'] = 'Ano Final';
				$optionsField['placeholder'] = 'Ano Final';
				echo $this->Form->input('ano_final',array_merge(array('options' => $anos),$optionsField));				
				?></div>

				<div class="row">
				<?php
				$optionsField['label']['text'] = 'Nomenclatura';
				$optionsField['placeholder'] = 'Nomenclatura';
				echo $this->Form->input('nomenclaturas_id_nomenclatura',array_merge(array('options' => $nomenclatura),$optionsField));
				?></div>

				<div class="row">
				<?php
				$optionsField['label']['text'] = 'Marca';
				$optionsField['placeholder'] = 'Marca';
				echo $this->Form->input('marcas_id_marca',array_merge(array('options' => $marca),$optionsField));

				$optionsField['label']['text'] = 'Categoria';
				$optionsField['placeholder'] = 'Categoria';
				echo $this->Form->input('Categorias',array_merge(array('options' => $categoria,'multiple' => true),$optionsField));
				?></div>
			
				<div class="row">
				<?php
				$optionsField['label']['text'] = 'Diâmentro';
				$optionsField['placeholder'] = 'Diâmentro';
				echo $this->Form->input('diamentro',$optionsField);

				$optionsField['label']['text'] = 'Diâmentro Interno';
				$optionsField['placeholder'] = 'Diâmentro Interno';
				echo $this->Form->input('diamentro_int',$optionsField);

				$optionsField['label']['text'] = 'Diâmentro Externo';
				$optionsField['placeholder'] = 'Diâmetro Externo';
				echo $this->Form->input('diamentro_ext',$optionsField);
				?></div>

				<div class="row">
				<?php
				$optionsField['label']['text'] = 'Comprimento';
				$optionsField['placeholder'] = 'Comprimento';
				echo $this->Form->input('comprimento',$optionsField);

				$optionsField['label']['text'] = 'Altura';
				$optionsField['placeholder'] = 'Altura';
				echo $this->Form->input('altura',$optionsField);

				$optionsField['label']['text'] = 'Peso';
				$optionsField['placeholder'] = 'Peso';
				echo $this->Form->input('peso',$optionsField);
				?></div>

				<div class="row">
				<?php
				$optionsField['label']['text'] = 'Estrias';
				$optionsField['placeholder'] = 'Estrias';
				echo $this->Form->input('estria',$optionsField);

				$optionsField['label']['text'] = 'Estrias Internas';
				$optionsField['placeholder'] = 'Estrias Internas';
				echo $this->Form->input('estria_int',$optionsField);

				$optionsField['label']['text'] = 'Estrias Externas';
				$optionsField['placeholder'] = 'Estrias externas';
				echo $this->Form->input('estria_ext',$optionsField);
				?></div>
				<h2>Escolha seus veículos</h2>
				<div class="row">
						<?php
						$optionsField['label']['text'] = 'Montadoras';
						$optionsField['id'] = 'selectMontadora';
						$optionsField['placeholder'] = 'Montadoras';
						echo $this->Form->input('montadoras',array_merge(array('options' => $montadoras),$optionsField));
						?>
				</div>
				<div class="row">
					<div id="listaVeiculos" class="col-md-4">
					</div>
					<div id="listaVeiculosEscolhidos" class="col-md-4">
						<p>Carros selecionados</p>
					</div>
					<div id="listaMotores" class="col-md-4">
						<p>Potencias compatíveis</p>
					</div>

				</div>
			</div>





<script type="text/javascript">
    jQuery(document).ready(function($){        
        $('#cnpj').focus();
        FormComponents.init();

        //$("#cnpj").mask("99.999.999/9999-99");
        //$("#data_cadastro").mask("99/99/9999");
        //$("#cep").mask("99999-999");
        $('#selectGrupo').change(function(){
        	$.ajax({
        		type: 'POST',
        		url: '<?php echo Router::url(array("controller" => "Produtos", "action" => "geraListaSubgrupo")); ?>',
        		data: { grupoid : $(this).val() }
        	}).done(function(data){
        		$('#subgrupoSelect').html(data);
        	});
        });
		$("#selectGrupo").trigger("change");
        $('#selectMontadora').change(function(){
        	var idsSelecionados = [];
        	$('#listaVeiculosEscolhidos input[type="checkbox"]').each(function (){
        		idsSelecionados.push($(this).val());
        	});
        	$.ajax({
        		type: 'POST',
        		data: { ids : idsSelecionados },
        		url: '<?php echo Router::url(array("controller" => "Veiculos", "action" => "geraListaVeiculos")); ?>/' +$(this).val(),
        	}).done(function(data){
        		$('#listaVeiculos').html(data);
		        $('input[type="checkbox"]').change(function(){
		        	if (!$(this).is(":checked")){
		        		$(this).parent().remove();
		        	}else{
		        		$('#listaVeiculosEscolhidos').append($(this).parent());
		        	}
		        	var idsSelecionados = [];
		        	$('#listaMotores input[type="checkbox"]').each(function (){
		        		idsSelecionados.push($(this).val());
		        	})
			    	$.ajax({
			    		type: 'POST',
			    		data: { ids : idsSelecionados },
			    		url: '<?php echo Router::url(array("controller" => "potenciamotors", "action" => "geraListaMotores")); ?>/' +$(this).val(),
					}).done(function (data2){
						$('#listaMotores').append(data2);
					});
		        });
        	});
        });
    });
</script>