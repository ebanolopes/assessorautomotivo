<?php
class Grupo extends AppModel{
	public $validate = array(
		'grupo' => array(
			'rule' => 'notEmpty'
		),

		'status' => array(
			'rule' => 'notEmpty'
		),


 		
   );

	/*nome da classe*/
	var $name = 'Grupo';
	var $primaryKey = 'id'; 
	var $useTable = 'grupos';

	/*relação q tem muitos*/
	public $hasMany = array(
		'Subgrupos' => array(
			'className' => 'Grupo',
			'foreignKey' => 'grupos_id_grupo'
		)
	);
	/*Grupo pertence ao Pai*/
	public $belongsTo = array(
		'Pai' =>  array(
			'className' => 'Grupo',
			'foreignKey' => 'grupos_id_grupo'
		),
		'Sessao' => array(
			'className' => 'Sessao',
			'foreignKey' => 'id_sessao'
		)
	);

}
  
?>
