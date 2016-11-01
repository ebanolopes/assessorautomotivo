<?php
class Produto extends AppModel{
	var $name = 'Produto';
	var $primaryKey = 'id'; 
	var $useTable = 'produtos';

	public $belongsTo = array(
		'Grupo' =>  array(
			'className' => 'Grupo',
			'foreignKey' => 'grupos_id_grupo'
			),

		'Subgrupo' =>  array(
			'className' => 'Grupo',
			'foreignKey' => 'id_subgrupo'
			),

		'Nomenclatura' =>  array(
			'className' => 'Nomenclatura',
			'foreignKey' => 'nomenclaturas_id_nomenclatura'
			),

		'Marca' =>  array(
			'className' => 'Marca',
			'foreignKey' => 'marcas_id'
			),
		'Sessao' =>  array(
			'className' => 'Sessao',
			'foreignKey' => 'sessao_id'
			),
		'Posicao' => array(
			'className' => 'Posicao',
			'foreignKey' => 'posicao_id'
		)
	);

	public $hasMany = array(
		'VeiculoProdutos' => array(
			'className' => 'VeiculoProduto',
			'foreignKey' => 'id_produto'
		),
	);

	public $hasAndBelongsToMany = array(
		'Categorias' => array(
			'className' => 'Categoria',
			'joinTable' => 'produtos_categorias',
			'foreignKey' => 'id_produto',
			'associationForeignKey' => 'id_categoria'
		));

}
  
?>
