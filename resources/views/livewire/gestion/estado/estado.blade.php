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
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class=" inline-block min-w-full ">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-green-800 border-b">
                            <tr>
                                <th scope="col" class="text-base font-medium text-white px-6 py-4 text-center">
                                    ID
                                </th>
                                <th scope="col" class="text-lg font-medium text-white px-6 py-4 text-center">
                                    Nombre
                                </th>
                                <th scope="col" class="text-lg font-medium text-white px-6 py-4 text-center">
                                    Color
                                </th>
                                <th scope="col" class="text-lg font-medium text-white px-6 py-4 text-center">
                                    
                                </th>
                                <th scope="col" class="text-lg font-medium text-white px-6 py-4 text-center">
                                    Actions
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estados as $estado)
                                <tr class="bg-green-50 border-b text-center">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $estado->id }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                        {{ $estado->nombre }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $estado->color }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <div style="background-color:   {{$estado->color}}"
                                            class="inline px-3 py-1 font-normal rounded-full gap-x-2">
                                            
                                        </div>
                                    </td>
                                    <td class=" my-3 inline-flex justify-center py-4 whitespace-nowrap flex">
                                        <div class="whitespace-nowrap flex">
                                            <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
                                                wire:click="open_edit({{ $estado->id }})">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <a class="font-bold text-white rounded cursor-pointer bg-black hover:bg-red-500 py-2 px-4"
                                                wire:click="$emit('deleteEstado', {{ $estado->id }})">

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
            Añadir Estado:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre asignado al Estado " />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"
                    placeholder='Escriba el nombre' />
                <x-jet-input-error for="nombre" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Color asignado al estado" />
                <x-jet-input type="text" class="w-full" wire:model.defer="color"
                placeholder='Escriba el color' />
                <x-jet-input-error for="color" />

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
            Editar Estado:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre asignado al Estado " />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"
                    placeholder='Escriba el nombre' />
                <x-jet-input-error for="nombre" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Color asignado al estado" />
                <x-jet-input type="text" class="w-full" wire:model.defer="color"
                placeholder='Escriba el color' />
                <x-jet-input-error for="color" />

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
            Livewire.on('deleteEstado',
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

                            Livewire.emitTo('gestion.estado.estado', 'delete', estructuraCodigo)
                        }
                    })
                });
        </script>
    @endpush
</div>
