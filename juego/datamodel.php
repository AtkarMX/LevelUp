<?php
    require_once "../bd/conexion.php";

    function verJuego($IdJuego){
        $cn = conexion();
        $sqlSelect = "SELECT NombreJuego, PrecioJuego, GeneroJuego, DesarrolladoraJuego,
        PlataformaJuego, LanzamientoJuego, UrlImagen, DescripcionJuego FROM juego WHERE IdJuego = '$IdJuego'";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }

    function yaComprado($IdJuego, $CorreoUsuario){
        $cn = conexion();
        $sqlSelect = "SELECT IdTicked FROM ticked WHERE CorreoUsuario='$CorreoUsuario'";
        $ResultSet = $cn->query($sqlSelect);
        $var = false;
        while($Row = $ResultSet->fetch_assoc()){
            $IdTicked = $Row['IdTicked'];
            $otroSelect = "SELECT NumeroVenta FROM venta WHERE IdTicked='$IdTicked' AND IdJuego='$IdJuego'";
            $otroSet = $cn->query($otroSelect);
            if($otroSet->num_rows > 0){
                $var = true;
                break;
            }
        }
        return $var;
    }
?>