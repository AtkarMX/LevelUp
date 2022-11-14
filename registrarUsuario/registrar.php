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

    require_once "validarDatos.php";
    require_once "datamodel.php";
    require_once "../header.php";

    if(isset($_POST['Registrarme'])){
        $NombreUsuario = $_POST['NombreUsuario'];
        $ApellidoUsuario = $_POST['ApellidoUsuario'];
        $CorreoUsuario = $_POST['CorreoUsuario'];
        $NumeroUsuario = $_POST['NumeroUsuario'];
        $ContraseñaUsuario = $_POST['ContraseñaUsuario'];
        if(validarNombre($NombreUsuario) == 1 and
           validarApellido($ApellidoUsuario) == 1 and
           validarCorreo($CorreoUsuario) == 1 and
           validarCelular($NumeroUsuario) == 1 and
           validarContraseña($ContraseñaUsuario) == 1
        ){
            $ResulSet = buscarCorreo($CorreoUsuario);
            if($ResulSet->num_rows > 0){
                $ErrMensaje = "Este correo electronico ya existe";
            } else{
                insertarUsuario($NombreUsuario, $ApellidoUsuario, $CorreoUsuario, $NumeroUsuario, $ContraseñaUsuario);
                $Mensaje = "Te has registrado con exito";
            }
        } else {
            $ErrMensaje = "Hay inconsistencias de datos";
        } 
    } else{
        $NombreUsuario = "";
        $ApellidoUsuario = "";
        $CorreoUsuario = "";
        $NumeroUsuario = "";
        $ContraseñaUsuario = "";
    }

    require_once "registrarFront.html";
    require_once "../footer.php";
?>