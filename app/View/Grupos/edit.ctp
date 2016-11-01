<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Subgrupo</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Cadastrar Subgrupo</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('Grupo',array('role' => 'form','class' => 'form-horizontal form-bordered')); ?>
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
                    
                    $optionsField['label']['text'] = 'Grupo';
                    echo $this->Form->input('grupos_id_grupo',array_merge(array('options' => $grupo),$optionsField));

                    $optionsField['label']['text'] = 'Sub Grupo';
                    echo $this->Form->input('grupo',$optionsField);
                    echo $this->Form->input('id', array('type' => 'hidden'));
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
