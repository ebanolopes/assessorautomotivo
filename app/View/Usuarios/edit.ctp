<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Usuário</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Cadastrar Usuário</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">
            <?php echo $this->Form->create('Usuario',array('role' => 'form','class' => 'form-horizontal form-bordered')); ?>
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
                    $optionsField['label']['text'] = 'Nome';
                    echo $this->Form->input('nome',$optionsField);
                    $optionsField['label']['text'] = 'Usuário';
                    echo $this->Form->input('usuario',$optionsField);
                    $optionsField['label']['text'] = 'Senha';
                    echo $this->Form->input('senha',array_merge($optionsField,array('type' => 'password')));
                    $optionsField['label']['text'] = 'E-mail';
                    echo $this->Form->input('email',array_merge($optionsField,array('type'=> 'email')));
                    $optionsField['label']['text'] = 'Status';
                    echo $this->Form->input('status',$optionsField);
                    $optionsField['label']['text'] = 'Id da empresa';
                    echo $this->Form->input('empresas_id_empr', array_merge($optionsField,array('options' => $empresas)));
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