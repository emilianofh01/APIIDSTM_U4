<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/suma/{numeros}', function ($numeros) {  
    $numerosArray = explode('/', $numeros);
    return array_sum($numerosArray);
}) -> where('numeros', '.*');

Route::get('/resta/{numeros}', function ($numeros) {  
    $numerosArray = explode('/', $numeros);
    $resultado = null;

    foreach($numerosArray as $numero) {
        if($resultado === null) {
            $resultado = $numero;
        } else {
            $resultado = $resultado - $numero;
        }
    }
    return $resultado;
}) -> where('numeros', '.*');

Route::get('/division/{numeros}', function ($numeros) {  
    $numerosArray = explode('/', $numeros);
    return array_reduce($numerosArray, function($value, $num) {
        if($value === null) {
            return $num;
        }
        return $value / $num;
    }, null);
}) -> where('numeros', '.*');

Route::get('/saludo/{nombre}/{apellidos?}', function ($nombre, $apellidos = "Doe") {  
    return 'Hola '. $nombre .' '. $apellidos;
});

Route::get('/greeting/{name?}', function ($name = 'John') {  
    return view('example', ['name'=> $name]);
});




