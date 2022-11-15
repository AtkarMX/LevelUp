<?php
    require_once "../bd/conexion.php";

    function guardarTicked($FechaTicked, $CorreoUsuario){
        $cn = conexion();
            $sqlInsertar = "INSERT INTO ticked (FechaTicked, CorreoUsuario) VALUES('$FechaTicked', '$CorreoUsuario')";
            $cn->query($sqlInsertar);
    }

    function guardarVenta($TotalVenta, $IdTicked, $IdJuego){
        $cn = conexion();
            $sqlInsertar = "INSERT INTO venta (TotalVenta, IdTicked, IdJuego) VALUES('$TotalVenta', '$IdTicked', '$IdJuego')";
            $cn->query($sqlInsertar);
    }

    function miIdTicked($FechaTicked, $CorreoUsuario){
        $cn = conexion();
        $sqlSelect = "SELECT IdTicked FROM ticked WHERE FechaTicked='$FechaTicked' AND CorreoUsuario='$CorreoUsuario'";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }
?>