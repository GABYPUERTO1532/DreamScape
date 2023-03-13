@extends('layouts.dashboard')
@section('title', 'Nueva reserva')
@section('menu')
    @include('components.menucliente', ['PQRS' => 'active'])
@endsection

@section('content')
<h1 style="margin-left:30%;">¿Tienes Algo Que Decirnos?</h1>

    <form action="">
        <div class="card rounded-5 p-4 col-9 offset-1">
            <div class="card-body">
                <label for="nombre">Escribe tu nombre:</label>
                <br>
                <br>
                <input style="width:41%;" class="form-control col-6" placeholder="Nombre Completo" type="text"id="nombre" name="nombre">
           <br>
           <br>
                Califica nuestro Servicio
                <div class="star-rating">
                   <a href="#">★</a>
                   <a href="#">★</a>
                   <a href="#">★</a>
                   <a href="#">★</a>
                   <a href="#">★</a>
                </div>
                <br>
                Tipo:
                <br>
                <br>
                <input type="checkbox" class="btn-check" id="peticion" autocomplete="off">
                <label class="btn btn-outline-primary" for="peticion">Peticion</label>
                
                <input type="checkbox" class="btn-check" id="queja" autocomplete="off">
                <label class="btn btn-outline-primary" for="queja">Queja</label>

                <input type="checkbox" class="btn-check" id="reclamo" autocomplete="off">
                <label class="btn btn-outline-primary" for="reclamo">Reclamo</label>

                <input type="checkbox" class="btn-check" id="sugerencia" autocomplete="off">
                <label class="btn btn-outline-primary" for="sugerencia">Sugerencia</label>
                <br>
                <br>

                <label for="descripcion">Realiza una breve descripción de tu PQRS:</label>

                <br>
                <br>

                <textarea   style="width:41%;" class="form-control" name="descripcion" id="descripcion" cols="40" rows="5"></textarea>
                
                <br>

                <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="" id="respcorreo" name="respcorreo">
                 <label class="form-check-label" for="respcorreo">
                    Recibir Respuesta en mi correo
                 </label>
                 </div>
                    <br>
                 <input type="submit" value="Enviar PQRS" class="btn btn-success float-end">
                


            </div>
        </div>

      
    </form>

@endsection