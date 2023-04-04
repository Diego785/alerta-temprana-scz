<?php

namespace App\Http\Controllers\Alerts;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AlertController extends Controller
{
    public function index()
    {
        return view('my_views.alerts.show_alerts');
    }

    public function showByCategory($id)
    {
        // $evento = Evento::find($id);
        // $alerts = Alerta::where('evento_id', $evento->id)->get();
        return view('my_views.alerts.main_alerts', compact('id'));
    }

    public function sendingAlert($alerta_id, $evento_id)
    {
        return view('my_views.alerts.sending_alerts', compact('alerta_id', 'evento_id'));
    }

    public function upload()
    {
        return view('my_views.testing_images.upload_image');
    }


    public function save()
    {
        return view('my_views.testing_images.save_image');
        
    }
}
