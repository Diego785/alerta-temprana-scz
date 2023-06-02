<?php

namespace App\Http\Controllers\Gestion\Usuario;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller

{
    public function crearusuario()
    {
        return view('my_views.gestion.usuarios.registerusuarios');
        
    }

    public function show()
    {
        return view('my_views.gestion.usuarios.showusuario');
    }
}
