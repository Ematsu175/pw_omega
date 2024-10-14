<?php
    require_once('figura_fiscal.class.php');
    $app = new Figura_fiscal;
    $accion = (isset($_GET['accion']))?$_GET['accion']:null;
    $id = (isset($_GET['id']))?$_GET['id']:null;

    switch($accion){
        case 'default':
            $figura_fiscal=$app->readAll();
            include('views/figura_fiscal/index.php');
    }
?>