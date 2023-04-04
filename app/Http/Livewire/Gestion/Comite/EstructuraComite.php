<?php

namespace App\Http\Livewire\Gestion\Comite;

use App\Models\EstructuraComite as ModelsEstructuraComite;
use Livewire\Component;

class EstructuraComite extends Component
{
    public $estructura_comite, $cargo_comite, $descripcion;
    public $modal_add = false;
    public $modal_edit = false;

    protected $listeners = ['render', 'delete'];


    //Validaciones del formulario
    protected $rules = [
        'cargo_comite' => 'required',
        'descripcion' => 'required'
    ];

    //Mensajes de las validaciones
    protected $messages = [
        'cargo_comite.required' => 'El cargo es obligatorio.',
        'descripcion.required' => 'La descripcion es obligatoria.',
    ];

    public function open_add()
    {
        $this->modal_add = true;
    }
   

    public function open_edit($id)
    {
        $this->estructura_comite = ModelsEstructuraComite::find($id);
        $this->cargo_comite = $this->estructura_comite->cargo_comite;
        $this->descripcion = $this->estructura_comite->descripcion;
        $this->modal_edit = true;
    }

    public function save()
    {
        $this->validate();
        ModelsEstructuraComite::create([
            'cargo_comite' => $this->cargo_comite,
            'descripcion' => $this->descripcion,
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

    public function delete($id){
        $estructura = ModelsEstructuraComite::find($id);
        $estructura->delete();
    }


    public function render()
    {
        $estructuras = ModelsEstructuraComite::all();
        return view('livewire.gestion.comite.estructura-comite' , compact('estructuras'));
    }
}
