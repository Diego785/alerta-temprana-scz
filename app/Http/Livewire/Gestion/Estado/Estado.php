<?php

namespace App\Http\Livewire\Gestion\Estado;

use App\Models\Estado as ModelsEstado;
use Livewire\Component;

class Estado extends Component
{
    public $estado,$nombre, $color;
    public $modal_add = false;
    public $modal_edit = false;

    protected $listeners = ['render', 'delete'];
    protected $rules =[
        'nombre'=>'required', 
        'color'=>'required',
        
    ];
    protected $messages =[
        'nombre.required'=>'El Nombre es obligatorio', 
        'color.required'=>'El color es obligatorio',
      
    ]; 

    public function open_add()
    {
        $this->modal_add = true;
    }

    public function open_edit($id)
    {
        $this->estado = ModelsEstado::find($id);
        $this->nombre = $this->estado->nombre;
        $this->color = $this->estado->color;
      
        $this->modal_edit = true;
    }
    public function save()
    {
        $this->validate();

        ModelsEstado::create([        
            'nombre'=>$this->nombre, 
            'color'=>$this->color,
        
        ]);

        $this->reset(['modal_add', 'nombre', 'color']);
    }
    public function update()
    {
        $this->validate();
            $this->estado->nombre = $this->nombre;
            $this->estado->color = $this->color;
            $this->estado->update();

            $this->reset(['modal_edit',  'nombre', 'color']);
    }
    
    public function delete($id)
    {
        $estado = ModelsEstado::find($id);
        $estado->delete();
    }

    public function render()
    {
        $estados = ModelsEstado::all();
        return view('livewire.gestion.estado.estado',compact('estados'));
    }
}
