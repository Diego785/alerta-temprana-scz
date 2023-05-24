<?php

namespace App\Http\Livewire\Gestion\Unidad;

use App\Models\UnidadTecnicoCientifica;
use Livewire\Component;


class UnidadTecnocientificaLivewire extends Component
{
    
    public $unidadtecnocientifica;
    public $nombre, $sigla,$telefono,$description,$url_web,$responsable, 
    $clasificacion,$tipo ,$direccion, $puntoX,$puntoY;
    public $modal_add = false;
    public $modal_edit = false;
   // 'nombre', 'sigla', 'telefono', 'description', 'url_web', 'responsable', 'clasificacion', 'tipo', 'direccion', 'puntoX', 'puntoY'

    protected $listeners = ['render', 'delete'];
    protected $rules =[
        'nombre'=>'required', 
                'sigla'=>'required', 
         'telefono'=>'required', 
         'description'=>'required',
          'url_web'=>'required', 
          'responsable'=>'required',
           'clasificacion'=>'required', 
           'tipo'=>'required', 
           'direccion'=>'required',
            'puntoX'=>'required',
             'puntoY'=>'required'
        
    ];
    protected $messages =[       
        'nombre.required'=>'El Nombrees obligatorio',
         'sigla.required'=>'La sigla es obligatorio', 
         'telefono.required'=>'EL telefono es obligatorio', 
         'description.required'=>'La descripcion es obligatorio',
          'url_web.required'=>'El link es obligatorio', 
          'responsable.required'=>'El responsable es obligatorio',
           'clasificacion.required'=>'La clasificacion es obligatorio', 
           'tipo.required'=>'El tipo es obligatorio', 
           'direccion.required'=>'La direccion es obligatorio',
            'puntoX.required'=>'El Punto X es obligatorio',
             'puntoY.required'=>'El Punto Y es obligatorio'
      
    ]; 

    public function open_add()
    {
        $this->modal_add = true;
    }

    public function open_edit($id)
    {
        $this->unidadtecnocientifica = UnidadTecnicoCientifica::find($id);
        $this->nombre = $this->unidadtecnocientifica->nombre;
        $this->sigla = $this->unidadtecnocientifica->sigla;
        $this->telefono = $this->unidadtecnocientifica->telefono;
        $this->description = $this->unidadtecnocientifica->description;
        $this->url_web = $this->unidadtecnocientifica->url_web;
        $this->responsable = $this->unidadtecnocientifica->responsable;
        $this->clasificacion = $this->unidadtecnocientifica->clasificacion;
        $this->tipo = $this->unidadtecnocientifica->tipo;
        $this->direccion = $this->unidadtecnocientifica->direccion;
        $this->puntoX = $this->unidadtecnocientifica->puntoX;
        $this->puntoY = $this->unidadtecnocientifica->puntoY;

        $this->modal_edit = true;
    }
    public function save()
    {
        $this->validate();

        UnidadTecnicoCientifica::create([            
           'nombre'=> $this->nombre,
           'sigla'=> $this->sigla ,
           'telefono'=> $this->telefono ,
           'description'=> $this->description ,
           'url_web'=> $this->url_web ,
           'responsable'=> $this->responsable ,
           'clasificacion'=> $this->clasificacion ,
           'tipo'=> $this->tipo,
           'direccion'=> $this->direccion ,
           'puntoX'=> $this->puntoX ,
           'puntoY'=> $this->puntoY ,
        
        ]);

        $this->reset(['modal_add', 'nombre', 'sigla', 'telefono', 'description', 'url_web', 'responsable', 'clasificacion', 'tipo', 'direccion', 'puntoX', 'puntoY']);
    }
    public function update()
    {
        $this->validate();
                        $this->unidadtecnocientifica->nombre = $this->nombre;
            $this->unidadtecnocientifica->sigla =  $this->sigla ;
            $this->unidadtecnocientifica->telefono= $this->telefono ;
           $this->unidadtecnocientifica->description= $this->description;
           $this->unidadtecnocientifica->url_web= $this->url_web;
           $this->unidadtecnocientifica->responsable= $this->responsable;
           $this->unidadtecnocientifica->clasificacion= $this->clasificacion;
          $this->unidadtecnocientifica->tipo= $this->tipo;
            $this->unidadtecnocientifica->direccion= $this->direccion;
            $this->unidadtecnocientifica->puntoX= $this->puntoX;
            $this->unidadtecnocientifica->puntoY= $this->puntoY;

            $this->unidadtecnocientifica->update();

            $this->reset(['modal_edit', 'nombre', 'sigla', 'telefono', 'description', 'url_web', 'responsable', 'clasificacion', 'tipo', 'direccion', 'puntoX', 'puntoY']);
    }
    
    public function delete($id)
    {
        $unidadtecnocientifica = UnidadTecnicoCientifica::find($id);
        $unidadtecnocientifica->delete();
    }



    
    public function render()
    {
        $unidadtecnocientificas = UnidadTecnicoCientifica::all();
        return view('livewire.gestion.unidad.unidad-tecnocientifica-livewire',compact('unidadtecnocientificas'));
    }
}
