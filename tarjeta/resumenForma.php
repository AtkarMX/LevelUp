<!--Este es el front End-->
<section>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-5 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5">
            <i class="bi-bi-joystick"></i>

                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                </svg>
                
              <h2 class="fw-bold mb-2 text-warning">¡Level Up!</h2>
              <h5 class="mb-4 text-light">Has comprado con éxito</h5>

              <div class="card text-white bg-dark border-warning" style="">
                <div class="card-header-gold">
                </div>
                <div class="card-body">
                  <img src="<?php echo $UrlImagen; ?>" class="card-img-top" alt="">
                  <h5 class="card-title text-warning"> <?php echo $NombreJuego ?> </h5>
                  <p class="card-text"></p>
                </div>
              </div>

              <div class="card text-white bg-dark border-warning card-border" style="">
                <div class="card-header-gold">
                </div>
                <div class="card-body">
                  <a href="../tienda/tienda.php"  class="btn btn-outline-warning fw-bold">Ir a inicio</a>
                  <a href="../perfil/perfil.php"  class="btn btn-outline-warning fw-bold">Ir a mi perfil</a>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>