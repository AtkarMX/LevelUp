<?php
    session_start();
    if(isset($_SESSION['logueado'])){
        if($_SESSION==true){
            if($_SESSION['UserEmail'] == "administrador@games.com"){
                header("Location: ../administrador/administrador.php");
            }else{
                header("Location: ../tienda/tienda.php");
            }
        }
    }
    
    require_once "../bd/conexion.php";
    require_once "../header.php";

    if(isset($_POST['login'])){
        $CorreoUsuario = $_POST['CorreoUsuario'];
        $ContraseñaUsuario = $_POST['ContraseñaUsuario'];
        $sqlSelect = "SELECT NombreUsuario, ApellidoUsuario, CorreoUsuario, NumeroUsuario
        FROM usuario WHERE CorreoUsuario = '$CorreoUsuario' AND ContraseñaUsuario = '$ContraseñaUsuario'";

        $cn = conexion();
        $ResultSet = $cn->query($sqlSelect);
        if($ResultSet->num_rows > 0){
            $Row = $ResultSet->fetch_assoc();
            $_SESSION['UserNombre'] = $Row['NombreUsuario'];
            $_SESSION['UserApellido'] = $Row['ApellidoUsuario'];
            $_SESSION['UserEmail'] = $Row['CorreoUsuario'];
            $_SESSION['UserNumero'] = $Row['NumeroUsuario'];
            $_SESSION['logueado'] = true;
            if($_SESSION['UserEmail'] == "administrador@games.com"){
                header("Location: ../administrador/administrador.php");
            }else{
                header("Location: ../tienda/tienda.php");
            }
        } else{
            $ErrMensaje = "Correo o contraseña incorrecta";
        }
    }

    require_once "loginFront.html";
    require_once "../footer.php";
?>