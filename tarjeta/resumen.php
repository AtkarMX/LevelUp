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
    $NombreJuego = $_SESSION['NombreJuego'];
    $UrlImagen = $_SESSION['UrlImagen'];

    require_once "../header.php";
    require_once "resumenForma.php";
    require_once "../footer.php";
?>