
<div class="container outsidemain">
    <div class="row">
        <div class="col-md-12"><h2>Cadastrar <strong>Modelo de motor</strong></h2></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('Modelomotor',array('id' => 'modeloMotorForm','role' => 'form','class' => 'form-horizontal')); ?>
                    <div class="form-body">
                        <?php 
                            $optionsField = array(
                            'label' => array(
                                'class' => 'sr-only'
                            ),
                            'before'  => '<div class="form-group">',
                            'between' => '<div class="col-md-12">',
                            'after'   => '</div></div>',
                            'class'   => 'form-control'                
                            );
                            $optionsField['label']['text'] = 'Modelo';
                            $optionsField['placeholder'] = 'Modelo de motor';
                            echo $this->Form->input('modelo',$optionsField); 
                        ?>
                    </div>
                    <?php
                    $options = array(
                        'label' => 'Salvar',
                        'class' => 'btn blue',
                        'div' => array(
                            'class' => 'form-actions text-right'
                        ));
                    ?>
            <?php echo $this->Form->end($options); ?>
        </div>
    </div>
</div>