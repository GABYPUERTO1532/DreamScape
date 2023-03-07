@extends('layouts.dashboard')
@section('rol', 'Cliente')
@section('menu')
    @include('components.menucliente', 
    [
        'inicio' => 'active',
        'reservas' => ''
    ])
@endsection
@section('content')
    <h1>Bienvenido {{$user->name}}</h1>
@endsection