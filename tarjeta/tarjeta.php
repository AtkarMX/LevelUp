<?php
    session_start();
    if(!isset($_SESSION['logueado'])){
        header("Location: ../login/login.php");
    } else{
        if($_SESSION['logueado'] == false){
            header("Location: ../login/login.php");
        }
        if($_SESSION['UserEmail'] == "administrador@games.com"){
            header("Location: ../administrador/administrador.php");
        }
    }
    
    require_once "validardatos.php";
    require_once "datamodel.php";
    require_once "../header.php";
    $CorreoUsuario = $_SESSION['UserEmail'];
    $NombreJuego = $_SESSION['NombreJuego'];
    $PrecioJuego = $_SESSION['PrecioJuego'];
    $UrlImagen = $_SESSION['UrlImagen'];

    if(isset($_POST['Comprar'])){
        $NumeroTarjeta = $_POST['NumeroTarjeta'];
        $FechaTarjeta = $_POST['FechaTarjeta'];
        $cvvTarjeta = $_POST['cvvTarjeta'];
        if(
            validarTarjeta($NumeroTarjeta) == 1 and
            validarFecha($FechaTarjeta) == 1 and
            validarCvv($cvvTarjeta) == 1
        ){
            date_default_timezone_set('America/Mexico_City');
            $fecha = date('Y-m-d');
            guardarTicked($fecha, $CorreoUsuario);
            $ResultSet = miIdTicked($fecha, $CorreoUsuario);
            $Row = $ResultSet->fetch_assoc();
            $IdTicked = $Row['IdTicked'];
            $IdJuego = $_SESSION['JuegoId'];
            guardarVenta($PrecioJuego, $IdTicked,$IdJuego);
            header("Location:resumen.php");
        } else{
            $ErrMensaje = "Hay una inconsistencia de datos";
        }
    }

    require_once "tarjetaforma.php";
    require_once "../footer.php";
?>