<?php require ('views/header.php') ?>
    <h1>Figuras Fiscales</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Figuras Fiscales</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($figura_fiscal as $figuras_fiscales):?>
            <tr>
                <th scope="row"><?php echo $figuras_fiscales['id_figura_fiscal']; ?></th>
                <td><?php echo $figuras_fiscales['figura_fiscal']; ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<?php require ('views/footer.php') ?>