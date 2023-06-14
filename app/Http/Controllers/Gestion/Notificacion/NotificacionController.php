<?php

namespace App\Http\Controllers\Gestion\Notificacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    public function show()
    {
        return view('my_views.gestion.notificacion.showNotificacion');
    }
    public function create()
    {
        return view('my_views.gestion.notificacion.createNotificacion');
    }
}
