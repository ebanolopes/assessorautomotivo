<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Detalhe de produto</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $produto['Subgrupo']['grupo']; ?></h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php echo $this->Html->image('upload/'.$produto['Produto']['imagem']); ?>
		</div>
	    <div class="col-md-8">
			<p>
				<strong>MARCA: </strong> <?php echo $produto['Marca']['marca']; ?><br />
				<strong>CODIGO FABRICA: </strong> <?php echo $produto['Produto']['cod_fabricante']; ?><br />
				<strong>CODIGO ORIGINAL: </strong> <?php echo $produto['Produto']['cod_original']; ?><br />
				<strong>CODIGO NCM/SH: </strong> <?php echo $produto['Produto']['cod_padrao']; ?><br />
				<br />
				<strong>SESSÃO DO MOTOR: </strong> <?php echo $produto['Sessao']['nome']; ?><br />
				<strong>GRUPO: </strong> <?php echo $produto['Grupo']['grupo']; ?><br />
				<strong>SUB GRUPO: </strong> <?php echo $produto['Subgrupo']['grupo']; ?><br />
				<br />
				<strong>MONTADORA: </strong><?php echo $veiculo_produto['Veiculo']['Montadora']['montadora']; ?><br />
				<strong>VEICULO: </strong> <?php echo $veiculo_produto['Veiculo']['descricao']; ?><br />
				<strong>MOTOR: </strong> <?php echo $veiculo_produto['Modelomotor']['modelo']; ?><br />
				<strong>POTENCIA MOTOR: </strong> <?php echo $veiculo_produto['Potenciamotor']['potencia']; ?><br />
				<strong>VALVULAS: </strong> <?php echo $veiculo_produto['Valvula']['quantidade']; ?><br />
				<strong>NUMERO CILINDROS: </strong> <?php echo $veiculo_produto['Cilindro']['quantidade']; ?><br />
				<strong>COMBUSTIVEL: </strong> <?php echo $veiculo_produto['Combustivel']['tipo']; ?><br />
				<strong>MODELO VEICULO: </strong> <?php echo $veiculo_produto['Modeloveiculo']['modelo']; ?><br />
				<strong>MES INICIAL: </strong> <?php echo str_pad($veiculo_produto['VeiculoProduto']['mes_inicial'], 2,0,STR_PAD_LEFT); ?><br />
				<strong>ANO INICIAL: </strong> <?php echo $veiculo_produto['VeiculoProduto']['ano_inicial']; ?><br />
				<strong>MES FINAL: </strong> <?php echo str_pad($veiculo_produto['VeiculoProduto']['mes_final'], 2,0,STR_PAD_LEFT); ?><br />
				<strong>ANO FINAL: </strong> <?php echo $veiculo_produto['VeiculoProduto']['ano_final']; ?><br />
				<br />
				<strong>EIXO: </strong> <?php echo $produto['Produto']['eixo']; ?><br />
				<strong>POSICAO: </strong> <?php echo $produto['Posicao']['posicao']; ?><br />
				<strong>LADO: </strong> <?php echo $produto['Produto']['lado']; ?><br />
				<strong>COMPRIMENTO: </strong> <?php echo $produto['Produto']['comprimento']; ?><br />
				<strong>DIAMETRO INTERNO: </strong> <?php echo $produto['Produto']['diametro_int']; ?><br />
				<strong>DIAMETRO EXTERNO: </strong> <?php echo $produto['Produto']['diametro_ext']; ?><br />
				<strong>ALTURA: </strong> <?php echo $produto['Produto']['altura']; ?><br />
				<strong>PESO: </strong> <?php echo $produto['Produto']['peso']; ?><br />
				<strong>ESTRIA INTERNA: </strong> <?php echo $produto['Produto']['estria_int']; ?><br />
				<strong>ESTRIA EXTERNA: </strong> <?php echo $produto['Produto']['estria_ext']; ?><br />
				<strong>QUANTIDADE APLICADA: </strong> <?php echo $produto['Produto']['qa']; ?><br />
				<strong>OBSERVAÇÃO: </strong> <br />
			</p>

		</div>  
	</div>
</div>
