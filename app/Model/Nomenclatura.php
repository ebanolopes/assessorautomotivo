<?php
class Nomenclatura extends AppModel{
	public $validate = array(
		'codigo' => array(
			'rule' => 'notEmpty'
		),


 		
   );

	/*nome da classe*/
	var $name = 'Nomenclatura';
	var $primaryKey = 'id'; 
	var $useTable = 'nomenclaturas';

	/*relação q tem muitos*/

	public $hasMany = array(
		'Produtos' => array(
			'className' => 'Produto',
			'foreignKey' => 'nomenclaturas_id_nomenclatura'
			)
		);

}
  
?>
