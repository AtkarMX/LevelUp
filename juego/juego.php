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

    require_once "datamodel.php";
    $IdJuego = $_SESSION['JuegoId'];
    $CorreoUsuario = $_SESSION['UserEmail'];
    $ResultSet = verJuego($IdJuego);
    $Row = $ResultSet->fetch_assoc();

    $NombreJuego = $Row['NombreJuego'];
    $PrecioJuego = $Row['PrecioJuego'];
    $GeneroJuego = $Row['GeneroJuego'];
    $DesarrolladoraJuego = $Row['DesarrolladoraJuego'];
    $PlataformaJuego = $Row['PlataformaJuego'];
    $LanzamientoJuego = $Row['LanzamientoJuego'];
    $UrlImagen = $Row['UrlImagen'];
    $DescripcionJuego = $Row['DescripcionJuego'];

    $var = yaComprado($IdJuego,$CorreoUsuario);
    $EstaComprado = "¡Comprar!";
    if($var == true){
        $EstaComprado = "En propiedad";
    }

    if(isset($_POST['Comprar'])){
        $_SESSION['NombreJuego'] = $NombreJuego;
        $_SESSION['PrecioJuego'] = $PrecioJuego;
        $_SESSION['UrlImagen'] = $UrlImagen;
        header("Location:../tarjeta/tarjeta.php");
    }

    require_once "../header.php";
    require_once "juegoFront.html";
    require_once "../header.php";
?>