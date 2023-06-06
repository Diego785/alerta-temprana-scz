<?php

namespace App\Http\Controllers\Gestion\Report;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use App\Models\AlertaEnvio;
use Illuminate\Http\Request;

class AlertGestionController extends Controller
{
    public function show()
    {
        // Obtener datos necesarios
        $alerts = Alerta::all();
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('my_views.gestion.report.gestion-alert', compact('alerts'));
        return $pdf->stream('Lista de alertas: ' . now() . '.pdf');
    }

    public function show_details($id)
    {
        // Obtener datos necesarios
        $alerts = AlertaEnvio::where('alerta_id', $id)->get();
        $alert = Alerta::find($id);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('my_views.gestion.report.gestion-detail-alert', compact('alerts'));
        return $pdf->stream('Lista del historial de alerta: ' . $alert->nombre  . 'del Evento: ' . $alert->evento->tipoEvento . now() . '.pdf');
    }
}
