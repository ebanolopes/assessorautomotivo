<?php
class Montadora extends AppModel{
	public $validate = array(
		'id' => array(
			'rule' => 'notEmpty'
		),

		'montadora' => array(
			'rule' => 'notEmpty',
			'unique' => array(
				'rule' => 'isUnique'
			)
		),

		'status' => array(
			'rule' => 'notEmpty')
		
   );
}
  
?>
