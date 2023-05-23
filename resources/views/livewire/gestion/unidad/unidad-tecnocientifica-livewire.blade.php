<div>
    <!-- component -->
    <!-- component -->
    <style>
        .mover {
            position: absolute;
            top: 100px;
            left: 60px;
        }
    </style>
    <td class="inline-flex justify-center  whitespace-nowrap flex">

        <div class="mover">
            <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
                wire:click="$toggle('modal_add')"> Crear
            </a>
        </div>


    </td>

    <!-- component -->
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 ">
            <div class=" inline-block min-w-full ">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-green-800 border-b">
                            <tr>
                                {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    ID
                                </th> --}}
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Nombre
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Sigla
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Telefono
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Descripcion 
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Web
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Responsable
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Clasificacion
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Tipo 
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Direccion
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                   Longitud
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                   Latitud
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unidadtecnocientificas as $unidad)
                                <tr class="bg-green-50 border-b text-center">                                  
                                   
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-normal">
                                        {{ $unidad->nombre }}
                                    </td>
                                    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $unidad->sigla }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $unidad->telefono }}</td>
                                     <td class="text-sm text-gray-900 font-light px-6 py-2 wwhitespace-normal">
                                        {{ $unidad->description }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-normal">
                                        {{ $unidad->url_web }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $unidad->responsable }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{ $unidad->clasificacion }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $unidad->tipo }}
                                    </td>
                                    <td class="px-6 py-2 whitespace-normal text-sm font-medium text-gray-900">
                                        {{ $unidad->direccion }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{ $unidad->puntoX }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $unidad->puntoY }}
                                    </td>
                                                                      <td class=" my-3 inline-flex justify-center py-4 whitespace-nowrap flex">
                                        <div class="whitespace-nowrap flex">
                                            <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
                                                wire:click="open_edit({{ $unidad->id }})">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <a class="font-bold text-white rounded cursor-pointer bg-black hover:bg-red-500 py-2 px-4"
                                                wire:click="$emit('deleteunidad', {{ $unidad->id }})">

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
    </div> 


    <x-jet-dialog-modal wire:model="modal_add">

        <x-slot name="title">
            Añadir Unidad Tecnocientifica:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre:  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"
                    placeholder='Escriba el nombre' />
                <x-jet-input-error for="nombre" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Sigla:  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="sigla"
                    placeholder='Escriba la sigla' />
                <x-jet-input-error for="sigla" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Numero: " />
                <x-jet-input type="number" class="w-full" wire:model.defer="telefono"
                placeholder='Escriba el Telefono' />
                <x-jet-input-error for="telefono" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Descripcion :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="description"
                    placeholder='Escriba una descripcion ' />
                <x-jet-input-error for="description" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Pagina Web:  " />
                <x-jet-input type="url" class="w-full" wire:model.defer="url_web"
                    placeholder='Escriba una descripcion ' />
                <x-jet-input-error for="url_web" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Responsable :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="responsable"
                    placeholder='Escriba al responsable  ' />
                <x-jet-input-error for="responsable" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Clasificacion :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="clasificacion"
                    placeholder='Escriba su clasificacion   ' />
                <x-jet-input-error for="clasificacion" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Tipo :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="tipo"
                    placeholder='Escriba su clasificacion   ' />
                <x-jet-input-error for="tipo" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Direccion  :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="direccion"
                    placeholder='Escriba la ubicacion' />
                <x-jet-input-error for="direccion" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Longitud  :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="puntoX"
                    placeholder='Escriba la longitud' />
                <x-jet-input-error for="puntoX" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Latitud  :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="puntoY"
                    placeholder='Escriba la latitud' />
                <x-jet-input-error for="puntoy" />
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

    <x-jet-dialog-modal wire:model="modal_edit">

        <x-slot name="title">
            Editar Unidad Tecnocientifica:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre:  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"
                    placeholder='Escriba el nombre' />
                <x-jet-input-error for="nombre" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Sigla:  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="sigla"
                    placeholder='Escriba la sigla' />
                <x-jet-input-error for="sigla" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Numero: " />
                <x-jet-input type="number" class="w-full" wire:model.defer="telefono"
                placeholder='Escriba el Telefono' />
                <x-jet-input-error for="telefono" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Descripcion :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="description"
                    placeholder='Escriba una descripcion ' />
                <x-jet-input-error for="description" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Pagina Web:  " />
                <x-jet-input type="url" class="w-full" wire:model.defer="url_web"
                    placeholder='Escriba una descripcion ' />
                <x-jet-input-error for="url_web" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Responsable :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="responsable"
                    placeholder='Escriba al responsable  ' />
                <x-jet-input-error for="responsable" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Clasificacion :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="clasificacion"
                    placeholder='Escriba su clasificacion   ' />
                <x-jet-input-error for="clasificacion" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Tipo :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="tipo"
                    placeholder='Escriba su clasificacion   ' />
                <x-jet-input-error for="tipo" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Direccion  :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="direccion"
                    placeholder='Escriba la ubicacion' />
                <x-jet-input-error for="direccion" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Longitud  :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="puntoX"
                    placeholder='Escriba la longitud' />
                <x-jet-input-error for="puntoX" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Latitud  :  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="puntoY"
                    placeholder='Escriba la latitud' />
                <x-jet-input-error for="puntoy" />
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
    </x-jet-dialog-modal>




    @push('js')
        <script>
            Livewire.on('deleteunidad',
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

                            Livewire.emitTo('gestion.unidad.unidad-tecnocientifica-livewire', 'delete', estructuraCodigo)
                        }
                    })
                });
        </script>
    @endpush
</div>

