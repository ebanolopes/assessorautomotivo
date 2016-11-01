<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código de Fabricante</th>
                <th>Código Original</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?php echo substr($p['Produto']['cod_fabricante'], 0, 10); ?></td>
                    <td><?php echo substr($p['Produto']['cod_original'], 0, 10); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
