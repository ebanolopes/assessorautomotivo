<?php
class Sessao extends AppModel{
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty'
        )
        
   );

    public $hasMany = array(
        'Grupos' => array(
            'className' => 'Grupo',
            'foreignKey' => 'id_sessao'
        )
    );
}
  
?>
