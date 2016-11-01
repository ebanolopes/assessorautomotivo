<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Grupos</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Cadastrar Grupo</h1>
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
            ?>
            <?php echo $this->Form->create('Grupo',
                array(
                    'role' => 'form',
                    'class' => 'form-horizontal form-bordered',
                    'inputDefaults' => $optionsField
                )
            ); ?>
                <div class="form-body">
                    <?php
                    echo $this->Form->input('id', array('type' => 'hidden'));
                    echo $this->Form->input('id_sessao',
                        array(
                            'label' => array(
                                'text' => 'Sessão',
                                'class' => 'col-md-3 control-label'
                            ),
                            'options' => $sessoes
                        )
                    );
                    echo $this->Form->input('grupo',
                        array(
                            'label' => array(
                                'text' => 'Grupo',
                                'class' => 'col-md-3 control-label'
                            )
                        )
                    );
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