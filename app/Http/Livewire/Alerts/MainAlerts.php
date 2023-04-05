<?php

namespace App\Http\Livewire\Alerts;

use App\Models\Alerta;
use App\Models\AlertaEnvio;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MainAlerts extends Component
{
    public $justLook = 'Ver todo';
    public $search = '';
    public $sort = 'id';
    public $direction = 'asc';
    public $event, $alerts, $estado_actual;

    public function mount($id)
    {
        $this->event = Evento::find($id);
    }

    public function justLookAtAll()
    {
        $this->justLook = 'Ver todo';
    }
    public function justLookAtCritics()
    {
        $this->justLook = 'Criticos';
    }
    public function justLookAtMonitored()
    {
        $this->justLook = 'Monitoreados';
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }



    public function render()
    {
        $this->alerts = [];

        if ($this->justLook == 'Ver todo') {
            $this->alerts = Alerta::where('evento_id', $this->event->id)
                // ->Where('id' , 'like' , '%' . $this->search . '%')
                //  ->orWhere('nombre' , 'like' , '%' . $this->search . '%')
                //  ->orWhere('fecha' , 'like' , '%' . $this->search . '%')
                //  ->orWhere('hora' , 'like' , '%' . $this->search . '%')
                ->where(function ($query) {
                    $query->Where('id', 'like', '%' . $this->search . '%')
                        ->orWhere('nombre', 'like', '%' . $this->search . '%')
                        ->orWhere('fecha', 'like', '%' . $this->search . '%')
                        ->orWhere('hora', 'like', '%' . $this->search . '%');
                })
                ->orderBy($this->sort, $this->direction)
                ->get();
        } else if ($this->justLook == 'Criticos') {

            $myAlerts = Alerta::where('evento_id', $this->event->id)
                ->where(function ($query) {
                    $query->Where('id', 'like', '%' . $this->search . '%')
                        ->orWhere('nombre', 'like', '%' . $this->search . '%')
                        ->orWhere('fecha', 'like', '%' . $this->search . '%')
                        ->orWhere('hora', 'like', '%' . $this->search . '%');
                })
                ->get();

            foreach ($myAlerts as $alert) {
                if ($alert->alerta_envio->last()->estado->nombre == 'Crítico') {
                    $this->alerts[] = $alert;
                }
            }
        } else if ($this->justLook == 'Monitoreados') {
            $myAlerts = Alerta::where('evento_id', $this->event->id)
                ->where(function ($query) {
                    $query->Where('id', 'like', '%' . $this->search . '%')
                        ->orWhere('nombre', 'like', '%' . $this->search . '%')
                        ->orWhere('fecha', 'like', '%' . $this->search . '%')
                        ->orWhere('hora', 'like', '%' . $this->search . '%');
                })
                ->get();

            foreach ($myAlerts as $alert) {
                if ($alert->alerta_envio->last()->estado->nombre == 'Bajo') {
                    $this->alerts[] = $alert;
                }
            }
        }
        return view('livewire.alerts.main-alerts');
    }
}
