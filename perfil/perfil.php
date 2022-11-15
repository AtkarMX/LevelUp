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
    
    $NombreUsuario = $_SESSION['UserNombre'];
    $ApellidoUsuario = $_SESSION['UserApellido'];
    $CorreoUsuario = $_SESSION['UserEmail'];
    $NumeroUsuario = $_SESSION['UserNumero'];

    require_once "datamodel.php";
    require_once "validardatos.php";
    if(isset($_POST['Guardar'])){
        $NombreUsuario = $_POST['NombreUsuario'];
        $ApellidoUsuario = $_POST['ApellidoUsuario'];
        $NumeroUsuario = $_POST['NumeroUsuario'];
        if(
            validarNombre($NombreUsuario) == 1 and
            validarApellido($ApellidoUsuario) == 1 and
            validarCelular($NumeroUsuario) == 1
        ){
            actualizarUsuario($NombreUsuario, $ApellidoUsuario, $NumeroUsuario, $CorreoUsuario);
            $_SESSION['UserNombre'] = $NombreUsuario;
            $_SESSION['UserApellido'] = $ApellidoUsuario;
            $_SESSION['UserNumero'] = $NumeroUsuario;
            $Mensaje = "Datos guardados con exito";
        }else{
            $ErrMensaje = "Hay una inconcistencia en tus datos";
        }
    }
    if(isset($_POST['Cancelar'])){
        header("Location:../tienda/tienda.php");
    }

    require_once "../header.php";
    require_once "imprimir.php";
    require_once "perfilforma.php";
    require_once "../footer.php";
?>