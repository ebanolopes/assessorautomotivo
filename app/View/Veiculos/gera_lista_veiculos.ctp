<option value>Selecione o veículo</option>
<?php foreach($veiculos as $id => $v): ?>
	<option value="<?php echo $id; ?>"><?php echo $v; ?></option>
<?php endforeach; ?>