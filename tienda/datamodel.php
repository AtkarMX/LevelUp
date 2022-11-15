<?php
    require_once "../bd/conexion.php";

    function verJuegos(){
        $cn = conexion();
        $sqlSelect = "SELECT IdJuego, NombreJuego, PrecioJuego, UrlImagen FROM juego WHERE activado='1'";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }

    function obtenerId(){
        $cn = conexion();
        $sqlSelect = "SELECT IdJuego FROM juego";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }
?>