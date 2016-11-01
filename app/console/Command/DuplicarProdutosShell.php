<?php
class DuplicarProdutosShell extends AppShell {
 
    public $uses = array('Marca','Produto','VeiculoProduto');
    
    public function main() {
        echo 'Criando nova Marca'."\n";
        $marca = $this->Marca->save(
            array(
                'Marca' => array(
                    'marca' => $this->args[0],
                    'empresas_id_empr' => $this->args[1]
                )
            )
        );

        echo "Marca criada com sucesso! \n";
        echo "Duplicando Produtos!\n";
        $this->Produto->unbindAll();
        $produtosAntigos = $this->Produto->find('all',array('conditions' => array('Produto.marcas_id' => $this->args[2])));
        echo "    Foram encontrados ".sizeof($produtosAntigos) . " produtos! \n";
        foreach ($produtosAntigos as $produtoBuscado) {
            echo "    Fazendo produto " . $produtoBuscado['Produto']['id'] . "\n";
            $idProdutoAntigo = $produtoBuscado['Produto']['id'];
            $produtoBuscado['Produto']['id'] = null;
            $produtoBuscado['Produto']['marcas_id'] = $marca['Marca']['id'];
            $produtoCadastrado = $this->Produto->save($produtoBuscado);
            if ($produtoCadastrado){
                $this->VeiculoProduto->unbindAll();
                $produtosDoVeiculo = $this->VeiculoProduto->find('all',array('conditions' => array('VeiculoProduto.id_produto' => $idProdutoAntigo)));
                echo "        Foram encontrados ".sizeof($produtosDoVeiculo)." veiculos para este produto \n";
                foreach ($produtosDoVeiculo as $produtoAntigo) {
                    echo "        Fazendo veiculo do produto ".$produtoAntigo['VeiculoProduto']['id']."\n";
                    $produtoAntigo['VeiculoProduto']['id'] = null;
                    $produtoAntigo['VeiculoProduto']['id_produto'] = $produtoCadastrado['Produto']['id'];
                    $this->VeiculoProduto->save($produtoAntigo);
                }

            }else{
                echo "Nao foi possivel cadastrar o produto!! \n";
                pr($this->Produto->validationErrors);
            }
        }
        echo "Produtos duplicados com sucesso!!! \n";
        echo 'Termino do processo'."\n";
    }
}
?>