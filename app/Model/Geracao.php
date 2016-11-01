<?php
class Geracao extends AppModel{
	public $name = 'Geracao';
	public $primaryKey = 'id'; 
	public $useTable = 'geracaos';

	public $validate = array(
		'geracao' => array(
			'rule' => 'notEmpty'
		)
 		
   );
}
  
?>
