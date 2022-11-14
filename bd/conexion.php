<?php
    function conexion(){
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbData = "levelup";
        $cn = new mysqli($dbHost, $dbUser, $dbPass, $dbData);

        if($cn -> connect_errno){
            die("Error en la base de datos");
        } else {
            return $cn;
        }
    }
?>