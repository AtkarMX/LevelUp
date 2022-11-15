<!--Este es el front End-->
<section class="">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <i class="bi-bi-joystick"></i>

                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                </svg>
              <h2 class="fw-bold mb-2 text-warning">¡Level Up!</h2>
              <p class="text-light mb-5">Completa tu compra</p>

              <div class="card text-white bg-dark border-warning mb-3" style="">
                <div class="card-header-gold">
                </div>
                <div class="card-body">
                  <img src="<?php echo $UrlImagen; ?>" class="card-img-top" alt="">
                  <h5 class="card-title text-warning"> <?php echo $NombreJuego; ?> </h5>
                  <p class="card-text"></p>
                </div>
              </div>

              <form action="tarjeta.php" method="post">

                <div class="form-floating text-start text-dark mb-4 fs-6">
                  <input type="NumberPhone" class="form-control" id="floatingInputValue" name="NumeroTarjeta" placeholder=" " required
                  pattern="^[0-9]{16}$">
                  <label for="floatingInputValue">Número de tarjeta (16 dígitos)</label>
                </div>

                <div class="form-floating text-start text-dark mb-4 fs-6">
                  <input type="NumberPhone" class="form-control" id="floatingInputValue" name="FechaTarjeta" placeholder=" " required
                  pattern="^([0][1-9]|[1][0-2])[\/][2-9][3-9]$">
                  <label for="floatingInputValue">Fecha de vencimiento (12/25)</label>
                </div>

                <div class="form-floating text-start text-dark mb-4 fs-6">
                  <input type="NumberPhone" class="form-control" id="floatingInputValue" name="cvvTarjeta" placeholder=" " required
                  pattern="^[0-9]{3}$">
                  <label for="floatingInputValue">CVV (3 dígitos)</label>
                </div>

                <button class="btn btn-warning fw-bold" type="submit" name="Comprar">¡Completar compra!</button>
                <a href="../tienda/tienda.php" class="btn btn-outline-danger fw-bold">Cancelar</a>
              </form>
              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->
              <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>