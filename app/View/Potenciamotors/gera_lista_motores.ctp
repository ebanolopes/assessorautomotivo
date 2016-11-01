
<?php
echo $this->Form->input('potencias',array(
	'type' => 'select',
	'multiple' => 'checkbox',
	'options' => $potenciasmotores,
	'label' => ''
));
?>