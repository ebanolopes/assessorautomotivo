<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Sessão</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Cadastrar Sessão</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
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

            echo $this->Form->create('Sessao',
                array(
                    'role' => 'form',
                    'class' => 'form-horizontal form-bordered',
                    'inputDefaults' => $optionsField
                )
            ); ?>
                <div class="form-body">
                    <?php echo $this->Form->input('nome',
                        array(
                            'label' => array(
                                'text' => 'Nome',
                                'class' => 'col-md-3 control-label'
                            )
                        )
                    ); ?>
                    <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
                </div>
                <?php $options = array(
                    'label' => 'Salvar',
                    'class' => 'btn blue',
                    'div' => array(
                        'class' => 'form-actions right'
                )); ?>
            <?php echo $this->Form->end($options); ?>
        </div>
    </div>
</div>