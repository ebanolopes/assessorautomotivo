<div class="container outsidemain">
    <div class="row">
        <div class="col-md-12"><h2>Cadastrar <strong>Empresa</strong></h2></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('Empresa',array('role' => 'form','type' => 'file','class' => 'form-horizontal form-bordered')); ?>
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

                    echo $this->Form->input('id', array('type' => 'hidden'));

                    $optionsField['label']['text'] = 'CNPJ';
                    $optionsField['placeholder'] = 'CNPJ';
                    echo $this->Form->input('cnpj',array_merge(array('id' => 'cnpj','rel'=>'cnpj'),$optionsField));
                    $optionsField['label']['text'] = 'Inscrição Estadual';
                    $optionsField['placeholder'] = 'Inscrição Estadual';
                    echo $this->Form->input('inscr',$optionsField);
                    $optionsField['label']['text'] = 'Razão Social';
                    $optionsField['placeholder'] = 'Razão Social';
                    echo $this->Form->input('razao_social',$optionsField);
                    ?>

                    <?php
                    $optionsField['label']['text'] = 'Rua';
                    $optionsField['placeholder'] = 'Rua';
                    echo $this->Form->input('endereco',$optionsField);
                    $optionsField['label']['text'] = 'Número';
                    $optionsField['placeholder'] = 'Número';
                    echo $this->Form->input('numero',$optionsField);
                    $optionsField['label']['text'] = 'Complemento';
                    $optionsField['placeholder'] = 'Complemento';
                    echo $this->Form->input('complemento',$optionsField);
                    $optionsField['label']['text'] = 'Bairro';
                    $optionsField['placeholder'] = 'Bairro';
                    echo $this->Form->input('bairro',$optionsField);
                    $optionsField['label']['text'] = 'CEP';
                    $optionsField['placeholder'] = 'CEP';
                    echo $this->Form->input('cep',array_merge(array('id' => 'cep','rel' => 'cep'),$optionsField));
                    $optionsField['label']['text'] = 'Cidade';
                    $optionsField['placeholder'] = 'Cidade';
                    echo $this->Form->input('cidade',$optionsField);
                    $optionsField['label']['text'] = 'Estado';
                    $optionsField['placeholder'] = 'Estado';
                    echo $this->Form->input('estado',$optionsField);
                    ?>

                    <?php
                    $optionsField['label']['text'] = 'E-mail';
                    $optionsField['placeholder'] = 'E-mail';
                    echo $this->Form->input('email',$optionsField);
                    $optionsField['label']['text'] = 'Site';
                    $optionsField['placeholder'] = 'Site';
                    echo $this->Form->input('site',$optionsField);
                    $optionsField['label']['text'] = 'Telefone';
                    $optionsField['placeholder'] = 'Telefone';
                    echo $this->Form->input('Telefones.0.fone',array_merge(array('rel' => 'telefone'),$optionsField));
                    $optionsField['label']['text'] = 'Contato';
                    $optionsField['placeholder'] = 'Contato';
                    echo $this->Form->input('contato',$optionsField);
                    //echo $this->Form->input('logomarca',array_merge(array('type' => 'file'),$optionsField));
                    $optionsField['label']['text'] = 'Status';
                    $optionsField['placeholder'] = 'Status';
                    echo $this->Form->input('status',array_merge(array('options' => array(1 => 'Ativo', 0 => 'Inativo')),$optionsField));
                    
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

<script type="text/javascript">
    jQuery('input[rel="cnpj"]').mask('##.###.###/####-##');
    jQuery('input[rel="telefone"]').mask('00-0000-00009');
    jQuery('input[rel="cep"]').mask('#####-###');    
</script>