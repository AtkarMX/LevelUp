<?php
    require_once "../bd/conexion.php";
    require_once "datamodel.php";
    $ResultSet = verJuegos();
    $var = "1";
    $codigo = "";
    if($ResultSet->num_rows > 0){
        while($Row = $ResultSet->fetch_assoc()){
            $var = $Row['PrecioJuego'];
            if($Row['PrecioJuego'] == "0.00"){
                $var = "Gratis";
            }else{
                $var .= " MXN";
            }
            $codigo .= "<form action='tienda.php' method='post'>
                                <div class='card text-white bg-dark mb-3' style='width: 18rem; height: 33rem'>
                                    <img src='" .$Row['UrlImagen']. "' class='card-img-top img-fluid' alt='' style='width: 15rem; height: 20rem'>
                                    <div class='card-body'>
                                        <h6 class='card-title text-warning text-truncade'>" .$Row['NombreJuego']. "</h6>
                                        <p class='card-text'>" .$var. "</p>
                                        <input type='submit' name='" .$Row['IdJuego']. "' class='btn btn-outline-warning fw-bold' value='Comprar'>
                                    </div>
                                </div>
                            </form>
                            "; 
        }
    }
    $codigo .= "</tbody>";
    $codigo .= "</table>";
?>