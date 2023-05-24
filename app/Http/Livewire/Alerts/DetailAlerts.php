<?php

namespace App\Http\Livewire\Alerts;

use App\Models\Alerta;
use App\Models\AlertaEnvio;
use App\Models\Evento;
use Livewire\Component;

class DetailAlerts extends Component
{
    public $event, $alert, $estado_actual;
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
        $this->sending_alerts = AlertaEnvio::where('alerta_id', $this->alert->id)
            ->orderBy('fecha', 'desc')
            ->orderBy('hora', 'desc')
            ->get();
        return view('livewire.alerts.detail-alerts');
    }
}
