<?php require ('views/header.php') ?>
    <h1>Citas</h1>
    <?php if(isset($mensaje)):$app->alerta($tipo,$mensaje); endif; ?>
    <a href="cita.php?accion=crear" class="btn btn-success">Nuevo</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha Solicitud</th>
                <th scope="col">Observaciones</th>
                <th scope="col">Empresa</th>
                <th scope="col">Opciones</th>
                
            </tr>
        </thead>
        <tbody>
        <?php foreach($citas as $cita):?>
            <tr>
                <th scope="row"><?php echo $cita['id_cita']; ?></th>
                <td><?php echo $cita['fecha_solicitud']; ?></td>
                <td><?php echo $cita['observaciones']; ?></td>
                <td><?php echo $cita['empresa']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <a href="cita.php?accion=actualizar&id=<?php echo $cita['id_cita']; ?>" class="btn btn-warning">Actualizar</a>
                        <a href="cita.php?accion=eliminar&id=<?php echo $cita['id_cita']; ?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<?php require ('views/footer.php') ?>