@extends('layouts.dashboard')
@section('title', 'Nueva reserva')
@section('menu')
    @include('components.menucliente', ['nuevreserva' => 'active'])
@endsection

@section('content')
<h1>Hacer nueva reserva</h1>
<div class="card">
    <form action="#">
        <table class="table">
            <thead>
                <th>
                    Tipo de habitación
                </th>
                <th>
                    Inicio visita
                </th>
                <th>
                    Final visita
                </th>
                <th>
                    Número adultos
                </th>
                <th>
                    Número niños
                </th>
                <th>
                    Remover
                </th>
            </thead>
                <tbody id="lista">
                    <tr class="fila">
                        <td>
                            <select name="tipo[]" id="">
                                <option value="" required> - - - </option>
                                @foreach($roomTypes as $room)
                                <option value="{{$room->id}}">Habitación {{$room->name}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="date" name="fecha_ini[]" id="">
                        </td>
                        <td>
                            <input type="date" name="fecha_fin[]" id="">
                        </td>
                        <td>
                            <input type="number" name="num_adult[]" id="">
                        </td>
                        <td>
                            <input type="number" name="num_men[]" id="">
                        </td>
                        <td>
                            <button class="btn btn-danger delete">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                </tbody>
        </table>
        <div class="p-2 d-flex justify-content-between">
            <button id="new" type="button" class="btn btn-primary">
                Añadir habitación 
            </button>
            <input type="submit" value="Hacer reserva" class="btn btn-success">
        </div>
    </form>
</div >
@endsection
@section('scripts')
<script>
    let fila = document.getElementsByClassName("fila")[0];
    let lista = document.getElementById("lista");

    const clon = fila.cloneNode(true); 

    document.getElementById('new').addEventListener('click', ()=>{
        let clonNew = clon.cloneNode(true);
        lista.appendChild(clonNew);
        DeleteBtns();
    });

    function DeleteBtns(){
        let btnElimin = document.getElementsByClassName('delete');

        for(i = 0; i < btnElimin.length ; i++){
    
            btnElimin[i].addEventListener('click', (e)=>{
                let padre = e.target.parentElement.parentElement.parentElement;
            padre.removeChild(e.target.parentElement.parentElement);
            });
        }
    }
    DeleteBtns();
</script>
@endsection