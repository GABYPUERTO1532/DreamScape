<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Cliente</title>

    @vite(['node_modules/bootstrap/scss/bootstrap.scss'])
    @vite(['resources/css/app.css'])

    <link rel="shortcut icon" href="./img/palmera.png" type="image/x-icon">
</head>
<body>
    <x-cabecera href="{{route('homecliente')}}">
            <a class="btn btn-lg btn-light" href="{{route('index')}}">
            Cerrar sesión
        </a>
    </x-cabecera>
    
    <div class="d-flex flex-column flex-shrink-0 p-3 mt-4" style="width: 280px;min-height: 70vh;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
          <span class="fs-4">Opciones</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <x-elemento-dashboard link="{{route('homecliente')}}" img="http://www.w3.org/2000/svg" nombre="Inicio"
            activo="active"
            >
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
            </x-elemento-dashboard> 

            <x-elemento-dashboard link="{{route('homecliente')}}" nombre="Reservas"
            activo=""
            >
            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </x-elemento-dashboard> 
        </ul>
        <hr>
        <div class="fs-5">
            <a href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                Perfil de {{ $user->name }}
              </a>
        </div>
      </div>

    @include('components.pie-de-pagina')
</body>
    @vite(['node_modules/bootstrap/dist/js/bootstrap.js'])
</html>