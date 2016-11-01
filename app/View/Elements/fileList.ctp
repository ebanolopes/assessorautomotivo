<?php
$codFrabricante = array();
foreach ($this->request->data['VeiculoProdutos'] as $key => $catalogo) {
    $dadosAMaisVeiculo  = array();
    if (!empty($catalogo['Modelomotor']['modelo'])){
        $dadosAMaisVeiculo[] = $catalogo['Modelomotor']['modelo'];
    }
    if (!empty($catalogo['Potenciamotor']['potencia'])){
        $dadosAMaisVeiculo[] = $catalogo['Potenciamotor']['potencia'];
    }
    if (!empty($catalogo['Valvula']['quantidade'])){
        $dadosAMaisVeiculo[] = $catalogo['Valvula']['quantidade'];
    }
    if (!empty($catalogo['VeiculoProduto']['geracao'])){
        $dadosAMaisVeiculo[] = $catalogo['VeiculoProduto']['geracao'];
    }
    if (!empty($catalogo['Cilindro']['quantidade'])){
        $dadosAMaisVeiculo[] = $catalogo['Cilindro']['quantidade'];
    }
    if (!empty($catalogo['mes_inicial'])){
        $dadosAMaisVeiculo[] = str_pad($catalogo['mes_inicial'], 2,0,STR_PAD_LEFT).'/'.$catalogo['ano_inicial'];
    }else if(!empty($catalogo['ano_inicial'])){
        if (empty($catalogo['mes_final']) && !empty($catalogo['ano_final'])){
            $dadosAMaisVeiculo[] = $catalogo['ano_inicial'];
        }else{
            $dadosAMaisVeiculo[] = $catalogo['ano_inicial'].'/..';
        }           
    }
    if (!empty($catalogo['mes_final'])){
        $dadosAMaisVeiculo[] = str_pad($catalogo['mes_final'], 2,0,STR_PAD_LEFT).'/'.$catalogo['ano_final'];
    }else if(!empty($catalogo['ano_final'])){
        if (empty($catalogo['mes_inicial']) && !empty($catalogo['ano_inicial'])){
            $dadosAMaisVeiculo[] = $catalogo['ano_final'];
        }else{
            $dadosAMaisVeiculo[] = '../'.$catalogo['ano_final'];                
        }
    }
    if (!empty($catalogo['Combustivel']['tipo'])){
        $dadosAMaisVeiculo[] = $catalogo['Combustivel']['tipo'];
    }
    if (!empty($catalogo['Modeloveiculo']['modelo'])){
        $dadosAMaisVeiculo[] = $catalogo['Modeloveiculo']['modelo'];
    }
    $codFrabricante[] = array(
        $catalogo['id'],
        $catalogo['Montadora']['montadora'] . ' ' . $catalogo['Veiculo']['descricao'],
        implode('-', $dadosAMaisVeiculo)
    );
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-condensed mb-none">
                <thead>
                    <tr>
                        <th>DADOS DO VEÍCULO</th>
                        <th>DADOS COMPLEMENTARES</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead><span class="t" aria-hidden="true"></span>
                <tbody>                    
                    <?php foreach ($codFrabricante as $keyOutside => $catalogo): ?>
                        <tr>
                            <?php foreach (array_slice($catalogo,1) as $key => $value) {
                                ?><td><?php echo $value; ?></td><?php
                            } ?>
                            <td>
                            <?php echo $this->Html->link('<i class="fa fa-clone"></i>',array('controller' => 'produtos','action' => 'editVeiculoProdutos',$catalogo[0],$this->request->data['Produto']['id']),array('escape' => false)); ?>
                            <a href="javascript:;" onclick="remover($(this),<?php echo $catalogo[0]; ?>);"><i class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                    
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
