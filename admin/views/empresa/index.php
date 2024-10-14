<?php require ('views/header.php') ?>
    <h1>Empresas</h1>
    <?php if(isset($mensaje)):$app->alerta($tipo,$mensaje); endif; ?>
    <a href="empresa.php?accion=crear" class="btn btn-success">Nuevo</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Empresa</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">rfc</th>
                <th scope="col">Figura Fiscal</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($empresas as $empresa):?>
            <tr>
                <th scope="row"><?php echo $empresa['id_empresa']; ?></th>
                <td><?php echo $empresa['empresa']; ?></td>
                <td><?php echo $empresa['telefono']; ?></td>
                <td><?php echo $empresa['email']; ?></td>
                <td><?php echo $empresa['rfc']; ?></td>
                <td><?php echo $empresa['figura_fiscal']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <a href="empresa.php?accion=actualizar&id=<?php echo $empresa['id_empresa']; ?>" class="btn btn-warning">Actualizar</a>
                        <a href="empresa.php?accion=eliminar&id=<?php echo $empresa['id_empresa']; ?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<?php require ('views/footer.php') ?>