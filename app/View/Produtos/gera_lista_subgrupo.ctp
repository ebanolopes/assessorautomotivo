<?php
if ($pagina == null){
    $optionsField = array(
        'label' => array(
            'class' => 'sr-only'
        ),
        'div'   => array(
            'class' => 'col-md-3'
        ),
        'before'  => '<div class="form-group">',
        'between' => '<div class="col-md-12">',
        'after'   => '</div></div>',
        'class'   => 'form-control'                
    );                  
    $optionsField['label']['text'] = 'Subgrupo';
    $optionsField['placeholder'] = 'Subgrupo';
    if (sizeof($subgrupo) > 0){
        echo $this->Form->input('Produto.id_subgrupo',array_merge(array('options' => $subgrupo),$optionsField));
    }else{
        echo $this->Form->input('Produto.id_subgrupo',array_merge(array('options' => array(null => 'Selecione um grupo')),$optionsField));
    }
}else{
    echo $this->Form->input('Produto.id_subgrupo',
        array(
            'options' => $subgrupo,
            'label' => array('text' => 'Descrição','class' => 'sr-only'),
            'id' => 'selectSubGrupo',
            'div'   => array(
                'class' => 'form-group col-md-3'
            ),
            'class' => 'form-control',
            'empty' => 'Descrição'
        )
    );
}
?>