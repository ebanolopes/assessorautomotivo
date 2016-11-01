<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Transmissão</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Cadastrar Transmissão</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php echo $this->Form->create('Transmissao',array('role' => 'form','class' => 'form-horizontal form-bordered')); ?>
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

                $optionsField['label']['text'] = 'Transmissão';
                echo $this->Form->input('tipo',array_merge(array('type' => 'text'),$optionsField));

                
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