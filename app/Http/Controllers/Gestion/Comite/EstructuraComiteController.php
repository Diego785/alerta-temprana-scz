<?php

namespace App\Http\Controllers\Gestion\Comite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstructuraComiteController extends Controller
{

    

    public function show()
    {
        return view('my_views.gestion.comite.estructura_comite');
    }
}
