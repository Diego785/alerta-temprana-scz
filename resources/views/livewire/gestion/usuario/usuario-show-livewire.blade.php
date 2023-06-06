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
        <div class="flex justify-between">



            <div class="w-2/3 px-10">

                <x-jet-input type="text" class="w-full" wire:model="search"
                    placeholder="Ingrese el nombre, fecha, hora" />

            </div>


            <div class="flex items-center gap-x-3 px-10">


                <a class="flex items-center justify-center w-40 grado border-2 bg-gradient-to-t from-green-400 to-green-900 border-green-300 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-blue-600 hover:text-black"
                    href="">


                    <span>Reporte</span>
                    <svg class="ml-5" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.3333 13.3332L9.99997 9.9999M9.99997 9.9999L6.66663 13.3332M9.99997 9.9999V17.4999M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94616 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.4999H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832"
                            stroke="currentColor" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                        <defs>
                            <clipPath id="clip0_3098_154395">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>

            </div>
        </div>


        @if (count($users))
            {{-- Tabla de Usuarios --}}
            <div class="flex flex-col">
                <div class="sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 sm:px-6 lg:px-8">
                        <table class="table-auto divide-y divide-gray-200 w-full"
                            style="margin-left: auto; margin-right: auto">
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
                                                    value="operador" type="radio" name="{{ $user->email }}"
                                                    wire:change="assignRole({{ $user->id }}, $event.target.value)">
                                                Operador
                                            </label>
                                            <label>
                                                <input
                                                    {{ $user->roles->first()->name == 'administrador' ? 'checked' : '' }}
                                                    value="administrador" type="radio" name="{{ $user->email }}"
                                                    wire:change="assignRole({{ $user->id }}, $event.target.value)">
                                                Administrador
                                            </label>


                                            <label class="ml-2">
                                                <input
                                                    {{ $user->roles->first()->name == 'Superadministrador' ? 'checked' : '' }}
                                                    value="Superadministrador" type="radio"
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
                    </div>
                </div>
            </div>
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
