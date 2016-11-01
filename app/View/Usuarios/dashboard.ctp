<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Olá <?php echo $usuario['Usuario']['nome']; ?></h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                    O que você deseja fazer?
                    <br />
                    <?php echo $this->Html->link('Cadastrar produto',array('controller' => 'produtos','action' => 'add')); ?> - <?php echo $this->Html->link('Cadastrar Nomenclatura', array('controller' => 'nomenclaturas', 'action' => 'add')); ?>
                </div>
            </section>
        </div>
    </div>
</div>
<?php
//pr($usuario);
//echo $this->Html->div('col-md-12',
//        $this->Html->tag('h2',$usuario['Usuario']['nome'])
//    );
?>
