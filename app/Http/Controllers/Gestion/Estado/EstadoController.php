<?php

namespace App\Http\Controllers\Gestion\Estado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function show()
    {
        return view('my_views.gestion.estado.estado_c');
    }
    
}
