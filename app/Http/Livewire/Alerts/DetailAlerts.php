<?php

namespace App\Http\Livewire\Alerts;

use App\Models\Alerta;
use App\Models\Evento;
use Livewire\Component;

class DetailAlerts extends Component
{
    public $event, $alert, $estado_actual;
    public $scrollToSection = false;


    public function mount($alerta_id, $evento_id)
    {
        $this->alert = Alerta::find($alerta_id);
        $this->event = Evento::find($evento_id);
    }

    public function render()
    {
        return view('livewire.alerts.detail-alerts');
    }
}
