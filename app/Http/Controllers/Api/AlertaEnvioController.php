<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use App\Models\AlertaEnvio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlertaEnvioController extends Controller
{
    public function index()
    {
        return AlertaEnvio::all();
    }
    public function getAlertEnvio($id)
    {
        return AlertaEnvio::join(
            'estados',
            'alerta_envios.estado_id',
            'estados.id',
        )
            ->select(
                'alerta_envios.id as alerta_envio_id',
                'alerta_envios.alerta_id',
                'alerta_envios.fecha',
                'alerta_envios.hora',
                'alerta_envios.puntoX',
                'alerta_envios.puntoY',
                'alerta_envios.url_mapa',
                'alerta_envios.description',
                'alerta_envios.img_cabecera',
                'alerta_envios.img_alerta',
                'alerta_envios.url_boletin',
                'alerta_envios.recomendacion',
                'estados.color',
                'estados.nombre as nombre_estado'
            )
            ->where('alerta_envios.alerta_id', '=', $id)
            ->orderByDesc('alerta_envios.id')            
            ->get();
    }

    public function getCriticAlerts()
    {
        return AlertaEnvio::join('alertas', 'alerta_envios.alerta_id', 'alertas.id')
        ->select('alertas.id', 'alertas.fecha', 'alertas.hora', 'alertas.evento_id', 'alertas.description', 'alertas.unidad_id')
        
        ->where('alertas.evento_id', 3)
        ->where('alerta_envios.estado_id', 1)
        
            ->get();
    }
    public function addNotification(Request $request){
        $alert = $request->input('alert');
        if($alert == ''){
            $alert = 'Revise las alertas más recientes y tome sus precauciones.';
        }
        $qr = $request->qr;
        $url = 'https://fcm.googleapis.com/fcm/send';
        $body = [
            'notification' => [
                'body' => $alert,
                'title' => '¡Nueva Alerta!'
            ],
            'to' => 'dmQI9mZvQ_KECEpwXbTeZo:APA91bEuZyDJ_Mi3tmHIdsyc0XDlPxlSQzzczqLQfvqcWhWT7ZpBjqnK57GzzVx5gMC_RcqKfjBqJij4M3-CT67j5zCEcReAKSUOmayG7a6H1LHvG7sPs87LUNUIeBCRdJNY8Fed_YN3'
        ];
        $header = [
            'Authorization' => 'key=AAAA3OjvR2I:APA91bF9jchyddPTJgOL7dLFaOgT1PF0kS5sR8NDiRAie16ORofUOLQwmPqym3GWdDrLywR3iXWM5az6bEOToXGWSp-fq7EELHeEVLPGBzKPZD26R0bdSgNW5PM5TkJdcpodW39U77FL'
        ];
        
        $response = Http::withHeaders($header)->post($url, $body);
        
        

        return redirect()->route('show_alerta_gestion');
    }
}
