<?php

namespace App\Http\Controllers\Alerts;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use App\Models\Evento;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function index(){
        return view('my_views.alerts.show_alerts');
    }

    public function showByCategory($id){
        // $evento = Evento::find($id);
        // $alerts = Alerta::where('evento_id', $evento->id)->get();
        return view('my_views.alerts.main_alerts', compact('id'));
    }
}
