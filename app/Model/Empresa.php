<?php
class Empresa extends AppModel{
	public $validate = array(
		'cnpj' => array(
			'rule' => 'notEmpty'
		),

		'inscr' => array(
			'rule' => 'notEmpty'
		),

		'razao_social' => array(
			'rule' => 'notEmpty'
		),

 		'nome_fantasia' => array(
			'rule' => 'notEmpty'
		),

		'endereco' => array(
			'rule' => 'notEmpty'
		),

		'numero' => array(
			'rule' => 'notEmpty'
		),

		'bairro' => array(
			'rule' => 'notEmpty'
		),

 		'cep' => array(
			'rule' => 'notEmpty'
		),

   		'cidade' => array(
			'rule' => 'notEmpty'
		),

		'estado' => array(
			'rule' => 'notEmpty'
		),

		'email' => array(
			'rule' => 'notEmpty'
		),

		'site' => array(
			'rule' => 'notEmpty'
		),

		'contato' => array(
			'rule' => 'notEmpty'
		),

		'logomarca' => array(
			'rule' => 'notEmpty'
		),

		'status' => array(
			'rule' => 'notEmpty'
		),

   		'data_cadastro' => array(
			'rule' => 'notEmpty'
		),

   );

	var $name = 'Empresa';
	var $primaryKey = 'id'; 
	var $useTable = 'empresas';

	public $hasMany = array(
		'Telefones' => array(
			'className' => 'Telefone',
			'foreignKey' => 'empresas_id_empr'
			),
		 'Usuarios' => array(
		 	'className' => 'Usuario',
			'foreignKey' => 'empresas_id_empr'
			),
		 'Marcas' => array(
		 	'className' => 'Marca',
		 	'foreignKey' => 'empresas_id_empr'
		 	)
		);
}
  
?>
