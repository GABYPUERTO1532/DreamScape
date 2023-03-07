<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>DreamScape - @yield("title") </title>

    @vite(['node_modules/bootstrap/scss/bootstrap.scss'])
    @vite(['resources/css/app.css'])

    <link rel="shortcut icon" href="./img/palmera.png" type="image/x-icon">

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light">
      <div class="container-fluid">
        <div class="hidder">
          <a
            href="https://wa.me/+573173077666?text=Hola,%20estoy%20interesad@%20en%20hacer%20una%20reservación"
            target="_blank"
          >
            <img
              width="45px"
              src="https://img.icons8.com/color/48/000000/whatsapp--v4.png"
            />
          </a>
          <a href="">
            <img
              width="45px"
              src="https://img.icons8.com/fluency/48/000000/facebook-circled.png"
            />
          </a>
          <a href="">
            <img
              src="https://img.icons8.com/fluency/48/000000/instagram-new.png"
            />
          </a>
        </div>
        <a href={{route("index")}}>
          <div class="row div-central-nav">
            <div class="col-4">
              <img width="75%" src="./img/palmera.png" />
            </div>
            <p class="col-8 mt-4" id="slog">Dale un respiro a tu vida</p>
          </div>
        </a>
         @if(isset($user))
        <button
          id="nabvar-button"
          class="hidder btn btn-lg btn-light"
          type="button"data-bs-toggle="modal"
          data-bs-target="#myReserves"
        >
          Mis reservas
        </button> @else

        <button
          id="nabvar-button"
          class="hidder btn btn-lg btn-light"
          type="button"data-bs-toggle="modal"
          data-bs-target="#reserveModal"
        >
          Iniciar sesion
        </button>

        @endif
      </div>
    </nav>

    <!-- Nav Links -->
    <ul class="nav justify-content-center nav-links ul-link-nav">
      <li class="nav-item">
        <a href={{route("sobrenos")}}>Sobre nosotros</a>
      </li>
      <li class="nav-item">
        <a href={{route("rooms")}} >Habitaciones</a>
      </li>
      <li class="nav-item">
        <button type="button"
        class="hidder"
        style="background-color:#19875400; color:white; border:none;"
        data-bs-toggle="modal"
        data-bs-target="#mapa"> 
        Ubicanos 
        </button>
      </li>
      <li class="nav-item">
        <a href={{route("contactanos")}}>Contacto</a>
      </li>
      
    </ul>
    
    @yield("content")
    <!-- Footer -->
    <footer class="pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 mb-4">
            <h3 class="titles-footer">¿Deseas contactarte con nosotros?</h3>
            <ul class="ul-footer ul-link-nav">
              <p>Número telefónico</p>
              <li>
                <a href="tel: +573222325596" ;>322 232 5596 </a>
              </li>
              <hr />
              <p>Correo electronico</p>
              <li>
                <a
                  href="mailto:estebanaluisv@juandelcorral.edu.co?Subject=Interesad@%20en%20hacer%20reservacion"
                  >DreamScape@gmail.com
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    @include("components.modales.mapa")

    @if(isset($user))
      @include("components.modales.reserva")
      @include("components.modales.verreserva")
    @else
      @include("components.modales.iniciosesion")
    @endif

    @vite(['node_modules/bootstrap/dist/js/bootstrap.js']);
  </body>
</html>
