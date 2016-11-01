<?php
class Potenciamotor extends AppModel{

	public $actAs = array('Containable');

	public $validate = array(
		'id' => array(
			'rule' => 'notEmpty'
		),

		'potencia' => array(
			'rule' => 'notEmpty'
		),
		
   );

}
  
?>
