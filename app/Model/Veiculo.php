<?php
class Veiculo extends AppModel{
	var $name = 'Veiculo';
	var $primaryKey = 'id';
	var $useTable = 'veiculos';

	public $validate = array(
		'descricao' => array(
			'rule' => 'notEmpty'
		),

		'ano_modelo' => array(
			'rule' => 'notEmpty'
		),

		'tipo' => array(
			'rule' => 'notEmpty'
		),

		'montadoras_id_montadora' => array(
			'rule' => 'notEmpty'
		)
	);	

	public $belongsTo = array(

		'Montadora' =>  array(
			'className' => 'Montadora',
			'foreignKey' => 'montadoras_id_montadora'
			)
		);

	public $hasAndBelongsToMany = array(
		'Produtos' => array(
			'className' => 'Produto',
			'joinTable' => 'produtos_has_veiculos',
			'foreignKey' => 'veiculos_id_veiculo',
			'associationForeignKey' => 'produtos_id_produto'
		)
	);

}
?>
