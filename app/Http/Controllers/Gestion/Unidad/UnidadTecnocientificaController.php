<?php

namespace App\Http\Controllers\Gestion\Unidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnidadTecnocientificaController extends Controller
{
    public function show()
    {
        return view('my_views.gestion.unidad.unidad_tecnocientifica_controller');
    }
}
