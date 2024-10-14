<?php
    require_once('../sistema.class.php');

    class Figura_fiscal extends Sistema{

        function readAll(){
            $this->conexion();
            $result=[];
            $consulta='select * from figura_fiscal;';
            $sql = $this->con->prepare($consulta);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>