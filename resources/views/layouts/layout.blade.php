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
    <!--Cabecera -->
    <x-cabecera href="{{ route('index') }}">
      @if(!isset($user))
        <button
          id="nabvar-button"
          class="hidder btn btn-lg btn-light"
          type="button"data-bs-toggle="modal"
          data-bs-target="#reserveModal"
        >
          Iniciar sesion
        </button>
      @endif
    </x-cabecera>

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
    @include("components.pie-de-pagina")

    @include("components.modales.mapa")

    @if(!isset($user))
      @include("components.modales.iniciosesion")
    @endif

    @vite(['node_modules/bootstrap/dist/js/bootstrap.js'])
  </body>
</html>
