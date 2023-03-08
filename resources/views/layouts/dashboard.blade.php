<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - DreamScape</title>

    @vite(['node_modules/bootstrap/scss/bootstrap.scss'])
    @vite(['resources/css/app.css'])

    <link rel="shortcut icon" href="./img/palmera.png" type="image/x-icon">
</head>
<body>
    @php
        switch($user->rol){
            case(0):
                $home = 'reservascliente';
                break;
            //Añadir rutas base de otros tipos de usuario
        }
    @endphp
    <x-cabecera href="{{route($home)}}">
        <div class="fs-5">
            <div class="fotoPerfil">
                <a href="#">
                    @if(isset($user->url_photo))
                        <img width="100" height="100" style="object-fit: cover; border-radius: 30%;" 
                        src="/storage/userPhotos/{{$user->url_photo}}" alt="Foto de {{$user->name}}" >
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    @endif
                </a>
                <ul class="menuPerfil">
                    <a>
                        <li>Ver perfil</li>
                    </a>
                    <a href="{{route('index')}}">
                        <li>Cerrar sesión</li>
                    </a>
                </ul>
            </div>
        </div>
    </x-cabecera>
    
    <div class="row">

        <div class="d-flex flex-column p-3 col-3" style="width: 280px;min-height: 70vh;">
            <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
              <span class="fs-4">Opciones</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                @yield('menu')
            </ul>
            <hr>
            <div class="px-4 fs-5">
                @if(isset($user->url_photo))
                <img width="40" height="40" style="object-fit: cover; border-radius: 30%;" 
                src="/storage/userPhotos/{{$user->url_photo}}" alt="Foto de {{$user->name}}" >
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                @endif
                {{$user->name}}
            </div>
        </div>
        <div class="col-9 mt-4">
            @yield('content')
        </div>
        
    </div>

    @include('components.pie-de-pagina')
    @yield('scripts')
</body>
    @vite(['node_modules/bootstrap/dist/js/bootstrap.js'])
</html>