@extends('layouts.base')

@section('title','Login')

@section('custom_attributes','class=body_login_clients')

@section('content')

    <div class="d-flex align-items-center justify-content-center text-center container_login">

        <div class="card col-xl-5 col-lg-5 col-md-4 col-sm-11 col-11">
            <div class="card-body">
                <h3 class="card-title">Inicio de Sesion</h3>

                <div class="container">

                    <form action="" method="post">

                        @csrf

                        <div class="mb-2">
                          <label for="email" class="form-label">Correo Electronico</label>
                          <input type="text"
                            class="form-control" name="email">
                        </div>

                        <div class="mb-3">

                          <label for="password" class="form-label">Contraseña</label>
                          <input type="password"
                            class="form-control" name="password">

                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%">Inciar sesion</button>

                        <div id="container_links_login">
                            <a href="" class="link_login">¿Perdiste tu contraseña</a>

                            <a href="{{route("clients_register")}}" class="link_login">¿No tienes cuenta?, Registrate</a>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection