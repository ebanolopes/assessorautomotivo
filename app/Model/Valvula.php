<?php
class Valvula extends AppModel{
	public $validate = array(
		'id' => array(
			'rule' => 'notEmpty'
		),

		'quantidade' => array(
			'rule' => 'notEmpty'
		),
		
   );
}
  
?>
