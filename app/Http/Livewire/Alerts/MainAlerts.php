<?php

namespace App\Http\Livewire\Alerts;

use App\Models\Alerta;
use App\Models\AlertaEnvio;
use App\Models\Evento;
use Livewire\Component;

class MainAlerts extends Component
{
    public $event, $alerts, $estado_actual;

    public function mount($id){
        $this->event = Evento::find($id);
    }

    public function render()
    {
        $this->alerts = Alerta::all();

        return view('livewire.alerts.main-alerts');
    }
}
