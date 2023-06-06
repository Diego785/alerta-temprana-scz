<div>
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

    @if (count($unidadtecnocientificas))
        <!-- This is an example component -->
        @foreach ($unidadtecnocientificas as $unidad)
            <div class='flex items-center justify-center py-5'>
                <div class="rounded-xl border p-5 border-black shadow-md w-9/12 bg-white">
                    <div class="flex w-full items-center justify-between border-b pb-3">
                        <div class="flex items-center space-x-3">

                            <div class="text-lg font-bold text-slate-700">{{ $unidad->nombre }}</div>
                        </div>
                        <div class="flex items-center space-x-8">
                            <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
                                wire:click="open_edit({{ $unidad->id }})">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                            <a class="font-bold text-white rounded cursor-pointer bg-black hover:bg-red-500 py-2 px-4"
                                wire:click="$emit('deleteunidad', {{ $unidad->id }})">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                    <path
                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                    </path>
                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="mt-4 mb-6">
                        <div class="mb-3 text-base font-semibold">Telefono: {{ $unidad->telefono }}</div>
                        <div class="mb-3 text-base font-semibold">Responsable: {{ $unidad->responsable }}</div>
                        <div class="mb-3 text-base font-semibold">Clasificacion :{{ $unidad->clasificacion }} </div>
                        <div class="mb-3 text-base font-semibold">Tipo: {{ $unidad->tipo }}</div>
                        <div class="mb-3 text-base font-semibold">
                            Web: <a href="{{ $unidad->url_web }}" target="_blank">{{ $unidad->url_web }}</a>
                        </div>


                        <div class="mb-3 text-base font-semibold">Direccion: {{ $unidad->direccion }}</div>
                        <div class="text-sm text-neutral-600">{{ $unidad->description }} </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between text-slate-500">
                            <div class="flex space-x-4 md:space-x-8">
                                <div class="flex cursor-pointer items-center transition hover:text-slate-600">

                                    <span>Longitud: {{ $unidad->puntoX }} </span>
                                </div>
                                <div class="flex cursor-pointer items-center transition hover:text-slate-600">

                                    <span>Latitud: {{ $unidad->puntoY }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="px-6 py-4">
            No hay ningun registro
        </div>
    @endif
    <!-- component -->
    @if ($unidadtecnocientificas->hasPages())
        <div class="px-10 py-4">
            {{ $unidadtecnocientificas->links() }}
        </div>
    @endif


    <x-jet-dialog-modal wire:model="modal_add">

        <x-slot name="title">
            Añadir Unidad Tecnocientifica:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre:  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre" placeholder='Escriba el nombre' />
                <x-jet-input-error for="nombre" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Sigla:  " />
                <x-jet-input type="text" class="w-full" wire:model.defer="sigla" placeholder='Escriba la sigla' />
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

                            Livewire.emitTo('gestion.unidad.unidad-tecnocientifica-livewire', 'delete',
                                estructuraCodigo)
                        }
                    })
                });
        </script>
    @endpush
</div>
