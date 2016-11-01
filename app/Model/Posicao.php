<?php
class Posicao extends AppModel{
	//nome classe
	var $name = 'Posicao';
	//campo chave primaria
	var $primaryKey = 'id';
	//tabela BD
	var $useTable = 'posicaos';
	public $validate = array(
		'id' => array(
			'rule' => 'notEmpty'
		),

		'posicao' => array(
			'rule' => 'notEmpty'
		),
	);	

	}
  
?>
