<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Transmissão');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
        <thead>
            <tr>
                <th>Tipo de Transmissão</th>
                <th>Ação</th>
                </tr>
        </thead>

        <tbody>

            <?php foreach ($transmissaos as $transmissao): ?>
                <tr>
                    
                    <td><?php echo $this->Html->link($transmissao['Transmissao']['tipo'], array('controller' => 'transmissaos', 'action' => 'visualizar', $transmissao
                    ['Transmissao']['id'])); ?> </td>

                                                
                    <td><?php echo $this->Form->postLink(
                                    'Delete',
                                    array('action' => 'delete', $transmissao['Transmissao']['id']),
                                    array('confirm' => 'Are you sure?')); ?>

                                <?php echo $this->Html->link('Edit', array('action' => 'edit', $transmissao['Transmissao']['id'])); ?>
                            </td>

                    
                    
                </tr>
            <?php endforeach ?> 
            <?php unset($post); ?>
        </tbody>

    </table>
</div>
<?php
$this->end();
?>