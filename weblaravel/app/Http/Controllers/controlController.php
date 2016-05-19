<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class controlController extends Controller
{
    public function mostrar()
    {
        return 'Desde el controlador';
    }
}
