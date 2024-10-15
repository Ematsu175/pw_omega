<?php 
    require_once('../sistema.class.php');
    $app = new Sistema;
    $roles = $app->getRol('raul@gmail.com');
    print_r($roles);
    $privilegios = $app->getPrivilegios('raul@gmail.com');
    print_r($privilegios);
    
?>