<?php
class Categoria extends AppModel{
	public $validate = array(
		'Categoria' => array(
			'rule' => 'notEmpty'
		)
 		
   );

	/*nome da classe*/
	var $name = 'Categoria';
	var $primaryKey = 'id'; 
	var $useTable = 'categorias';

	/*relação q tem muitos*/
	public $hasAndBelongsToMany = array(
	'Produtos' => array(
		'className' => 'Produto',
		'joinTable' => 'produtos_categorias',
		'foreignKey' => 'id_categoria',
		'associationForeignKey' => 'id_produto'
	));
}
  
?>
