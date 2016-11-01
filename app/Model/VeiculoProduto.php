<?php
class VeiculoProduto extends AppModel{
	public $name = 'VeiculoProduto';
	public $primaryKey = 'id';
	public $useTable = 'veiculoprodutos';

	public $belongsTo = array(
		'Montadora' =>  array(
			'className' => 'Montadora',
			'foreignKey' => 'id_montadora'
		),
		'Veiculo' =>  array(
			'className' => 'Veiculo',
			'foreignKey' => 'id_veiculo'
		),
		'Potenciamotor' =>  array(
			'className' => 'Potenciamotor',
			'foreignKey' => 'id_potenciamotors'
		),
		'Cilindro' =>  array(
			'className' => 'Cilindro',
			'foreignKey' => 'id_cilindro'
		),
		'Modelomotor' =>  array(
			'className' => 'Modelomotor',
			'foreignKey' => 'id_modelomotor'
		),
		'Combustivel' =>  array(
			'className' => 'Combustivel',
			'foreignKey' => 'id_tipocombustivel'
		),
		'Modeloveiculo' =>  array(
			'className' => 'Modeloveiculo',
			'foreignKey' => 'id_modeloveiculo'
		),
		'Direcao' =>  array(
			'className' => 'Direcao',
			'foreignKey' => 'id_tipodirecao'
		),
		'Ventilacao' =>  array(
			'className' => 'Ventilacao',
			'foreignKey' => 'id_ventilacoes'
		),
		'Transmissao' =>  array(
			'className' => 'Transmissao',
			'foreignKey' => 'id_transmissao'
		),
		'Freiotipo' =>  array(
			'className' => 'Freiotipo',
			'foreignKey' => 'id_tipofreio'
		),
		'Freiosistema' =>  array(
			'className' => 'Freiosistema',
			'foreignKey' => 'id_sistemafreio'
		),
		'Produto' =>  array(
			'className' => 'Produto',
			'foreignKey' => 'id_produto'
		),
		'Valvula' =>  array(
			'className' => 'Valvula',
			'foreignKey' => 'id_valvulas'
		),
		'Geracao' => array(
			'className' => 'Geracao',
			'foreignKey' => 'id_geracao'
		)
	);


	public function findToCatalogo(){
		$this->unbindAll();
		 $options= array(
		 	'limit' => 1,
		 	'joins' => array(
				array(
			 		'table' => 'montadoras',
			 		'alias' => 'Montadora',
			 		'type' => 'inner',
			 		'conditions' => array('VeiculoProduto.id_montadora' => 'Montadora.id')
		// 	),
		// 	array(
		// 		'table' => 'veiculos',
		// 		'alias' => 'Veiculo',
		// 		'type' => 'left',
		// 		'conditions' => array('VeiculoProduto.id_veiculo' => 'Veiculo.id')
		// 	),
		// 	array(
		// 		'table' => 'potenciamotors',
		// 		'alias' => 'Potenciamotor',
		// 		'type' => 'left',
		// 		'conditions' => array('VeiculoProduto.id_potenciamotors' => 'Potenciamotor.id')
		// 	),
		// 	array(
		// 		'table' => 'cilindros',
		// 		'alias' => 'Cilindro',
		// 		'type' => 'left',
		// 		'conditions' => array('VeiculoProduto.id_cilindro' => 'Cilindro.id')
		// 	),
		// 	array(
		// 		'table' => 'modelomotores',
		// 		'alias' => 'Modelomotor',
		// 		'type' => 'left',
		// 		'conditions' => array('VeiculoProduto.id_modelomotor' => 'Modelomotor.id')
		// 	),
		// 	array(
		// 		'table' => 'combustiveis',
		// 		'alias' => 'Combustivel',
		// 		'type' => 'left',
		// 		'conditions' => array('VeiculoProduto.id_tipocombustivel' => 'Combustivel.id')
		// 	),
		// 	array(
		// 		'table' => 'modeloveiculos',
		// 		'alias' => 'Modeloveiculo',
		// 		'type' => 'left',
		// 		'conditions' => array('VeiculoProduto.id_modeloveiculo' => 'Modeloveiculo.id')
		// 	),
		// 	array(
		// 		'table' => 'produtos',
		// 		'alias' => 'Produto',
		// 		'type' => 'right',
		// 		'conditions' => array('VeiculoProduto.id_produto' => 'Produto.id')
		// 	),
		// 	array(
		// 		'table' => 'marcas',
		// 		'alias' => 'Marca',
		// 		'type' => 'left',
		// 		'conditions' => array('Produto.marcas_id' => 'Marca.id')
				)
			)
		);
		return $this->find('all',$options);
	}

}?>