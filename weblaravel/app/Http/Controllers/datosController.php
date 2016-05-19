<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;

    class datosController extends Controller
    {
        //
        public function mostrar()
        {
            $resultado = \DB::table('personas')->select('nombre', 'cedula')->where('id', 1)->get();
            echo $resultado[0]->nombre;
        }
    }
