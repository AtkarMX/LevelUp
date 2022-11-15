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
    $ResultSet = obtenerId();
    while($Row = $ResultSet->fetch_assoc()){
        $var = $Row['IdJuego'];
        if(isset($_POST[$var])){
            $_SESSION['JuegoId'] = $var;
            header("Location: ../juego/juego.php");
            break;
        }
    }

    require_once "../header.php";
    require_once "juegos.php";
    require_once "tiendaFront.html";
    require_once "../footer.php";
?>