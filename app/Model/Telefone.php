<?php
class Telefone extends AppModel{
	var $name = 'Telefone';
	var $primaryKey = 'id';
	var $useTable = 'telefones';

	public $validate = array(
		'fone' => array(
			'rule' => 'notEmpty'
		),

	);	

	public $belongsTo = array(
		'Empresa' =>  array(
			'className' => 'Empresa',
			'foreignKey' => 'empresas_id_empr'
			)
		);
}
  
?>
