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

Route::get('/datos', function() {
    $numero = 10+5;
    $empresas = [
        "Mercado Libre",
        "Frávega",
        "Coto Digital",
        "DIA Online",
        "Cuponstar",
        "Groupon Argentina",
        "LetsBonus",
        "Pez Urbano",
        "Descuentocity",
        "Shopear"
    ];
    //Retornamos una vista pasandole datos
    return view('/datos',
        [
            'numero' => $numero,
            'empresas' => $empresas,

        ]
    );
});

Route::view('/form', 'form');
Route::post('/proceso', function (){
    // capturamos dato enviado por el Form
    //$nombre = $_POST['nombre'];
    //$nombre = request()->input('nombre');
    //$nombre = request()->post('nombre');
    //$nombre = request()->nombre;
    $nombre = request('nombre');
    return view('proceso', [ 'nombre' => $nombre ]);
});

Route::get('/personas', function ()
{
    // obtenemos datos de la tabla personas
    $personas = DB::select('select * from personas');
    return view('personas',
                [ 'personas' => $personas ]
            );
});
