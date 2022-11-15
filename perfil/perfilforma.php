<!--Este es el front End-->
<section>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
      <!--Icono-->
      <a class="navbar-brand fs-4" href="#">
        <i class="bi bi-joystick"></i>
        <span class="">Level Up</span>
      </a>

      <!--Boton-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--Elementos del menú colapsable-->
      <div class="collapse navbar-collapse" id="menu">   
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link fs-6" href="../tienda/tienda.php">Tienda</a>
            </li>
          </ul>

          <hr class="text-white-50">

            <!--Boton de unirse-->
          <a href="logout.php" class="btn btn-outline-warning fw-bold">Cerrar sesion</a>
        </div>
      </div>
</nav>
    
<div class="container">
  <div class="row align-items-start">


  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-10">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <i class="bi-bi-joystick"></i>

                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                </svg>
                <h2 class="fw-bold mb-2 text-warning">¡Level Up!</h2>
                <h3 class="text-light mb-5">Perfil de usuario</h3>

                <form action="perfil.php" method="post">
                  <?php
                      if(isset($Mensaje)){
                          echo "
                          <div class='alert alert-success'>
                              <h5>$Mensaje</h5>
                          </div>
                          ";
                      }
                  ?>
                  <?php
                    if(isset($ErrMensaje)){
                        echo "
                        <div class='alert alert-danger'>
                            <h5>$ErrMensaje</h5>
                        </div>
                        ";
                    }
                  ?>

                  <div class="form-floating text-start text-dark mb-4 fs-6">
                    <input type="name" class="form-control" name="NombreUsuario" id="floatingInputValue" placeholder=" " required
                    value="<?php echo $NombreUsuario; ?>" pattern="^[A-ZÁÉÍÓÚÑ a-záéíóúñ]{2,30}$">
                    <label for="floatingInputValue">Nombre</label>
                  </div>

                  <div class="form-floating text-start text-dark mb-4 fs-6">
                    <input type="lastname" class="form-control" name="ApellidoUsuario" id="floatingInputValue" placeholder=" " required
                    value="<?php echo $ApellidoUsuario; ?>" pattern="^[A-ZÁÉÍÓÚÑ a-záéíóúñ]{2,30}$">
                    <label for="floatingInputValue">Apellido</label>
                  </div>

                  <div class="form-floating text-start text-dark mb-4 fs-6">
                  <input type="email" class="form-control" id="floatingInputValue" readonly placeholder=" " required
                  value="<?php echo $CorreoUsuario; ?>">
                  <label for="floatingInputValue">Direccion de correo electronico</label>
                  </div>

                  <div class="form-floating text-start text-dark mb-4 fs-6">
                  <input type="Number Phone" class="form-control" name="NumeroUsuario" id="floatingInputValue" placeholder=" " required
                  value="<?php echo $NumeroUsuario; ?>" pattern="^[0-9]{10}$">
                  <label for="floatingInputValue">Número de telefono</label>
                  </div>

                  <div>
                    <input type="submit" class="btn btn-outline-warning fw-bold mb-5" name="Guardar" value="Guardar">
                  </div>
                </form>
                <div style="background-color: #181818;">
                <div class="container py-5">
                  <h4 class="text-center mb-5"><strong>Juegos comprados</strong></h4>
                  <?php
                    echo $codigo;
                  ?>
                </div>
              </div>



              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

            </div>

          

          </div>
        </div>
      </div>
    </div>
  </div>
</section>