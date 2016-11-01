<h1>Editar Nivel</h1>
<?php 
echo $this->Form->create('Nivel');
echo $this->Form->input('nivel');
echo $this->Form->input('id', array('type' => 'hidden'));
/*echo $this->Form->input('empresas_id_empr', array('options' => $empresas));*/
echo $this->Form->end('Salvar Nivel');
?>
