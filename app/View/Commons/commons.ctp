<?php
$addAction = $this->fetch('add_action');
if (empty($addAction)){
    $addAction = 'add';
}
?>
<div class="container outsidemain">
    <div class="row">
        <div class="col-md-12"><h2><strong><?php echo $this->fetch('title'); ?></strong> cadastrados</h2><?php echo $this->Html->Link("Adicionar", array('action' => $addAction),array('class' => 'btn btn-primary mr-xs mb-sm'));?></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->fetch('page-content'); ?>
        </div>
    </div>
</div>