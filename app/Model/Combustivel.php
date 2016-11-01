<?php
class Combustivel extends AppModel{
	//nome classe
	var $name = 'Combustivel';
	//campo chave primaria
	var $primaryKey = 'id';
	//tabela BD
	var $useTable = 'combustiveis';
	public $validate = array(
		'id' => array(
			'rule' => 'notEmpty'
		),

		'tipo' => array(
			'rule' => 'notEmpty'
		),
	);	

	}
  
?>
