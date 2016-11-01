<?php
$this->extend('/Commons/commons');
$this->assign('title', 'Sessão');
$this->start('page-content');
?>
<div class="table-responsive">
    <table class="table table-striped table-condensed mb-none">
        <thead>
            <tr>
                <th>Sessão</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sessaos as $sessao): ?>
                <tr>
                    <td><?php echo $this->Html->link($sessao['Sessao']['nome'], array('controller' => 'sessaos', 'action' => 'visualizar', $sessao['Sessao']['id'])); ?> </td>
                    <td>
                        <?php echo $this->Form->postLink(
                            'Delete',
                            array('action' => 'delete', $sessao['Sessao']['id']),
                            array('confirm' => 'Tem certeza da exclusão?')); ?>
                        <?php echo $this->Html->link('Edit', array('action' => 'edit', $sessao['Sessao']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</div>
<?php
$this->end();
?>
