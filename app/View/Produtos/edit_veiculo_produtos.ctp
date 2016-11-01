<div class="container outsidemain">
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('VeiculoProduto',array('id' => 'produtoForm','role' => 'form','type' => 'file','class' => 'form-horizontal')); ?>
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
                        <h2 id="veiculo_header">Dados do veículo</h2>
                        <div class="row">
                            <?php
                            echo $this->Form->input('id',array('type' => 'hidden'));
                            $optionsField['label']['text'] = 'Montadora';
                            $optionsField['id'] = 'selectMontadora';
                            $optionsField['placeholder'] = 'Montadora';
                            echo $this->Form->input('id_montadora',array_merge(array('options' => $montadoras,'empty' => 'Montadora'),$optionsField));

                            $optionsField['label']['text'] = 'Veículo';
                            $optionsField['id'] = 'selecionaVeiculo';
                            $optionsField['placeholder'] = 'Veículo';
                            echo $this->Form->input('id_veiculo',array_merge(array('options' => $veiculos),$optionsField));

                            $optionsField['label']['text'] = 'Modelo do motor';
                            $optionsField['id'] = 'selecionaModeloMotores';
                            $optionsField['placeholder'] = 'Modelo do motor';
                            echo $this->Form->input('id_modelomotor',array_merge(array('options' => $modelosmotores,'empty' => 'Modelo do Motor'),$optionsField));

                            $optionsField['label']['text'] = 'Potência do motor';
                            $optionsField['id'] = 'selecionaMotor';
                            $optionsField['placeholder'] = 'Potência do motor';
                            echo $this->Form->input('id_potenciamotors',array_merge(array('options' => $potencias,'empty' => $optionsField['placeholder']),$optionsField));

                            $optionsField['label']['text'] = 'Válvulas';
                            $optionsField['id'] = 'selecionaValvulas';
                            $optionsField['placeholder'] = 'Válvulas';
                            echo $this->Form->input('id_valvulas',array_merge(array('options' => $valvulas,'empty' => $optionsField['placeholder']),$optionsField));

                            $optionsField['label']['text'] = 'Número de cilindros';
                            $optionsField['id'] = 'selecionaCilindros';
                            $optionsField['placeholder'] = 'Número de cilindros';
                            echo $this->Form->input('id_cilindro',array_merge(array('options' => $cilindros,'empty' => $optionsField['placeholder']),$optionsField));

                            $optionsField['label']['text'] = 'Combustível';
                            $optionsField['id'] = 'selecionaCombustivel';
                            $optionsField['placeholder'] = 'Combustível';
                            echo $this->Form->input('id_tipocombustivel',array_merge(array('options' => $combustiveis,'empty' => $optionsField['placeholder']),$optionsField));

                            $optionsField['label']['text'] = 'Modelo do veículo';
                            $optionsField['id'] = 'selecionaModeloveiculo';
                            $optionsField['placeholder'] = 'Modelo do veículo';
                            echo $this->Form->input('id_modeloveiculo',array_merge(array('options' => $modelosveiculos,'empty' => $optionsField['placeholder']),$optionsField));

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
                            echo $this->Form->input('id_geracao',array_merge(array('options' => $geracoes,'empty' => $optionsField['placeholder']),$optionsField));

                            $optionsField['label']['text'] = 'Tipo de direção';
                            $optionsField['id'] = 'selecionaDirecao';
                            $optionsField['placeholder'] = 'Tipo de direção';                    
                            echo $this->Form->input('id_tipodirecao',array_merge(array('options' => $direcoes,'empty' => $optionsField['placeholder']),$optionsField));
                            
                            $optionsField['label']['text'] = 'Ventilação';
                            $optionsField['id'] = 'selecionaVentilacao';
                            $optionsField['placeholder'] = 'Ventilação';
                            echo $this->Form->input('id_ventilacoes',array_merge(array('options' => $ventilacoes,'empty' => $optionsField['placeholder']),$optionsField));

                            $optionsField['label']['text'] = 'Transmissão';
                            $optionsField['id'] = 'selecionaTransmissao';
                            $optionsField['placeholder'] = 'Transmissão';
                            echo $this->Form->input('id_transmissao',array_merge(array('options' => $transmissoes,'empty' => $optionsField['placeholder']),$optionsField));
                            
                            $optionsField['label']['text'] = 'Tipo de freio';
                            $optionsField['id'] = 'selecionaFreiotipo';
                            $optionsField['placeholder'] = 'Tipo de freio';                    
                            echo $this->Form->input('id_tipofreio',array_merge(array('options' => $freiotipos,'empty' => $optionsField['placeholder']),$optionsField));

                            $optionsField['label']['text'] = 'Sistemas de freio';
                            $optionsField['id'] = 'selecionaFreiosistema';
                            $optionsField['placeholder'] = 'Sistemas de freio';
                            echo $this->Form->input('id_sistemafreio',array_merge(array('options' => $freiosistemas,'empty' => $optionsField['placeholder']),$optionsField));
                            ?>                            
                        </div>

                    </div>
                    <?php   
                    $options = array(
                        'label' => 'Salvar',
                        'class' => 'btn blue',
                        'div' => array(
                            'class' => 'form-actions pull-right'
                        ));
                    ?>
            <?php echo $this->Form->end($options); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('#selectMontadora').change(function (){
            $.ajax({
                type: 'POST',
                url: '<?php echo Router::url(array("controller" => "Veiculos", "action" => "geraListaVeiculos")); ?>/' +$(this).val(),
            }).done(function(data){
                $('#selecionaVeiculo').html(data);
            });
        });

        $('input[type="text"], select').each(function(){
            if ($(this).val()){
                $(this).css('background-color','#DCDCF7');
            }                
        });
    });
</script>