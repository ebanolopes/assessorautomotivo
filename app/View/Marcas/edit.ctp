<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Marcas</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Cadastrar Marca</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('Marca',array('role' => 'form','class' => 'form-horizontal form-bordered')); ?>
                <div class="form-body">

                    <?php 
                    $optionsField = array(
                    'label' => array(
                        'class' => 'col-md-3 control-label'
                    ),
                    'div'   => array(
                        'class' => 'form-group'
                    ),
                    'between' => '<div class="col-md-4">',
                    'after'   => '</div>',
                    'class'   => 'form-control',
                    
                    );  
                    ?>

                    <?php
                    echo $this->Form->input('id', array('type' => 'hidden'));
                    $optionsField['label']['text'] = 'Marca';
                    echo $this->Form->input('marca',$optionsField);

                    $optionsField['label']['text'] = 'Empresa';
                    echo $this->Form->input('empresas_id_empr',array_merge(array('options' => $empresas),$optionsField));

                    ?>

                </div>
            <?php   
            $options = array(
                'label' => 'Salvar',
                'class' => 'btn blue',
                'div' => array(
                    'class' => 'form-actions right'
                ));
            ?>
            <?php echo $this->Form->end($options); ?>
        </div>
    </div>
</div>