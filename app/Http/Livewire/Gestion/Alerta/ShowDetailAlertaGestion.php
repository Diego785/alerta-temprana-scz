<?php

namespace App\Http\Livewire\Gestion\Alerta;

use App\Models\AlertaEnvio;
use Livewire\Component;

class ShowDetailAlertaGestion extends Component
{
    public $alerta_id, $detail_alert, $fecha, $hora, $estado_id, $puntoX, $puntoY, $url_mapa, $video;
    public $modal_add = false;
    public $modal_edit = false;

    public function mount($alerta_id){
        $this->detail_alert = AlertaEnvio::where('alerta_id', $alerta_id)->get();
    }

    public function render()
    {
        return view('livewire.gestion.alerta.show-detail-alerta-gestion');
    }
}
