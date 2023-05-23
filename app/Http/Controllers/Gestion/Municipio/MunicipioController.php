<?php

namespace App\Http\Controllers\Gestion\Municipio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function show()
    {
        return view('my_views.gestion.municipio.municipio_controller');
    }
}
