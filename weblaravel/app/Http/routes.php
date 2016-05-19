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

    //Validar datos que ingresan por url
    Route::get('prueba/{nombre}', function ($nombre) {
        return "Hola {$nombre}";
    })->where('nombre', '[a-zA-Z]+');

    Route::get('pruebaval/{id}/{nom}', function ($id, $nom) {
        return "Datos validados {$id} {$nom}";
    })->where(['id' => '[0-9]+', 'nom' => '[a-zA-Z]+']);

    Route::get('casa/{dato}', function ($code) {
        //return view('mivista', ['id' => $code]);
        $mivista = view('mivista')->with('id', $code)->with('nombre', 'alejosg');

        return $mivista;
    });

    Route::get('home', function () {
        return view('home.casita');
    })->middleware('fecha');

    Route::get('home2/{id?}', function ($code=null) {
        return view('prueba')->with('id', $code);
    });

    Route::get('plantilla/{id}', function($id){
        return view('home.plantilla')->with('id',$id);
    });

    Route::get('control', 'controlController@mostrar');
    Route::get('opera', 'miscontrollers\operacionController@mostrar');

    Route::get('base', function(){
        dd(\App\persona::all());
    });

    Route::get('datos', 'datosController@mostrar');