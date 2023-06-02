<?php

namespace App\Http\Livewire\Gestion\Municipio;

use App\Models\Municipio;
use Livewire\Component;
use Livewire\WithPagination;

class MunicipioLivewire extends Component
{
    use WithPagination;
    public $search;
    public $municipio,$nombre, $provincia;
    public $modal_add = false;
    public $modal_edit = false;
    
    protected $listeners = ['render', 'delete'];
    protected $rules =[
        'nombre'=>'required', 
        'provincia'=>'required',
        
    ];
    protected $messages =[
        'nombre.required'=>'El Nombre es obligatorio', 
        'provincia.required'=>'La Provincia es obligatorio',
      
    ];
    
    public function open_add()
    {
        $this->modal_add = true;
    }

    public function open_edit($id)
    {
        $this->municipio = Municipio::find($id);
        $this->nombre = $this->municipio->nombre;
        $this->provincia = $this->municipio->provincia;
      
        $this->modal_edit = true;
    }
    public function save()
    {
        $this->validate();

        Municipio::create([        
            'nombre'=>$this->nombre, 
            'provincia'=>$this->provincia,
        
        ]);

        $this->reset(['modal_add', 'nombre', 'provincia']);
    }
    public function update()
    {
        $this->validate();
            $this->municipio->nombre = $this->nombre;
            $this->municipio->provincia = $this->provincia;
            $this->municipio->update();

            $this->reset(['modal_edit', 'nombre', 'provincia']);
    }
    
    public function delete($id)
    {
        $municipio = Municipio::find($id);
        $municipio->delete();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        //$municipios = Municipio::all();
        $municipios = Municipio::where(function ($query) {
            $query->where('id', 'like', '%' . $this->search . '%')
                ->orWhere('nombre', 'like', '%' . $this->search . '%')
                ->orWhere('provincia', 'like', '%' . $this->search . '%');
        })->paginate(5);
        return view('livewire..gestion.municipio.municipio-livewire',compact('municipios'));
    }
}
