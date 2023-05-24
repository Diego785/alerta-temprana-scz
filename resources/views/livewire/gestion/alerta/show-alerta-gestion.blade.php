<div>
    <!-- component -->
    <!-- component -->
    <style>
        .mover {
            position: fixed;
            top: 100px;
            left: 60px;
        }
    </style>





    <div class="mover">
        <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
            wire:click="$toggle('modal_add')"> Crear
        </a>
    </div>



    <!-- component -->
    <div class="flex flex-col">
        <div class="sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <table class="table-auto divide-y divide-gray-900">
                    <thead class="bg-gray-700 border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                ID
                            </th>
                            <th scope="col"
                                class="cursor-pointer tracking-wider text-sm font-medium text-white px-6 py-4 text-left">
                                Nombre
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Fecha
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Hora
                            </th>
                            <th scope="col"
                                class="cursor-pointer tracking-wider  text-sm font-medium text-white px-6 py-4 text-left">
                                Descripción
                            </th>
                            {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Posición X
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Posición Y
                            </th> --}}
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Estado
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Evento
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Unidad
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Actions
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alerts as $alert)
                            <tr class="bg-gray-200 border-b">
                                <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $alert->id }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-2">
                                    {{ $alert->nombre }}
                                </td>
                                <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->fecha }}
                                </td>
                                <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->hora }}
                                </td>
                                <td class="col-span-3 text-sm text-black font-light px-6 py-4">
                                    {{ \Illuminate\Support\Str::limit($alert->description, 80, '...') }}
                                </td>
                                {{-- <td class="text-sm text-black  font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->geoX }}
                                </td>
                                <td class="text-sm  text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->geoY }}
                                </td> --}}
                                <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->estado }}
                                </td>
                                <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->evento->tipoEvento }}
                                </td>
                                <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->unidad->sigla }}
                                </td>


                                <td class=" my-3 inline-flex justify-center py-4 whitespace-nowrap">
                                    <div class="whitespace-nowrap mx-5 flex">
                                        <a class="font-bold ml-2 text-white rounded cursor-pointer bg-black hover:bg-opacity-50 py-2 px-2"
                                            wire:click="">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <a class="font-bold ml-2 text-white rounded cursor-pointer bg-black hover:bg-opacity-50 py-2 px-2"
                                            wire:click="">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">

                                                <path
                                                    d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z">
                                                </path>
                                                <path
                                                    d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a class="font-bold ml-2 text-white rounded cursor-pointer bg-black hover:bg-opacity-50 py-2 px-2"
                                            wire:click="">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                </path>
                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>





        <x-jet-dialog-modal wire:model="modal_add">

            <x-slot name="title">
                Añadir Alerta:
            </x-slot>

            <x-slot name="content">

                <div class="mb-4">
                    <x-jet-label value="Nombre" />
                    <x-jet-input type="text" class="w-full" wire:model.defer="nombre"
                        placeholder='Escriba el nombre' />
                    <x-jet-input-error for="nombre" />
                </div>
                
                <div class="mb-4">
                    <x-jet-label value="Fecha" />
                    <x-jet-input type="date" class="w-full" wire:model.defer="fecha"
                        placeholder='Escriba la Fecha' />
                    <x-jet-input-error for="fecha" />
                </div>

                <div class="mb-4">
                    <x-jet-label value="Hora" />
                    <x-jet-input type="time" class="w-full" wire:model.defer="hora"
                        placeholder='Escriba la Hora' />
                    <x-jet-input-error for="hora" />
                </div>

                <div class="mb-4">
                    <x-jet-label value="Descripción" />
                    <textarea wire:model.defer="descripcion"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                        rows="2" placeholder="Escriba la descripción"></textarea>
                    <x-jet-input-error for="descripcion" />
                </div>

                <div class="mb-4">
                    <x-jet-label value='Estado' />
                    <select
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                        wire:model.defer='estadoServicio'>
                        <option value="Abierta">Abierta</option>
                        <option value="Cerrada">Cerrada</option>
                    </select>
                    <x-jet-input-error for="estadoServicio" />
                </div>

                <div class="mb-4 w-full">
                    <x-jet-label value='Sigla de la Unidad Tecnocientífica' />
                    <select wire:model='unidades' style='width: 100%'
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                        @foreach ($unidades as $unidad)
                            <option value="{{ $unidad->id }}">{{ $unidad->sigla }} </option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="unidades" />
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('modal_add', false)" wire:loading.attr="disabled">
                    Cancelar
                </x-jet-secondary-button>
                <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save"
                    class="disabled:opacity-25 bg-black">
                    Guardar
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>


    {{-- <x-jet-dialog-modal wire:model="modal_edit">

        <x-slot name="title">
            Editar Estructura del Comité:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre de Cargo del Comité" />
                <x-jet-input type="text" class="w-full" wire:model.defer="cargo_comite"
                    placeholder='Escriba el cargo' />
                <x-jet-input-error for="cargo_comite" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Descripción de la Estructura del Comité" />
                <textarea wire:model.defer="descripcion"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                    rows="2" placeholder="   Escriba la descripción"></textarea>
                <x-jet-input-error for="descripcion" />

            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('modal_edit', false)" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update"
                class="disabled:opacity-25 bg-black">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal> --}}




    @push('js')
        <script>
            Livewire.on('deleteEstructura',
                estructuraCodigo => {
                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "Los datos se borrarán permanentemente",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '!Sí, eliminar!'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            Livewire.emitTo('gestion.comite.estructura-comite', 'delete', estructuraCodigo)
                        }
                    })
                });
        </script>
    @endpush
</div>
