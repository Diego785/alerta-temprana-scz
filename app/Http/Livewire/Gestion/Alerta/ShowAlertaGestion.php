<?php

namespace App\Http\Livewire\Gestion\Alerta;

use App\Models\Alerta;
use App\Models\UnidadTecnicoCientifica;
use Livewire\Component;

class ShowAlertaGestion extends Component
{

    
    public $alerta, $nombre, $fecha, $hora, $descripcion, $positionX, $positionY, $estado = "Abierta", $evento, $unidades;
    public $modal_add = false;
    public $modal_edit = false;

    protected $listeners = ['render', 'delete'];


    //Validaciones del formulario
    protected $rules = [
        'nombre' => 'required',
        'fecha' => 'required',
        'hora' => 'required',
        'descripcion' => 'required',
        'evento' => 'required',
        'estado' => 'required',
        'unidad' => 'required',
    ];

    //Mensajes de las validaciones
    protected $messages = [
        'nombre.required' => 'El nombre es obligatorio.',
        'fecha.required' => 'La fecha es obligatoria.',
        'hora.required' => 'La hora es obligatoria.',
        'descripcion.required' => 'La descripción es obligatoria.',
        'evento.required' => 'El evento es obligatorio.',
        'estado.required' => 'El estado es obligatorio.',
        'unidad.required' => 'La unidad TecnoCientífica es obligatoria.',
    ];

    public function open_add()
    {
        $this->modal_add = true;
    }


    public function open_edit($id)
    {
        // $this->estructura_comite = ModelsEstructuraComite::find($id);
        // $this->cargo_comite = $this->estructura_comite->cargo_comite;
        // $this->descripcion = $this->estructura_comite->descripcion;
        // $this->modal_edit = true;
    }

    public function save()
    {
        $this->validate();

         Alerta::create([
             'nombre' => $this->nombre,
             'fecha' => $this->fecha,
             'hora' => $this->hora,
             'description' => $this->descripcion,
             'evento_id' => $this->evento,
             'unidad_id' => $this->evento,
             'estado' => $this->estado,
         ]);



        $this->reset(['modal_add', 'cargo_comite', 'descripcion']);
    }

    public function update()
    {
        $this->validate();
            $this->estructura_comite->cargo_comite = $this->cargo_comite;
            $this->estructura_comite->descripcion = $this->descripcion;
            $this->estructura_comite->update();

            $this->reset(['modal_edit', 'cargo_comite', 'descripcion']);
    }

    public function delete($id)
    {
        // $estructura = ModelsEstructuraComite::find($id);
        // $estructura->delete();
    }



    public function render()
    {
        $this->unidades = UnidadTecnicoCientifica::all();
        $alerts = Alerta::all();
        return view('livewire.gestion.alerta.show-alerta-gestion', compact('alerts'));
    }
}
