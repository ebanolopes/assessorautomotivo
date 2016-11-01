<h1>Add Niveis</h1>

<?php echo $this->Form->create('Nivel',array('role' => 'form')); ?>

<div class='row'>
<div class='form-group col-xs-3'>
<?php 

echo $this->Form->input('nivel',array('id' => 'nivel '));

?>

<?php echo $this->Form->end('Salvar Nivel'); ?>


