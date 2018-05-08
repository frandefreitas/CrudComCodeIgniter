<table class="table table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>Página</th>
        <th class="text-right">Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($doadores as $doador) : ?>
    <tr>
        <td><?php echo $doador->id ;?></td>
        <td><?php echo $doador->nome ;?></td>
        <td class="text-right">
            <a href="../doadores/view/<?php echo $doador->id; ?>" class="btn btn-xs btn-default">ver</a>
            <a href="../doadores/edit/<?php echo $doador->id; ?>" class="btn btn-xs btn-info">editar</a>
            <form action="../doadores/delete/<?php echo $doador->id; ?>" style="display: inline-block" METHOD="post">
                <input type="submit" value="remover" class="btn btn-xs btn-danger">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>