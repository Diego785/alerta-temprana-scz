<?php

namespace App\Http\Controllers\Gestion\Alert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function show()
    {
        return view('my_views.gestion.alert.alerta_gestion');
    }
}
