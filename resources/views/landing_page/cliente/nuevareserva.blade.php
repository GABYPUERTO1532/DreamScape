@extends('layouts.dashboard')
@section('title', 'Nueva reserva')
@section('menu')
    @include('components.menucliente', ['nuevreserva' => 'active'])
@endsection

@section('content')
<h1>Hacer nueva reserva</h1>
<div class="card">
    <form action="#">
        <table class="table container-fluid" style="table-layout: fixed;
        ">
            <thead>
                <tr class="table-primary">
                    <th scope="col" colspan="2">
                        Tipo de habitación
                    </th>
                    <th scope="col">
                        Inicio visita
                    </th>
                    <th scope="col">
                        Final visita
                    </th>
                    <th scope="col">
                        Número adultos
                    </th>
                    <th scope="col">
                        Número niños
                    </th scope="col">
                    <th>
                        Remover
                    </th>
                </tr>
            </thead>
                <tbody id="lista">
                    <tr class="fila">
                        <td scope="col" colspan="2">
                            <select name="tipo[]" id="" class="form-select form-select-lg class="form-control"">
                                <option value="" required> - - - </option>
                                @foreach($roomTypes as $room)
                                <option value="{{$room->id}}">{{$room->nombre}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td scope="col">
                            <input type="date" name="fecha_ini[]" id="" class="form-control">
                        </td>
                        <td scope="col">
                            <input type="date" name="fecha_fin[]" id="" class="form-control">
                        </td>
                        <td scope="col">
                            <input type="number" name="num_adult[]" id="" class="form-control">
                        </td>
                        <td scope="col">
                            <input type="number" name="num_men[]" id="" class="form-control">
                        </td>
                        <td scope="col">
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