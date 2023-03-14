<?php

use Illuminate\Support\Facades\Route;
use App\Models\tipo_habitaciones;

Route::get("/login", function(){
    return view("clients.login");
})->name("clients_login");

Route::get("/register",function(){
    return view("clients.register");
})->name("clients_register");