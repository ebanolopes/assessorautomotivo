<?php
class Marca extends AppModel{
	var $name = 'Marca';
	var $primaryKey = 'id';
	var $useTable = 'marcas';

	public $validate = array(
		'marca' => array(
			'rule' => 'notEmpty'
		),
		'empresas_id_empr' => array(
			'rule' => 'notEmpty'
		),

	);

	public $belongsTo = array(
		'Empresa' =>  array(
			'className' => 'Empresa',
			'foreignKey' => 'empresas_id_empr')
	);

	public $hasMany = array(
		'Produtos' => array(
			'className' => 'Produto',
			'foreignKey'=> 'marcas_id'
		)
	);
}
  
?>
