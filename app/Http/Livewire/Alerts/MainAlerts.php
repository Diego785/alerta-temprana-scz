<?php

namespace App\Http\Livewire\Alerts;

use App\Models\Alerta;
use App\Models\AlertaEnvio;
use App\Models\Evento;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Dompdf\Dompdf;
use Livewire\WithPagination;


class MainAlerts extends Component
{
    use WithPagination;


    public $justLook = 'Ver todo';
    public $search = '';
    public $sort = 'id';
    public $direction = 'asc';
    public $event, $alerts, $estado_actual;
    public $myId;
    public $perPage = 10;
    public $page = 1;
    public $show_alerts = false;

    public function mount($id)
    {
        $this->event = Evento::find($id);
        $this->myId = $id;
    }

    public function justLookAtAll()
    {
        $this->justLook = 'Ver todo';
    }
    public function justLookAtCritics()
    {
        $this->justLook = 'Crítico';
    }
    public function justLookAtHigh()
    {
        $this->justLook = 'Muy alto';
    }
    public function justLookAtModerado()
    {
        $this->justLook = 'Moderado';
    }
    public function justLookAtMonitored()
    {
        $this->justLook = 'Normal';
    }

    public function updateQuantityData10()
    {
        $this->perPage = 10;
    }
    public function updateQuantityData50()
    {
        $this->perPage = 50;
    }
    public function updateQuantityDataAll()
    {
        $this->perPage = Alerta::count();
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
        $this->show_alerts = false;
        $alertsPaginated = [];
        if ($this->alerts != null) {
            foreach ($this->alerts as $alert) {
                $alertsPaginated[] = $alert;
            }
        } else {
            if ($this->justLook == 'Ver todo') {
                $alertsPaginated = Alerta::where('evento_id', $this->event->id)
                    ->where(function ($query) {
                        $query->Where('id', 'like', '%' . $this->search . '%')
                            ->orWhere('nombre', 'like', '%' . $this->search . '%')
                            ->orWhere('fecha', 'like', '%' . $this->search . '%')
                            ->orWhere('hora', 'like', '%' . $this->search . '%');
                    })
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->perPage);
            } else if ($this->justLook == 'Crítico') {
                $alertsPaginated = Alerta::join('alerta_envios', 'alerta_envios.alerta_id', 'alertas.id')
                    ->select('alertas.id', 'alertas.nombre', 'alertas.fecha', 'alertas.hora', 'alertas.evento_id', 'alertas.description', 'alertas.unidad_id')

                    ->where('alertas.evento_id', $this->event->id)
                    ->where('alerta_envios.estado_id', 1)
                    ->where(function ($query) {
                        $query->Where('alertas.id', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.nombre', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.fecha', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.hora', 'like', '%' . $this->search . '%');
                    })
                    ->orderBy($this->sort, $this->direction)
                    ->latest()
                    ->paginate($this->perPage);
            } else if ($this->justLook == 'Muy alto') {
                $alertsPaginated = Alerta::join('alerta_envios', 'alerta_envios.alerta_id', 'alertas.id')
                    ->select('alertas.id', 'alertas.nombre', 'alertas.fecha', 'alertas.hora', 'alertas.evento_id', 'alertas.description', 'alertas.unidad_id')

                    ->where('alertas.evento_id', $this->event->id)
                    ->where('alerta_envios.estado_id', 2)
                    ->where(function ($query) {
                        $query->Where('alertas.id', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.nombre', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.fecha', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.hora', 'like', '%' . $this->search . '%');
                    })
                    ->orderBy($this->sort, $this->direction)
                    ->latest()
                    ->paginate($this->perPage);
            } else if ($this->justLook == 'Moderado') {
                $alertsPaginated = Alerta::join('alerta_envios', 'alerta_envios.alerta_id', 'alertas.id')
                    ->select('alertas.id', 'alertas.nombre', 'alertas.fecha', 'alertas.hora', 'alertas.evento_id', 'alertas.description', 'alertas.unidad_id')

                    ->where('alertas.evento_id', $this->event->id)
                    ->where('alerta_envios.estado_id', 3)
                    ->where(function ($query) {
                        $query->Where('alertas.id', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.nombre', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.fecha', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.hora', 'like', '%' . $this->search . '%');
                    })
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->perPage);
            } else if ($this->justLook == 'Normal') {
                $alertsPaginated = Alerta::join('alerta_envios', 'alerta_envios.alerta_id', 'alertas.id')
                    ->select('alertas.id', 'alertas.nombre', 'alertas.fecha', 'alertas.hora', 'alertas.evento_id', 'alertas.description', 'alertas.unidad_id')

                    ->where('alertas.evento_id', $this->event->id)
                    ->where('alerta_envios.estado_id', 4)
                    ->where(function ($query) {
                        $query->Where('alertas.id', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.nombre', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.fecha', 'like', '%' . $this->search . '%')
                            ->orWhere('alertas.hora', 'like', '%' . $this->search . '%');
                    })
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->perPage);
            }

            //     $this->alerts = null;

            //     foreach ($alertsPaginated as $alert) {
            //         if ($alert->alerta_envio->last()->estado->nombre == 'Normal') {
            //             $this->alerts[] = $alert;
            //         }
            //     }
            //     foreach ($this->alerts as $alert) {
            //         $alertsPaginated[] = $alert;
            //     }
            // }
        }

    //    $this->show_alerts = true;
       foreach ($alertsPaginated as $alert) {
        if($alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre == $this->justLook || $this->justLook == 'Ver todo'){
            $this->show_alerts = true;
        }
    }

        return view('livewire.alerts.main-alerts', ['alertsP' => $alertsPaginated]);
    }
}
