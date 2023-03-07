@extends('layouts.dashboard')
@section('title', 'Nueva reserva')
@section('menu')
    @include('components.menucliente', ['nuevreserva' => 'active'])
@endsection

@section('content')
    <h1>Hacer nueva reserva:</h1>
@endsection