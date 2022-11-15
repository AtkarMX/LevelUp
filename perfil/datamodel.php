<?php
    require_once "../bd/conexion.php";

    function getIdTicked($CorreoUsuario){
        $cn = conexion();
        $sqlSelect = "SELECT IdTicked FROM ticked WHERE CorreoUsuario='$CorreoUsuario'";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }

    function getIdJuego($IdTicked){
        $cn = conexion();
        $sqlSelect = "SELECT IdJuego FROM venta WHERE IdTicked='$IdTicked'";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }

    function obtenerDatos($IdJuego){
        $cn = conexion();
        $sqlSelect = "SELECT NombreJuego, UrlImagen FROM juego WHERE IdJuego='$IdJuego'";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }

    function actualizarUsuario($NombreUsuario, $ApellidoUsuario, $NumeroUsuario, $CorreoUsuario){
        $cn = conexion();
        $sqlUpdate = "UPDATE usuario SET NombreUsuario = '$NombreUsuario', ApellidoUsuario = '$ApellidoUsuario',
            NumeroUsuario = '$NumeroUsuario' WHERE CorreoUsuario = '$CorreoUsuario'";
        $cn->query($sqlUpdate);
        return ;
    }
?>