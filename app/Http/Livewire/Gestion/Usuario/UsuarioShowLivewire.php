<?php

namespace App\Http\Livewire\Gestion\Usuario;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsuarioShowLivewire extends Component
{

    use WithPagination;

    public $search;

    public $listeners = ['delete'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($user)
    {
        $user = User::find($user);
        $user->delete();
    }
    public function assignRole(User $user, $value){    
       if (!$user) {
        // Manejo del error si el usuario no existe
        return;
    }
        $user->syncRoles([$value]);
    }
    public function render()
    {
        $users = User::where('email', '<>', auth()->user()->email)
            ->where(function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%');
                $query->orWhere('email', 'LIKE', '%' . $this->search . '%');
            })->paginate(5);
        return view('livewire..gestion.usuario.usuario-show-livewire', compact('users'));
    }
}
