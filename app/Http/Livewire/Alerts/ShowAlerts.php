<?php

namespace App\Http\Livewire\Alerts;

use App\Models\Evento;
use Livewire\Component;

class ShowAlerts extends Component
{

    public $images = []; 

    public function mount(){
        $this->images = Evento::all();
    }

    public function render()
    {
        return view('livewire.alerts.show-alerts');
    }
}
