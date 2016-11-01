<?php
$this->extend('/Commons/forms');
$this->assign('title', 'Produto');
$this->start('page-content');

echo $this->Form->create('Produto',array('id' => 'produtoForm','role' => 'form','type' => 'file','class' => 'form-horizontal')); ?>
    <div class="form-body">
        <?php 
        $optionsField = array(
        'label' => array(
            'class' => 'sr-only'
        ),
        'div'   => array(
            'class' => 'col-md-3'
        ),
        'before'  => '<div class="form-group">',
        'between' => '<div class="col-md-12">',
        'after'   => '</div></div>',
        'class'   => 'form-control'                
        ); ?>
        <?php echo $this->Html->tag('span',"Códigos",array('class' => 'btn btn-primary mr-xs mb-sm col-md-12'));?>
        <div class="row">
            <?php
            echo $this->Form->input('id',array('type' => 'hidden'));
            $optionsField['label']['text'] = 'Código de Fabrica';
            $optionsField['placeholder'] = 'Código de Fabrica';
            echo $this->Form->input('cod_fabricante',$optionsField);


            $optionsField['label']['text'] = 'Código Original';
            $optionsField['placeholder'] = 'Código Orignal';
            echo $this->Form->input('cod_original',$optionsField);

            $optionsField['label']['text'] = 'Código Auxiliar';
            $optionsField['placeholder'] = 'Código Auxiliar';
            echo $this->Form->input('cod_similar',$optionsField);

            $optionsField['label']['text'] = 'Nomenclatura';
            $optionsField['placeholder'] = 'Nomenclatura';
            echo $this->Form->input('nomenclaturas_id_nomenclatura',array_merge(array('options' => $nomenclatura,'empty' => 'Nomenclatura'),$optionsField));
            ?>
        </div>
        <?php echo $this->Html->tag('span',"Divisões do Veículo",array('class' => 'btn btn-primary mr-xs mb-sm col-md-12'));?>
        <div class="row">           
            <?php
            $optionsField['label']['text'] = 'Sessão';
            $optionsField['id'] = 'selectSessao';
            $optionsField['placeholder'] = 'Sessão';
            $optionsField['div']['class'] = 'col-md-3';
            echo $this->Form->input('sessao_id',array_merge(array('options' => $sessoes,'empty' => 'Sessão'),$optionsField));

            $optionsField['label']['text'] = 'Grupo';
            $optionsField['id'] = 'selectGrupo';
            $optionsField['placeholder'] = 'Grupo';
            $optionsField['div']['class'] = 'col-md-3';
            echo $this->Form->input('grupos_id_grupo',
                array_merge(
                    array(
                        'options' => $grupos,
                        'empty' => 'Grupo'
                    ),
                $optionsField));
            ?>

            <div id="subgrupoSelect"><?php
            $optionsField['label']['text'] = 'Subgrupo';
            $optionsField['id'] = '';
            $optionsField['placeholder'] = 'Subgrupo';
            $optionsField['div']['class'] = 'col-md-3';
            echo $this->Form->input('id_subgrupo',array_merge(array('options' => $subgrupo),$optionsField));
            ?></div><?php

            $optionsField['label']['text'] = 'Marca';
            $optionsField['placeholder'] = 'Marca';
            $optionsField['div']['class'] = 'col-md-3';
            echo $this->Form->input('marcas_id',array_merge(array('options' => $marca,'empty' => 'Marca'),$optionsField));

        ?></div>
<?php echo $this->Html->tag('span',"Dados do Produto",array('class' => 'btn btn-primary mr-xs mb-sm col-md-12'));?>
        <div class="row">
            <?php
            $optionsField['label']['text'] = 'Quantidade Aplicada';
            $optionsField['placeholder'] = 'Quantidade Aplicada';
            echo $this->Form->input('qa',$optionsField);

            $optionsField['label']['text'] = 'Imagem';
            $optionsField['placeholder'] = 'Imagem';
            echo $this->Form->input('imagem',array_merge(array('type' => 'file'),$optionsField));
        ?></div>   

        <div class="row">
            <?php
            $optionsField['div']['class'] = 'col-md-12';
            $optionsField['label']['text'] = 'Observação';
            $optionsField['placeholder'] = 'Observação';
            $optionsField['rows'] = 1;
            echo $this->Form->input('especificacao',$optionsField);
            unset($optionsField['rows']);

            ?>
        </div>  
        <?php echo $this->Html->tag('span',"Dados do Veículo",array('class' => 'btn btn-primary mr-xs mb-sm col-md-12'));?>
        <div class="row">
            <?php
            $optionsField['div']['class'] = 'col-md-3';
            $optionsField['label']['text'] = 'Montadora';
            $optionsField['id'] = 'selectMontadora';
            $optionsField['placeholder'] = 'Montadora';
            echo $this->Form->input('montadoras',array_merge(array('options' => $montadoras,'empty' => 'Montadora'),$optionsField));

            $optionsField['label']['text'] = 'Veículo';
            $optionsField['id'] = 'selecionaVeiculo';
            $optionsField['placeholder'] = 'Veículo';
            echo $this->Form->input('veiculo_selecionar',array_merge(array('options' => array(null => 'Veículo')),$optionsField));

            $optionsField['label']['text'] = 'Modelo do motor';
            $optionsField['id'] = 'selecionaModeloMotores';
            $optionsField['placeholder'] = 'Modelo do motor';
            echo $this->Form->input('modelomotor_selecionar',array_merge(array('options' => $modelosmotores,'empty' => 'Modelo do Motor'),$optionsField));

            $optionsField['label']['text'] = 'Potência do motor';
            $optionsField['id'] = 'selecionaMotor';
            $optionsField['placeholder'] = 'Potência do motor';
            echo $this->Form->input('potencia_selecionar',array_merge(array('options' => $potencias,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Válvulas';
            $optionsField['id'] = 'selecionaValvulas';
            $optionsField['placeholder'] = 'Válvulas';
            echo $this->Form->input('valvulas_selecionar',array_merge(array('options' => $valvulas,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Número de cilindros';
            $optionsField['id'] = 'selecionaCilindros';
            $optionsField['placeholder'] = 'Número de cilindros';
            echo $this->Form->input('cilindros_selecionar',array_merge(array('options' => $cilindros,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Combustível';
            $optionsField['id'] = 'selecionaCombustivel';
            $optionsField['placeholder'] = 'Combustível';
            echo $this->Form->input('combustivel_selecionar',array_merge(array('options' => $combustiveis,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Modelo do veículo';
            $optionsField['id'] = 'selecionaModeloveiculo';
            $optionsField['placeholder'] = 'Modelo do veículo';
            echo $this->Form->input('modeloveiculo_selecionar',array_merge(array('options' => $modelosveiculos,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Mês Inicial';
            $optionsField['id'] = 'txtMesInicial';
            $optionsField['placeholder'] = 'Mês Inicial';
            echo $this->Form->input('mes_inicial',array_merge(array('options' => $mes,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Ano Inicial';
            $optionsField['id'] = 'txtAnoInicial';
            $optionsField['placeholder'] = 'Ano inicial';
            echo $this->Form->input('ano_inicial',array_merge(array('options' => $anos,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] ='Mês Final';
            $optionsField['id'] = 'txtMesFinal';
            $optionsField['placeholder'] = 'Mês Final';
            echo $this->Form->input('mes_final',array_merge(array('options' => $mes,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Ano Final';
            $optionsField['id'] = 'txtAnoFinal';
            $optionsField['placeholder'] = 'Ano final';
            echo $this->Form->input('ano_final',array_merge(array('options' => $anos,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Geração';
            $optionsField['id'] = 'GeracaoCarro';
            $optionsField['placeholder'] = 'Geração';
            echo $this->Form->input('geracaocarro_selecionar',array_merge(array('options' => $geracoes,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Tipo de direção';
            $optionsField['id'] = 'selecionaDirecao';
            $optionsField['placeholder'] = 'Tipo de direção';                    
            echo $this->Form->input('direcao_selecionar',array_merge(array('options' => $direcoes,'empty' => $optionsField['placeholder']),$optionsField));
            
            $optionsField['label']['text'] = 'Ventilação';
            $optionsField['id'] = 'selecionaVentilacao';
            $optionsField['placeholder'] = 'Ventilação';
            echo $this->Form->input('ventilacao_selecionar',array_merge(array('options' => $ventilacoes,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Transmissão';
            $optionsField['id'] = 'selecionaTransmissao';
            $optionsField['placeholder'] = 'Transmissão';
            echo $this->Form->input('transmissoes_selecionar',array_merge(array('options' => $transmissoes,'empty' => $optionsField['placeholder']),$optionsField));
            
            $optionsField['label']['text'] = 'Tipo de freio';
            $optionsField['id'] = 'selecionaFreiotipo';
            $optionsField['placeholder'] = 'Tipo de freio';                    
            echo $this->Form->input('freiotipo_selecionar',array_merge(array('options' => $freiotipos,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['label']['text'] = 'Sistemas de freio';
            $optionsField['id'] = 'selecionaFreiosistema';
            $optionsField['placeholder'] = 'Sistemas de freio';
            echo $this->Form->input('freiosistema_selecionar',array_merge(array('options' => $freiosistemas,'empty' => $optionsField['placeholder']),$optionsField));

            $optionsField['div']['class'] = 'col-md-3';
            ?>
            <div class="col-md-6 text-right" id="buttonSaveHolder">
                <input class="btn blue" type="button" onclick="return salvar();" value="Vincular Veículo">
            </div>  
        </div>
        <div class="row">

        </div>
        <br />
        <?php echo $this->element('fileList'); ?>
               

    </div>
    <?php   
    $options = array(
        'label' => 'Salvar',
        'class' => 'btn blue',
        'div' => array(
            'class' => 'form-actions text-right'
        ));
    echo $this->Form->end($options);
    ?>
    <script type="text/javascript">
        var veiculoid = 0;
        $(function(){
            $('#selectGrupo').change(function(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Router::url(array("controller" => "Produtos", "action" => "geraListaSubgrupo")); ?>',
                    data: { grupoid : $(this).val() }
                }).done(function(data){
                    $('#subgrupoSelect').html(data);
                });
            });
            $('#selectMontadora').change(function (){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Router::url(array("controller" => "Veiculos", "action" => "geraListaVeiculos")); ?>/' +$(this).val(),
                }).done(function(data){
                    $('#selecionaVeiculo').html(data);
                });
            });
            $('#selectSessao').change(function (){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Router::url(array("controller" => "grupos", "action" => "geraListaGrupo")); ?>/' +$(this).val(),
                }).done(function(data){
                    $('#selectGrupo').html(data);
                    $("#selectGrupo").trigger("change");
                });
            });
            $('input[type="text"], select').each(function(){
                if ($(this).val()){
                    $(this).css('background-color','#DCDCF7');
                }                
            });
        });
        function zeroFrontal(numero){
            if (parseInt(numero) < 10){
                return '0' + numero;
            }
            return numero;
        }
        function salvar () {
            if (($('#txtAnoFinal').val() < $('#txtAnoInicial').val()) && ($('#txtAnoFinal').val())){
                alert("Ano final deve ser menor que ano inicial");
                return 0;
            }
            var dadosCarro = [[],[]];
            if ($( "#selectMontadora option:selected" ).val()){
                dadosCarro[0].push($( "#selectMontadora option:selected" ).text());
            }
            if ($( "#selecionaVeiculo option:selected" ).val()){
                dadosCarro[0].push($( "#selecionaVeiculo option:selected" ).text());
            }
            if ($( "#selecionaModeloMotores option:selected" ).val()){
                dadosCarro[1].push($( "#selecionaModeloMotores option:selected" ).text());
            }
            if ($( "#selecionaMotor option:selected" ).val()){
                dadosCarro[1].push($( "#selecionaMotor option:selected" ).text());
            }
            if ($( "#selecionaValvulas option:selected" ).val()){
                dadosCarro[1].push($( "#selecionaValvulas option:selected" ).text());
            }
            if ($( "#GeracaoCarro option:selected" ).val()){
                dadosCarro[1].push($( "#GeracaoCarro option:selected" ).text());
            }
            if ($( "#selecionaCilindros option:selected" ).val()){
                dadosCarro[1].push($( "#selecionaCilindros option:selected" ).text());
            }
            if ($( "#txtMesInicial option:selected" ).val()){
                dadosCarro[1].push(zeroFrontal($('#txtMesInicial').val()) + '/' + $('#txtAnoInicial').val());
            }else if($('#txtAnoInicial').val()){
                if($('#txtAnoFinal').val() && !$('#txtMesFinal').val()){
                    dadosCarro[1].push($('#txtAnoInicial').val());
                }else{
                    dadosCarro[1].push($('#txtAnoInicial').val() + '/..');
                }
            }

            if ($( "#txtMesFinal option:selected" ).val()){
                dadosCarro[1].push(zeroFrontal($('#txtMesFinal').val()) + '/' + $('#txtAnoFinal').val());
            }else if($('#txtAnoFinal').val()){
                if($('#txtAnoInicial').val() && !$('#txtMesInicial').val()){
                    dadosCarro[1].push($('#txtAnoFinal').val());
                }else{
                    dadosCarro[1].push('/..'+$('#txtAnoFinal').val());
                }
            }
            if ($( "#selecionaCombustivel option:selected" ).val()){
                dadosCarro[1].push($( "#selecionaCombustivel option:selected" ).text());
            }
            if ($( "#selecionaModeloveiculo option:selected" ).val()){
                dadosCarro[1].push($( "#selecionaModeloveiculo option:selected" ).text());
            }
            dadosCarro[0] = dadosCarro[0].join(' ');
            dadosCarro[1] = dadosCarro[1].join('-');
            dadosCarro  = '<td>' + dadosCarro[0] + '</td><td>' + dadosCarro[1] + '</td>';
            dadosCarro += '<td><a href="javascript:;" onclick="removerElemento($(this));"><i class="fa fa-remove"></i></a></td>';
            $('table tbody').append('<tr>'+dadosCarro+'</tr>');

            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_montadora]" value="'+$( "#selectMontadora option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_veiculo]" value="'+$( "#selecionaVeiculo option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_potenciamotors]" value="'+$( "#selecionaMotor option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_cilindro]" value="'+$( "#selecionaCilindros option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_modelomotor]" value="'+$( "#selecionaModeloMotores option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_tipocombustivel]" value="'+ $( "#selecionaCombustivel option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_modeloveiculo]" value="'+ $( "#selecionaModeloveiculo option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][mes_inicial]" value="'+$('#txtMesInicial').val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][ano_inicial]" value="'+$('#txtAnoInicial').val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][mes_final]" value="'+$('#txtMesFinal').val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][ano_final]" value="'+$('#txtAnoFinal').val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_tipodirecao]" value="'+$( "#selecionaDirecao option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_ventilacoes]" value="'+$( "#selecionaVentilacao option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_transmissao]" value="'+$( "#selecionaTransmissao option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_tipofreio]" value="'+ $( "#selecionaFreiotipo option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_sistemafreio]" value="'+ $( "#selecionaFreiosistema option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_valvulas]" value="'+ $( "#selecionaValvulas option:selected" ).val()+'"/>');
            $('#produtoForm').append('<input type="hidden" name="data[VeiculoProdutos]['+veiculoid+'][id_geracao]" value="'+$('#GeracaoCarro').val()+'"/>');
            veiculoid += 1;
            return false;
        }
        function remover(elemento,id){
            var r = confirm("Deseja realmente desvincular esse registro?");
            if (r == true){
                if (id == 0){
                    elemento.parent().parent().remove();
                }else{
                    $.ajax({
                      type: "POST",
                      url: "<?php echo Router::url(array('controller' => 'veiculo_produtos','action' => 'delete',)); ?>/"+id,
                    }).done(function( msg ) {
                        elemento.parent().parent().remove();
                    });   
                }       
            }
        }
        function removerElemento(elemento){
            elemento.parent().parent().remove();
        } 
        $("#txtAnoInicial").val("1990");
        $("#txtAnoFinal").val("2000"); 
    </script>
    <?php
$this->end();
?>
