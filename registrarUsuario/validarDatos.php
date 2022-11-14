<?php
    function validarNombre($NombreUsuario = ""){
        if(empty($NombreUsuario)){
            return 0;
        }
        $expresion = "/^[A-ZÁÉÍÓÚÑ a-záéíóúñ]{2,30}$/";
        if(preg_match($expresion,$NombreUsuario)){
            return 1;
        }
        else{
            return 0;
        }
    }

    function validarApellido($ApellidoUsuario = ""){
        if(empty($ApellidoUsuario)){
            return 0;
        }
        $expresion = "/^[A-ZÁÉÍÓÚÑ a-záéíóúñ]{2,30}$/";
        if(preg_match($expresion,$ApellidoUsuario)){
            return 1;
        }
        else{
            return 0;
        }
    }

    function validarCorreo($CorreoUsuario = ""){
        $CorreoUsuario = filter_var($CorreoUsuario, FILTER_SANITIZE_EMAIL);
        if(filter_var($CorreoUsuario, FILTER_VALIDATE_EMAIL)){
            return 1;
        } else{
            return 0;
        }
    }

    function validarCelular($NumeroUsuario = ""){
        if(empty($NumeroUsuario)){
            return 0;
        }
        $expresion = "/^[0-9]{10}$/";
        if(preg_match($expresion,$NumeroUsuario)){
            return 1;
        } else{
            return 0;
        }
    }

    function validarContraseña($ContraseñaUsuario = ""){
        if(empty($ContraseñaUsuario)){
            return 0;
        }else{
            return 1;
        }
    }
?>