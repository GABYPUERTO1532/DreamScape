@extends('layouts.dashboard')
@section('title', 'Reservas')
@section('menu')
    @include('components.menucliente', ['reservas' => 'active'])
@endsection

@section('content')
    <h1>Reservas:</h1>
@endsection