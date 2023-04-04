<div>
    <!-- component -->
    <!-- component -->
    <td class=" my-3 inline-flex justify-center px-6 py-4 whitespace-nowrap flex">

        <div class="whitespace-nowrap flex">
            <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
                wire:click="$toggle('modal_add')">


                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(255, 255, 255, 1 );transform: ;msFilter:;">
                    <path d="M15 2.013H9V9H2v6h7v6.987h6V15h7V9h-7z"></path>
                </svg>
            </a>

        </div>


    </td>

    <!-- component -->
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Cargo
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Description
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Actions
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estructuras as $estructura)
                                <tr class="bg-gray-100 border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $estructura->cargo_comite }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $estructura->descripcion }}
                                    </td>
                                    <td class=" my-3 inline-flex justify-center px-6 py-4 whitespace-nowrap flex">
                                        <div class="whitespace-nowrap flex">
                                            <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
                                                wire:click="open_edit({{ $estructura->id }})">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <a class="font-bold text-white rounded cursor-pointer bg-red-600 hover:bg-red-500 py-2 px-4"
                                                wire:click="$emit('deleteEstructura', {{ $estructura->id }})">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
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
            Añadir Estructura del Comité:
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
    </x-jet-dialog-modal>




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