<?php

use Illuminate\Support\Facades\Route;
use App\Models\tipo_habitaciones;

Route::get("/login",function(){
    return view("clients.login");
});