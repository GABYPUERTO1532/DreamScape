@extends('layouts.dashboard')
@section('title', 'Inicio cliente')
@section('menu')
    @include('components.menucliente', ['inicio' => 'active',])
@endsection
@section('content')
    <h1>Bienvenido(a) {{$user->name}}</h1>
@endsection