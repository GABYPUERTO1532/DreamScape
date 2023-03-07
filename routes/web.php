<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing_page.home');
})->name("index");

Route::get('rooms', function () {
    return view('landing_page.rooms');
})->name("rooms");

Route::get('contactanos', function () {
    return view('landing_page.contactanos');
})->name("contactanos");

Route::get('sobrenos', function () {
    return view('landing_page.sobrenos');
})->name("sobrenos");

Route::any('homecliente',function() {
    return view('landing_page.cliente.inicio', [
        'user' => (object) [
            'rol' => false, //si es cliente enviar false
            'name' => 'Juan David'
        ]
    ]);
})->name('homecliente');


Route::any('reservascli',function() {
    return view('landing_page.cliente.reservas', [
        'user' => (object) [
            'rol' => false, //si es cliente enviar false
            'name' => 'Juan David'
        ]
    ]);
})->name('reservascliente');