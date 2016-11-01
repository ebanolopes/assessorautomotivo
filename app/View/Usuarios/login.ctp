<?php echo $this->Session->flash('auth');
$optionsField = array(
'div'   => array(
    'class' => 'form-group'
),
'before' => '<div class="col-md-12">',
'after'   => '</div>',
'class'   => 'form-control input-lg',

);  
?>



<div class="container outsidemain">

    <div class="row">
        <div class="col-md-12">

            <div class="row featured-boxes login">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="featured-box featured-box-secundary default info-content">
                        <div class="box-content">
                            <h4>Faça seu login</h4>
                            <?php echo $this->Form->create('Usuario',array('role' => 'form','inputDefaults' => $optionsField));?>                            
                                <div class="row">
                                    <?php echo $this->Form->input('usuario',array('label' => 'Usuário')); ?>
                                </div>
                                <div class="row">
                                    <?php echo $this->Form->input('senha',array('label' => 'Senha','type' => 'password')); ?>                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-6 col-md-6">
                                        <input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                    </div>
                                </div>
                            <?php echo $this->Form->end();?> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
