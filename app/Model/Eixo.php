<?php
class Eixo extends AppModel{
	//nome classe
	var $name = 'Eixo';
	//campo chave primaria
	var $primaryKey = 'id';
	//tabela BD
	var $useTable = 'eixos';
	public $validate = array(
		'id' => array(
			'rule' => 'notEmpty'
		),

		'eixo' => array(
			'rule' => 'notEmpty'
		),
	);	

	}
  
?>
