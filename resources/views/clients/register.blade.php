@extends('layouts.base')

@section('title','Register')

@section('custom_attributes','class=register_body')

@section('content')

    <table class="table">    
        <tr>
            <td class="col-md-5 align-items-center register_image">
                <img src="{{asset("img/others/logos/negative.png")}}" class="">
            </td>

            <td class="col-md-7 text-center">
                <div class="card col-md-10">
                    <div class="card-body">
                        <h1 class="card-title">Registro Clientes</h1>
                        <form class="row g-3">
                            @csrf        
                            
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre Completo:</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
        
                            <div class="col-md-6">
                                <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                                <input type="text" class="form-control" name="nacionalidad">
                            </div>
                    
                            <div class="col-md-6">
                                <label for="tip_doc" class="form-label">Tipo de Documento:</label>
                                <input type="text" class="form-control" name="tip_doc">
                            </div>

                            <div class="col-md-6">
                                <label for="num_doc" class="form-label">Numero de Documento:</label>
                                <input type="text" class="form-control" name="num_doc">
                            </div>    
        
                            <div class="col-md-6">
                                <label for="sex_genero" class="form-label">Sexo/Genero:</label>
                                <input type="text" class="form-control" name="sex_genero">
                            </div>
        
                            <div class="col-md-6">
                                <label for="num_tel" class="form-label">Numero Telefonico:</label>
                                <input type="text" class="form-control" name="num_tel">
                            </div>
        
                            <div class='col-md-12'>
                                <label for="email" class="form-label">Correo Electronico:</label>
                                <input type="email" class="form-control" name="email">
                            </div>
        
                            <div class='col-md-6'>
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" name="password">
                            </div>
        
                            <div class='col-md-6'>
                                <label for="verify_password" class="form-label">Confirmar Contraseña:</label>
                                <input type="password" class="form-control" name="verify_password">
                            </div>
        
                            <div class="text-center">
        
                                <button type="submit" class="btn btn-primary col-md-12">Registrar</button>
        
                                <a href="{{route("clients_login")}}">¿Ya tienes cuenta?, Inicia Sesion</a>
        
                            </div>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </table>

@endsection