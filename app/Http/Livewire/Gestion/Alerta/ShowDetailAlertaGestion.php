<?php

namespace App\Http\Livewire\Gestion\Alerta;

use App\Models\Alerta;
use App\Models\AlertaEnvio;
use App\Models\Estado;
use Livewire\Component;

class ShowDetailAlertaGestion extends Component
{
    public $main_alert, $alerta_id, $detail_alert, $descripcion, $recomendacion, $fecha, $hora, $estado_id = 1, $url_mapa, $video;
    public $modal_add = false;
    public $modal_edit = false;

    //Validaciones del formulario
    protected $rules = [
        'fecha' => 'required',
        'hora' => 'required',
        'descripcion' => 'required',
        'recomendacion' => 'required',
        'estado_id' => 'required',
    ];

    //Mensajes de las validaciones
    protected $messages = [
        'fecha.required' => 'La fecha es obligatoria.',
        'hora.required' => 'La hora es obligatoria.',
        'descripcion.required' => 'La descripción es obligatoria.',
        'recomendacion.required' => 'La recomendación es obligatoria.',
        'estado_id.required' => 'El estado es obligatorio.',
    ];


    public function mount($alerta_id)
    {
        $this->detail_alert = AlertaEnvio::where('alerta_id', $alerta_id)->get();
        $this->main_alert = Alerta::find($alerta_id);
    }



    public function open_add()
    {
        $this->modal_add = true;
    }


    public function open_edit($id)
    {
        // $this->alerta = Alerta::find($id);
        // $this->nombre = $this->alerta->nombre;
        // $this->fecha = $this->alerta->fecha;
        // $this->hora = $this->alerta->hora;
        // $this->descripcion = $this->alerta->description;
        // $this->evento_id = $this->alerta->evento_id;
        // $this->unidad_id = $this->alerta->unidad_id;
        // $this->estado = $this->estado;
        // $this->modal_edit = true;
    }

    public function save()
    {
        $this->validate();

        // Alerta::create([
        //     'nombre' => $this->nombre,
        //     'fecha' => $this->fecha,
        //     'hora' => $this->hora,
        //     'description' => $this->descripcion,
        //     'evento_id' => $this->evento_id,
        //     'unidad_id' => $this->unidad_id,
        //     'estado' => $this->estado,
        // ]);
        AlertaEnvio::create([
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'description' => $this->descripcion,
            'recomendacion' => $this->recomendacion,
            'estado_id' => $this->estado_id,
            'alerta_id' => $this->main_alert->id,
        ]);



        $this->reset(['modal_add', 'fecha', 'hora', 'estado_id', 'descripcion', 'recomendacion']);
    }

    public function update()
    {
        $this->validate();
        $this->alerta->nombre = $this->nombre;
        $this->alerta->fecha = $this->fecha;
        $this->alerta->hora = $this->hora;
        $this->alerta->description = $this->descripcion;
        $this->alerta->evento_id = $this->evento_id;
        $this->alerta->unidad_id = $this->unidad_id;
        $this->alerta->estado = $this->estado;
        $this->alerta->update();

        $this->reset(['modal_edit', 'nombre', 'fecha', 'hora', 'descripcion', 'evento_id', 'unidad_id', 'estado']);
    }

    public function delete($id)
    {
        try {
            $alerta = AlertaEnvio::find($id);
            $alerta->delete();
        } catch (\Throwable $th) {
            dd($th);
            $this->emit('showMessageResult');
        }
    }


    public function render()
    {
        $estados = Estado::all();
        return view('livewire.gestion.alerta.show-detail-alerta-gestion', compact('estados'));
    }
}
