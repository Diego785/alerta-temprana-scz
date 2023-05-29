<?php

namespace App\Http\Livewire\Gestion\Alerta;

use App\Models\Alerta;
use App\Models\Evento;
use App\Models\UnidadTecnicoCientifica;
use Livewire\Component;

class ShowAlertaGestion extends Component
{


    public $alerta, $nombre, $fecha, $hora, $descripcion, $positionX, $positionY, $estado = "Abierta", $evento_id, $unidad_id;
    public $modal_add = false;
    public $modal_edit = false;

    protected $listeners = ['render', 'delete'];


    //Validaciones del formulario
    protected $rules = [
        'nombre' => 'required',
        'fecha' => 'required',
        'hora' => 'required',
        'descripcion' => 'required',
        'evento_id' => 'required',
        'unidad_id' => 'required',
        'estado' => 'required',
    ];

    //Mensajes de las validaciones
    protected $messages = [
        'nombre.required' => 'El nombre es obligatorio.',
        'fecha.required' => 'La fecha es obligatoria.',
        'hora.required' => 'La hora es obligatoria.',
        'descripcion.required' => 'La descripción es obligatoria.',
        'evento_id.required' => 'El evento es obligatorio.',
        'unidad_id.required' => 'La unidad TecnoCientífica es obligatoria.',
        'estado.required' => 'El estado es obligatorio.',
    ];

    public function open_add()
    {
        $this->modal_add = true;
    }


    public function open_edit($id)
    {
        $this->alerta = Alerta::find($id);
        $this->nombre = $this->alerta->nombre;
        $this->fecha = $this->alerta->fecha;
        $this->hora = $this->alerta->hora;
        $this->descripcion = $this->alerta->description;
        $this->evento_id = $this->alerta->evento_id;
        $this->unidad_id = $this->alerta->unidad_id;
        $this->estado = $this->estado;
        $this->modal_edit = true;
    }

    public function save()
    {
        $this->validate();

        Alerta::create([
            'nombre' => $this->nombre,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'description' => $this->descripcion,
            'evento_id' => $this->evento_id,
            'unidad_id' => $this->unidad_id,
            'estado' => $this->estado,
        ]);



        $this->reset(['modal_add', 'nombre', 'fecha', 'hora', 'descripcion', 'evento_id', 'unidad_id', 'estado']);
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
            $alerta = Alerta::find($id);
            $alerta->delete();
        } catch (\Throwable $th) {
            $this->emit('showMessageResult');
        }
    }



    public function render()
    {
        $unidades = UnidadTecnicoCientifica::all();
        $eventos = Evento::all();
        $alerts = Alerta::all();
        return view('livewire.gestion.alerta.show-alerta-gestion', compact('alerts', 'eventos', 'unidades'));
    }
}
