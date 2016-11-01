<?php
class Nivel extends AppModel{
	//nome classe
	var $name = 'Nivel';
	//campo chave primaria
	var $primaryKey = 'id';
	//tabela BD
	var $useTable = 'niveis';
	public $validate = array(
		'id' => array(
			'rule' => 'notEmpty'
		),

		'nivel' => array(
			'rule' => 'notEmpty'
		),
	);	

	}
  
?>
