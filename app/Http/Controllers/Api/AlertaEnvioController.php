<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use App\Models\AlertaEnvio;
use Illuminate\Http\Request;

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
}
