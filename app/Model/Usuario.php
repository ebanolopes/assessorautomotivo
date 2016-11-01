<?php

App::uses('SimplePasswordHasher','Controller/Component/Auth');

class Usuario extends AppModel{
	public $validate = array(
		'id' => array(
			'rule' => 'notEmpty'
		),

		'nome' => array(
			'rule' => 'notEmpty'
		),

		'usuario' => array(
			'rule' => 'notEmpty'
		),

 		'senha' => array(
			'rule' => 'notEmpty'
		),

		'email' => array(
			'rule' => 'notEmpty',
			'unique' => array(
				'rule' => 'isUnique'
			)
		),

		'status' => array(
			'rule' => 'notEmpty'
		),

		
   );

	var $name = 'Usuario';
	var $primaryKey = 'id'; 
	var $useTable = 'usuarios';

	public $belongsTo = array(
		'Empresa' =>  array(
			'className' => 'Empresa',
			'foreignKey' => 'empresas_id_empr'
			)
		);

	public function beforeSave($options=array()){
		if (isset($this->data[$this->alias]['senha'])){
			$ph = new SimplePasswordHasher();
			$this->data[$this->alias]['senha'] = $ph->hash($this->data[$this->alias]['senha']);
		}
		return true;
	}

}
  
?>
