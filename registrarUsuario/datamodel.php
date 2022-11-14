<?php
    require_once "../bd/conexion.php";

    function insertarUsuario($NombreUsuario, $ApellidoUsuario, $CorreoUsuario, $NumeroUsuario, $ContraseñaUsuario){
        $cn = conexion();
        $sqlInsertar = "INSERT INTO usuario (NombreUsuario, ApellidoUsuario, CorreoUsuario, NumeroUsuario, ContraseñaUsuario) VALUES('$NombreUsuario', '$ApellidoUsuario', '$CorreoUsuario', '$NumeroUsuario', '$ContraseñaUsuario')";
        $cn->query($sqlInsertar);
    }

    function buscarCorreo($CorreoUsuario){
        $cn = conexion();
        $sqlSelect = "SELECT NombreUsuario FROM usuario WHERE CorreoUsuario = '$CorreoUsuario'";
        $ResulSet = $cn->query($sqlSelect);
        return $ResulSet;
    }
?>