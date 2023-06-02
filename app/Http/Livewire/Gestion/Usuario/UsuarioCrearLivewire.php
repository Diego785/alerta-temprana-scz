<?php

namespace App\Http\Livewire\Gestion\Usuario;

use App\Models\User;
use Livewire\Component;

class UsuarioCrearLivewire extends Component
{
    public $name,$email,$password;  

    

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|unique:users',
        'password' => 'required'
    ];  

    public function save(){
        $this->validate(); 
        $user = new User();
        $user->name = $this->name;       
        $user->email = $this->email;
        $user->password = bcrypt($this->password); 
        $user->save();
        $user->assignRole('operador'); 
        $this->emit('saved');
        return redirect()->route('show_usuarios');
    }

    public function render()
    {
        return view('livewire..gestion.usuario.usuario-crear-livewire');
    }
}
