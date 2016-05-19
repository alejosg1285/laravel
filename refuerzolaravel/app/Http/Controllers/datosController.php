<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class datosController extends Controller
{
    //
    function llamarForm()
    {
        return view('formulario');
    }

    function insertarDatos(Request $rescate)
    {
        $n = $rescate->name;
        $e = $rescate->email;
        $p = $rescate->password;

        \DB::table('users')->insert(['name'=>$n, 'email'=>$e, 'password'=>$p]);
        echo 'Datos insertados';
    }
}
