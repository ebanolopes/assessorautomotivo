<?php
$codFrabricante = array();
$keyColor = 'pairColor';
foreach ($catalogoData as $key => $catalogo){
    $dadosAMaisVeiculo  = array();
    if (!empty($catalogo['Modelomotor']['modelo'])){
        $dadosAMaisVeiculo[] = $catalogo['Modelomotor']['modelo'];
    }
    if (!empty($catalogo['Potenciamotor']['potencia'])){
        $dadosAMaisVeiculo[] = $catalogo['Potenciamotor']['potencia'];
    }
    if (!empty($catalogo['Valvula']['quantidade'])){
        $dadosAMaisVeiculo[] = $catalogo['Valvula']['quantidade'].'v';
    }
    if (!empty($catalogo['VeiculoProduto']['geracao'])){
        $dadosAMaisVeiculo[] = $catalogo['VeiculoProduto']['geracao'];
    }
    if (!empty($catalogo['Cilindro']['quantidade'])){
        $dadosAMaisVeiculo[] = $catalogo['Cilindro']['quantidade'];
    }
    if (!empty($catalogo['VeiculoProduto']['mes_inicial'])){
        $dadosAMaisVeiculo[] = str_pad($catalogo['VeiculoProduto']['mes_inicial'], 2,0,STR_PAD_LEFT).'/'.$catalogo['VeiculoProduto']['ano_inicial'];
    }else if(!empty($catalogo['VeiculoProduto']['ano_inicial'])){
        if (empty($catalogo['VeiculoProduto']['mes_final']) && !empty($catalogo['VeiculoProduto']['ano_final'])){
            $dadosAMaisVeiculo[] = $catalogo['VeiculoProduto']['ano_inicial'];
        }else{
            $dadosAMaisVeiculo[] = $catalogo['VeiculoProduto']['ano_inicial'].'/..';
        }           
    }
    if (!empty($catalogo['VeiculoProduto']['mes_final'])){
        $dadosAMaisVeiculo[] = str_pad($catalogo['VeiculoProduto']['mes_final'], 2,0,STR_PAD_LEFT).'/'.$catalogo['VeiculoProduto']['ano_final'];
    }else if(!empty($catalogo['VeiculoProduto']['ano_final'])){
            if (empty($catalogo['VeiculoProduto']['mes_inicial']) && !empty($catalogo['VeiculoProduto']['ano_inicial'])){
                $dadosAMaisVeiculo[sizeof($dadosAMaisVeiculo) - 1] = $dadosAMaisVeiculo[sizeof($dadosAMaisVeiculo) - 1]. '/' . $catalogo['VeiculoProduto']['ano_final'];
            }else{
                $dadosAMaisVeiculo[] = '../'.$catalogo['VeiculoProduto']['ano_final'];                
            }
        }
    if (!empty($catalogo['Combustivel']['tipo'])){
        $dadosAMaisVeiculo[] = $catalogo['Combustivel']['tipo'];
    }
    if (!empty($catalogo['Modeloveiculo']['modelo'])){
        $dadosAMaisVeiculo[] = $catalogo['Modeloveiculo']['modelo'];
    }
    if (!empty($catalogo['Geracao']['geracao'])){
        $dadosAMaisVeiculo[] = 'Geração ' . $catalogo['Geracao']['geracao'];
    }
    $titAbbr = '';
    if (!empty($catalogo['Ventilacao']['tipo'])){                
        foreach (explode(' ',$catalogo['Ventilacao']['tipo']) as $key => $tipo) {
            $titAbbr .= substr($tipo, 0,1);
        }
        $titAbbr = 'C/'.$titAbbr;
    }
    $descVeiculo = (!empty($catalogo['Veiculo']['descricao']))? $catalogo['Veiculo']['descricao'] : '';
    if (array_key_exists($catalogo['Produto']['cod_fabricante'], $codFrabricante)){
        $codFrabricante[$catalogo['Produto']['cod_fabricante']][] = array(
            $codFrabricante[$catalogo['Produto']['cod_fabricante']][0][0],
            '',
            '',
            '',
            '',
            $catalogo['Montadora']['montadora'] . ' ' . $descVeiculo,
            implode(' ', $dadosAMaisVeiculo),
            $catalogo['Produto']['especificacao'].' '.$titAbbr
        );
    }else{
        if ($keyColor == 'pairColor'){
            $keyColor = 'oddColor';
        }else{
            $keyColor = 'pairColor';
        }
        $subgrupoTexto = (empty($catalogo['Produto']['Subgrupo']['grupo']))? '' : $catalogo['Produto']['Subgrupo']['grupo'];
        $codFrabricante[$catalogo['Produto']['cod_fabricante']][] = array(
            $keyColor,
            $this->Html->image('upload/'.$catalogo['Produto']['imagem'],array('width' => 30)),
            $catalogo['Produto']['cod_fabricante'],
            $catalogo['Produto']['cod_original'],
            $subgrupoTexto,
            $catalogo['Montadora']['montadora'] . ' ' . $descVeiculo,
            implode(' ', $dadosAMaisVeiculo),
            $catalogo['Produto']['especificacao'].' '.$titAbbr
        );
    }
}?>

<div class="container outsidemain">
    <div class="row">
        <div class="col-md-12">
            <h2>Consultar <strong>Produto</strong></h2>
            
                    <?php 
                    $optionsField = array(
                        'div'   => array(
                            'class' => 'form-group col-md-3'
                        ),
                        'class'   => 'form-control'
                    );
                    echo $this->Form->create('Produto',
                        array(
                            'id' => 'produtoForm',
                            'role' => 'form',
                            'inputDefaults' => $optionsField
                        )
                    ); 
                    echo $this->Html->div('row',
                        $this->Html->div('col-md-12',
                            $this->Form->input('marcas_id',array('label'=>array('class' => 'sr-only'),'placeholder' => 'Marca','options' => $marcas,'empty' => 'Selecione a marca'))
                        )
                    );
                    echo '<br />';
                    echo $this->Html->div('row',
                        $this->Html->div('col-md-12',
                            $this->Form->input('cod_fabricante',array('label'=>array('class' => 'sr-only'),'placeholder' => 'Digite o código do fabricante')).
                            $this->Form->input('cod_original',array('label'=>array('class' => 'sr-only'),'placeholder' => 'Digite o código original')).
                            $this->Form->input('cod_similar',array('label'=>array('class' => 'sr-only'),'placeholder' => 'Digite o código similar')).
                            $this->Form->input('sessao_id',array('options' => $sessoes,'label'=>array('class' => 'sr-only'),'id' => 'selectSessao','empty' => 'Sessão'))
                        )
                    );
                    echo '<br />';
                    echo $this->Form->input('grupos_id_grupo',array('options' => array(),'label'=>array('class' => 'sr-only'),'id' => 'selectGrupo','empty' => 'Grupo','div' => array('class' => 'form-group col-md-3'))).
                    $this->Html->div('subgrupoSelect',
                        $this->Form->input('Produto.id_subgrupo',
                            array(
                                'options' => array(),
                                'label'=>array('class' => 'sr-only'),
                                'empty' => 'Descrição',
                                'id' => 'selectSubGrupo'
                            )
                        )
                    ).
                    $this->Form->input('VeiculoProdutos.id_montadora',array('options' => $montadoras,'label'=>array('class' => 'sr-only'),'empty' => 'Montadora','id' => 'selectMontadora')).
                    $this->Form->input('VeiculoProdutos.id_veiculo',array('options' => array(),'label'=>array('class' => 'sr-only'),'empty' => 'Veículo','id' => 'selecionaVeiculo'));
                    echo $this->Form->input('VeiculoProdutos.id_modelomotor',array('options' => $modelosmotores,'label'=>array('class' => 'sr-only'),'empty' => 'Modelo de motor')).
                    $this->Form->input('VeiculoProdutos.id_potenciamotors',array('options' => $potencias,'label'=>array('class' => 'sr-only'),'empty' => 'Potência de motor')).
                    $this->Form->input('VeiculoProdutos.id_valvulas',array('options' => $valvulas,'label'=>array('class' => 'sr-only'),'empty' => 'Válvulas')).
                    $this->Form->input('VeiculoProdutos.mes_inicial',array('options' => $mes,'label'=>array('class' => 'sr-only'),'empty' => 'Mês'));
                    echo $this->Form->input('VeiculoProdutos.ano_inicial',array('options' => $anos,'label'=>array('class' => 'sr-only'),'empty' => 'Ano')).
                    $this->Form->input('VeiculoProdutos.mes_final',array('options' => $mes,'label'=>array('class' => 'sr-only'),'empty' => 'Mês')).
                    $this->Form->input('VeiculoProdutos.ano_final',array('options' => $anos,'label'=>array('class' => 'sr-only'),'empty' => 'Ano')).
                    $this->Form->input('VeiculoProdutos.id_tipocombustivel',array('options' => $combustiveis,'label'=>array('class' => 'sr-only'),'empty' => 'Tipo de combustível')); 
                    $options = array(
                        'label' => 'Pesquisar',
                        'class' => 'btn',
                        'div' => array(
                            'class' => 'text-right col-md-12'
                        )
                    );
                    echo $this->Form->end($options); ?>
                    <div id="listProdutos">
                    </div>

        </div>
    </div>
    <?php if (sizeof($catalogoData) > 0): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-condensed mb-none noborders">
                        <thead>
                            <tr>
                                <th></th>
                                <th>COD.FABRICA</th>
                                <th>COD.ORIGINAL</th>
                                <th>DESCRIÇÃO</th>
                                <th>DADOS DO VEÍCULO</th>
                                <th>DADOS COMPLEMENTARES</th>
                                <th>OBSERVAÇÃO</th>
                            </tr>
                        </thead><span class="t" aria-hidden="true"></span>
                        <tbody>
                            <?php foreach ($codFrabricante as $keyOutside => $catalogo): ?>
                                <?php foreach ($catalogo as $key => $item): ?>
                                    <tr class="<?php echo $keyOutside . ' ' . $item[0]; ?>">
                                        <?php foreach (array_slice($item, 1) as $key => $value) {
                                            ?><td><?php echo $value; ?></td><?php
                                        } ?>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<script type="text/javascript">
    $('#selectSessao').change(function (){
        $.ajax({
            type: 'POST',
            url: '<?php echo Router::url(array("controller" => "grupos", "action" => "geraListaGrupo")); ?>/' +$(this).val(),
        }).done(function(data){
            $('#selectGrupo').html(data);
        });
    });
    if ($('#selectSessao').val()){
        $('#selectSessao').trigger('change');
    }
    $('#selectGrupo').change(function(){
        $.ajax({
            type: 'POST',
            url: '<?php echo Router::url(array("controller" => "Produtos", "action" => "geraListaSubgrupo","catalogo")); ?>',
            data: { grupoid : $(this).val() }
        }).done(function(data){
            $('.subgrupoSelect').html(data);            
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
    $('#selectMontadora').trigger('change');
    $('#enviarCatalogo').click(function(e){
        $.ajax({
            type: 'POST',
            url: '<?php echo Router::url(array("controller" => "Produtos", "action" => "geraListaProdutos")); ?>',
            data: $('#produtoForm').serialize()
        }).done(function(data){
            $('#listProdutos').html(data);
        });
    });

</script>