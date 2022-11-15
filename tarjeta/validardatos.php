<?php
    function validarTarjeta($TarjetaUsuario = ""){
        if(empty($TarjetaUsuario)){
            return 0;
        }
        $expresion = "/^[0-9]{16}$/";
        if(preg_match($expresion, $TarjetaUsuario)){
            return 1;
        } 
        else{
            return 0;
        }
    }

    function validarFecha($FechaTarjeta = ""){
        if(empty($FechaTarjeta)){
            return 0;
        }
        $expresion = "/^([0][1-9]|[1][0-2])[\/][2-9][3-9]$/";
        if(preg_match($expresion, $FechaTarjeta)){
            return 1;
        }
        else{
            return 0;
        }
    }

    function validarCvv($cvvUsuario = ""){
        if(empty($cvvUsuario)){
            return 0;
        }
        $expresion = "/^[0-9]{3}$/";
        if(preg_match($expresion, $cvvUsuario)){
            return 1;
        } 
        else{
            return 0;
        }
    }
?>