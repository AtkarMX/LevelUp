<?php
    require_once "datamodel.php";
    $codigo = "";
    $var = "1";
    $CorreoUsuario = $_SESSION['UserEmail'];
    $ResultSet = getIdTicked($CorreoUsuario);
    if($ResultSet->num_rows > 0){
        while($Row = $ResultSet->fetch_assoc()){
            $IdTicked = $Row['IdTicked'];
            $ResultSet2 = getIdJuego($IdTicked);
            $Row2 = $ResultSet2->fetch_assoc();
            $IdJuego = $Row2['IdJuego'];
            $ResultSet3 = obtenerDatos($IdJuego);
            $Row3 = $ResultSet3->fetch_assoc();
            if($var == "1"){
                $codigo .= "<div class='row'>";
                $codigo .= "<div class='col-lg-4 col-md-12 mb-4'>
                                <div class='bg-image hover-zoom ripple shadow-1-strong rounded'>
                                    <img src='" .$Row3['UrlImagen']. "' style='width: 15rem; height: 20rem'
                                    class='w-100' />
                                    <h4>" .$Row3['NombreJuego']. "</h4>
                                    <a href='../archivo/MiJuego.pdf' download='" .$Row3['NombreJuego']. ".pdf' class='btn btn-outline-warning fw-bold'>
                                    Descargar juego</a>
                                </div>
                            </div>";
                $var = $var + "1";
            }
            else if($var == "2"){
                $codigo .= "<div class='col-lg-4 col-md-12 mb-4'>
                                <div class='bg-image hover-zoom ripple shadow-1-strong rounded'>
                                    <img src='" .$Row3['UrlImagen']. "' style='width: 15rem; height: 20rem'
                                    class='w-100' />
                                    <h4>" .$Row3['NombreJuego']. "</h4>
                                    <a href='../archivo/MiJuego.pdf' download='" .$Row3['NombreJuego']. ".pdf' class='btn btn-outline-warning fw-bold'>
                                    Descargar juego</a>
                                </div>
                            </div>";
                $var = $var + "1";
            }
            else if($var == "3"){
                $codigo .= "<div class='col-lg-4 col-md-12 mb-4'>
                                <div class='bg-image hover-zoom ripple shadow-1-strong rounded'>
                                    <img src='" .$Row3['UrlImagen']. "' style='width: 15rem; height: 20rem'
                                    class='w-100' />
                                    <h4>" .$Row3['NombreJuego']. "</h4>
                                    <a href='../archivo/MiJuego.pdf' download='" .$Row3['NombreJuego']. ".pdf' class='btn btn-outline-warning fw-bold'>
                                    Descargar juego</a>
                                </div>
                            </div>";
                $codigo .= "</div>";
                $var = "1";
            }
        }
    }else{
        $codigo = "<h4 class='text-secondary'>No hay juego comprados</h4>";
    }
?>