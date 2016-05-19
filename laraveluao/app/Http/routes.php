<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Valor por defecto en la ruta.
Route::get('/mirouta/{a?}', function($code = 1){
  return 'Primer ruta: '.$code;
});

Route::get('/otraruta/{a?}/{b?}', function($a = 1, $b = 2){
  $suma = $a + $b;
  echo 'La suma es: '.$suma;
});

Route::get('/ctrl', 'Micontrolador@prueba');
