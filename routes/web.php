<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return ('Hola mundo');
});

##
Route::view('/inicio', 'inicio'); //inicio
Route::view('/plantilla', 'plantilla'); //plantilla
