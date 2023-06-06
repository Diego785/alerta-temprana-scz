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

    <div class="flex justify-between">



        <div class="w-2/3 px-10">

            <x-jet-input type="text" class="w-full" wire:model="search" placeholder="Ingrese el nombre, fecha, hora" />

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

    @if (count($municipios))
        <!-- component -->
        <div class="flex flex-col">
            <div class="sm:mx-0.5 lg:mx-0.5">
                <div class="py-2 sm:px-6 lg:px-8">
                    <table class="table-auto divide-y divide-gray-900 w-full">
                        <thead class="bg-green-800 border-b">
                            <tr>
                                <th scope="col" class="text-base font-medium text-white px-6 py-4 text-center">
                                    ID
                                </th>
                                <th scope="col" class="text-base font-medium text-white px-6 py-4 text-center">
                                    Nombre
                                </th>
                                <th scope="col" class="text-base font-medium text-white px-6 py-4 text-center">
                                    Provincia
                                </th>
                                <th scope="col" class="text-base font-medium text-white px-6 py-4 text-center">
                                    Actions
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($municipios as $municipio)
                                <tr class="bg-green-50 border-b text-center">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $municipio->id }}</td>
                                    <td class="text-sm text-gray-900 font-light px-10 py-3 whitespace-nowrap">
                                        {{ $municipio->nombre }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-10 py-3 whitespace-nowrap">
                                        {{ $municipio->provincia }}
                                    </td>


                                    <td class=" my-3 inline-flex justify-center py-3 whitespace-nowrap">
                                        <div class="whitespace-nowrap mx-5 flex">
                                            <a class="font-bold ml-2 text-white rounded cursor-pointer bg-green-600 hover:bg-green py-2 px-2"
                                                wire:click="open_edit({{ $municipio->id }})">


                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>


                                            <a class="font-bold ml-2 text-white rounded cursor-pointer bg-black hover:bg-opacity-50 py-2 px-2"
                                                wire:click="$emit('deletemunicipio', {{ $municipio->id }})">

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
    @else
        <div class="px-6 py-4">
            No hay ningun registro
        </div>
    @endif
    @if ($municipios->hasPages())
        <div class="px-10 py-4">
            {{ $municipios->links() }}
        </div>
    @endif




    <x-jet-dialog-modal wire:model="modal_add">

        <x-slot name="title">
            Añadir Municipio:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre :" />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"
                    placeholder='Escriba el nombre del municipio' />
                <x-jet-input-error for="nombre" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Provincia :" />
                <x-jet-input type="text" class="w-full" wire:model.defer="provincia"
                    placeholder='Escriba la provincia' />
                <x-jet-input-error for="provincia" />

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
            Editar Municipio:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre del municipio" />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"
                    placeholder='Escriba el nombre' />
                <x-jet-input-error for="nombre" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Provincia del municipio" />
                <x-jet-input type="text" class="w-full" wire:model.defer="provincia"
                    placeholder='Escriba la provincia' />
                <x-jet-input-error for="provincia" />

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
            Livewire.on('deletemunicipio',
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

                            Livewire.emitTo('gestion.municipio.municipio-livewire', 'delete', estructuraCodigo)
                        }
                    })
                });
        </script>
    @endpush
</div>
