<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Potência de Motor');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
        <thead>
            <tr>
                <th>Veículo</th>
                <th>Ação</th>
                </tr>
        </thead>

        <tbody>

            <?php foreach ($potenciamotors as $potencia): ?>
                <tr>
                    
                    <td><?php echo $this->Html->link($potencia['Potenciamotor']['potencia'], array('controller' => 'potenciamotors', 'action' => 'visualizar', 
                        $potencia
                    ['Potenciamotor']['id'])); ?> </td>

                                                
                    <td><?php echo $this->Form->postLink(
                                    'Delete',
                                    array('action' => 'delete', $potencia['Potenciamotor']['id']),
                                    array('confirm' => 'Are you sure?')); ?>

                                <?php echo $this->Html->link('Edit', array('action' => 'edit', $potencia['Potenciamotor']['id'])); ?>
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
