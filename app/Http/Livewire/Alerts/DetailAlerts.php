<?php

namespace App\Http\Livewire\Alerts;

use App\Models\Alerta;
use App\Models\AlertaEnvio;
use App\Models\Evento;
use App\Models\Municipio;
use App\Models\MunicipioAlerta;
use Livewire\Component;

class DetailAlerts extends Component
{
    public $event, $alert, $estado_actual, $municipios;
    public $sending_alerts;
    public $scrollToSection = false;
    public $autoplay = false;


    public function mount($alerta_id, $evento_id)
    {
        $this->alert = Alerta::find($alerta_id);
        $this->event = Evento::find($evento_id);
        $this->autoplay = false;
    }

    public function iniciarReproduccion()
    {
        $this->autoplay = true;
    }

    public function render()
    {

        $this->municipios = Municipio::join('municipio_alertas', 'municipio_id', 'municipios.id')
            ->join('alerta_envios', 'municipio_alertas.alerta_envio_id', 'alerta_envios.id')
            ->join('alertas', 'alerta_envios.alerta_id', 'alertas.id')
            ->select('municipios.*')
            ->where('alertas.id', $this->alert->id)
            ->distinct()
            ->get();
        $this->sending_alerts = AlertaEnvio::where('alerta_id', $this->alert->id)
            ->orderBy('fecha', 'desc')
            ->orderBy('hora', 'desc')
            ->get();
        return view('livewire.alerts.detail-alerts');
    }
}
