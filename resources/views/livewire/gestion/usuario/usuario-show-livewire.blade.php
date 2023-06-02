<div>
    <div class="flex  px-10">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            Lista de Usuarios
        </h2>
        <div class="px-10">
            <a type="button" href="{{ route('crear_usuarios') }}"
                class="p-sm inline-block px-6 py-2 border-2 border-green-500 text-green-500 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                Agregar Usuario
            </a>
        </div>

    </div>


    <div class="container py-10 px-10">

        {{-- Buscador --}}
        <div class="px-6 py-4">

            <x-jet-input type="text" class="w-full" wire:model="search"
                placeholder="Ingrese el nombre, edad, email, telefono o edad  del Usuario que desea buscar" />
        </div>


        @if (count($users))
            {{-- Tabla de Usuarios --}}
            <table class="divide-y divide-gray-200" style="margin-left: auto; margin-right: auto">
                <thead class="bg-gray-50">
                    <tr>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Rol
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Change
                        </th>
                        <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                       
                    </th>

                        {{-- <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Editar</span>
                                </th> --}}

                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach ($users as $user)
                        <tr wire:key="{{ $user->email }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $user->name }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $user->email }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="text-sm text-gray-900">
                                    {{ $user->roles->first()->name }}
                                </div>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <label>
                                    <input {{ $user->roles->first()->name == 'operador' ? 'checked' : '' }} 
                                        value="operador"
                                        type="radio"
                                        name="{{ $user->email }}"
                                        wire:change="assignRole({{ $user->id }}, $event.target.value)">
                                    Operador
                                </label>
                                <label>
                                    <input {{ $user->roles->first()->name == 'administrador' ? 'checked' : '' }} 
                                        value="administrador"
                                        type="radio"
                                        name="{{ $user->email }}"
                                        wire:change="assignRole({{ $user->id }}, $event.target.value)">
                                    Administrador
                                </label>
                               
                              
                                <label class="ml-2">
                                    <input {{ $user->roles->first()->name == 'Superadministrador' ? 'checked' : ''  }}
                                        value="Superadministrador"
                                        type="radio"
                                        name="{{ $user->email }}"
                                        wire:change="assignRole({{ $user->id }}, $event.target.value)">
                                    Super Admin
                                </label>
                            </td>

                            {{-- ELIMINAR --}}
                            <td class="px-4 py-2  whitespace-nowrap text-right text-sm font-medium">

                                <a class="text-red-500 hover:text-red-900 cursor-pointer"
                                    wire:click="$emit('deleteUser',{{ $user->id }})">
                                    Eliminar
                                </a>

                            </td>

                        </tr>
                    @endforeach
                    <!-- More people... -->


                </tbody>
            </table>
        @else
            <div class="px-6 py-4">
                No hay ningun registro que coincida
            </div>

        @endif


        {{-- Paginacion de Usuarios --}}
        @if ($users->hasPages())
            <div class="px-6 py-4">
                {{ $users->links() }}
            </div>
        @endif







    </div>


    @push('js')
        <script>
            Livewire.on('deleteUser', user => {

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "Los datos se borraran permanentemente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('gestion.usuario.usuario-show-livewire', 'delete', user);
                        Swal.fire(
                            'Borrado!',
                            'El registro ha sido eliminado.',
                            'success'
                        )
                    }
                })

            })
        </script>
    @endpush


</div>
