@extends('layouts.dashboard')
@section('rol', 'Cliente')
@section('menu')
    @include('components.menucliente', 
    [
        'inicio' => '',
        'reservas' => 'active'
    ])
@endsection

@section('content')
    <h1>Reservas:</h1>
@endsection