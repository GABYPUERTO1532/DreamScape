<?php

use Illuminate\Support\Facades\Route;
use App\Models\type_rooms;

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

Route::get('reservascli',function() {
    return view('landing_page.cliente.reservas',['user' => Config('testing.user')]);
})->name('reservascliente');

Route::get('hacerreserva',function() {
    return view('landing_page.cliente.nuevareserva', [
        'user' => Config('testing.user'),
        'roomTypes' => type_rooms::get()
    ]);
})->name('hacerreserva');