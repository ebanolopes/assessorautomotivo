<div class="container outsidemain">
    <div class="row">
        <div class="col-md-12"><h2>Cadastrar <strong>Combustível</strong></h2></div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <?php echo $this->Form->create('Direcao',array('role' => 'form','class' => 'form-horizontal form-bordered')); ?>
                <div class="form-body col-md-12">

                    <?php 
                        $optionsField = array(
                            'label' => array(
                                'class' => 'sr-only'
                            ),
                            'before'  => '<div class="form-group">',
                            'between' => '<div class="col-md-12">',
                            'after'   => '</div></div>',
                            'class'   => 'form-control',
                            'div'     => 'col-md-6 col-md-offset-3'
                        ); 

                    $optionsField['label']['text'] = 'Direção';
                    $optionsField['placeholder'] = 'Tipo de direção';
                    echo $this->Form->input('tipo',array_merge(array('type' => 'text'),$optionsField));
                    echo $this->Form->input('id', array('type' => 'hidden'));
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