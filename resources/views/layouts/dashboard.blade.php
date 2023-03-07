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
    
    <div class="row">

        <div class="d-flex flex-column flex-shrink-0 p-3 col-3" style="width: 280px;min-height: 70vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
              <span class="fs-4">Opciones</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                @yield('menu')
            </ul>
            <hr>
            <div class="fs-5">
                <a href="#" class="nav-link">
                    @if(isset($user->url_photo))
                        <img width="30" height="30" style="object-fit: cover" 
                        src="{{asset("storage/app/userPhotos/$user->url_photo")}}">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    @endif
                    Perfil de {{ $user->name }}
                  </a>
            </div>
        </div>
        <div class="col-9 mt-4">
            @yield('content')
        </div>
        
    </div>

    @include('components.pie-de-pagina')
</body>
    @vite(['node_modules/bootstrap/dist/js/bootstrap.js'])
</html>