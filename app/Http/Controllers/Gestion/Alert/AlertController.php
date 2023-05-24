<?php

namespace App\Http\Controllers\Gestion\Alert;

use App\Http\Controllers\Controller;
use App\Models\AlertaEnvio;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function show()
    {
        return view('my_views.gestion.alert.alerta_gestion');
    }

    public function show_detail_alert($id)
    {
        $alerta_id = $id;
        return view('my_views.gestion.alert.detail_alerta_gestion', compact('alerta_id'));
    }
}
