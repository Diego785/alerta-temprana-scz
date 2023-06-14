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


    <div class="flex justify-between">



        <div class="w-2/3 px-10">

            <x-jet-input type="text" class="w-full" wire:model="" placeholder="Ingrese la fecha, hora" />

        </div>


        <div class="flex items-center gap-x-3 px-10">


            <a class="flex items-center justify-center w-40 grado border-2 bg-gradient-to-t from-[#00733B] to-[#8CBF44] border-green-300 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-blue-600 hover:text-black"
                href="{{ route('show_detail_alert.gestion.report', $main_alert->id) }}">


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


    <div class="mover">
        <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
            wire:click="$toggle('modal_add')"> Crear
        </a>
    </div>



    <!-- component -->
    <div class="flex flex-col">
        <div class="sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 sm:px-6 lg:px-8">
                <table class="table-auto divide-y divide-gray-900 w-full">
                    <thead class="bg-green-800 border-b">
                        <tr>
                            {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                ID
                            </th> --}}

                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Fecha
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Hora
                            </th>
                            <th scope="col"
                                class="cursor-pointer tracking-wider  text-sm font-medium text-white px-6 py-4">
                                Estado
                            </th>
                            <th scope="col" class="tracking-wider  text-sm font-medium text-white px-6 py-4">
                                Descripción
                            </th>
                            <th scope="col" class="tracking-wider  text-sm font-medium text-white px-6 py-4">
                                Recomendación
                            </th>
                            {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Posición X
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Posición Y
                            </th> --}}

                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Mapa
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Video
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Actions
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail_alert as $alert)
                            <tr class="bg-green-50 border-b text-center">


                                {{-- <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $alert->id }}</td> --}}
                                <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->fecha }}
                                </td>
                                <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->hora }}
                                </td>
                                <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->estado->nombre }}
                                </td>
                                <td class="col-span-3 text-sm text-black font-light px-6 py-4">
                                    {{ \Illuminate\Support\Str::limit($alert->description, 80, '...') }}
                                </td>
                                <td class="col-span-3 text-sm text-black font-light px-6 py-4">
                                    {{ \Illuminate\Support\Str::limit($alert->recomendacion, 80, '...') }}
                                </td>

                                {{-- <td class="col-span-3 text-sm text-black font-light px-6 py-4">
                                    {{ $alert->puntoX }}
                                </td>
                                <td class="col-span-3 text-sm text-black font-light px-6 py-4">
                                    {{ $alert->puntoY }}
                                </td> --}}
                                {{-- <td class="text-sm text-black  font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->geoX }}
                                </td>
                                <td class="text-sm  text-black font-light px-6 py-4 whitespace-nowrap">
                                    {{ $alert->geoY }}
                                </td> --}}

                                @if ($alert->url_mapa != null)
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        {{ $alert->url_mapa }}
                                    </td>
                                @else
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        No hay mapa
                                    </td>
                                @endif

                                @if ($alert->video != null)
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        {{ $alert->video }}
                                    </td>
                                @else
                                    <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                                        No hay video
                                    </td>
                                @endif




                                <td class=" my-3 inline-flex justify-center py-14 whitespace-nowrap">
                                    <div class="whitespace-nowrap mx-5 flex">
                                        <a class="font-bold ml-2 text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-2"
                                            wire:click="open_edit({{ $alert->id }})">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        {{-- <a class="font-bold ml-2 text-white rounded cursor-pointer bg-black hover:bg-opacity-50 py-2 px-2"
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
                                        </a> --}}
                                        <a class="font-bold ml-2 text-white rounded cursor-pointer bg-black hover:bg-opacity-50 py-2 px-2"
                                            wire:click="$emit('deleteAlerta', {{ $alert->id }})">

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
                <x-jet-label value="Fecha" />
                <x-jet-input type="date" class="w-full" wire:model.defer="fecha" placeholder='Escriba la Fecha' />
                <x-jet-input-error for="fecha" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Hora" />
                <x-jet-input type="time" class="w-full" wire:model.defer="hora" placeholder='Escriba la Hora' />
                <x-jet-input-error for="hora" />
            </div>

            <div class="mb-4 w-full">
                <x-jet-label value='Estados' />
                <select wire:model='estado_id' style='width: 100%'
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->nombre }} </option>
                    @endforeach
                </select>
                <x-jet-input-error for="estado_id" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Descripción" />
                <textarea wire:model.defer="descripcion"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                    rows="2" placeholder="Escriba la descripción"></textarea>
                <x-jet-input-error for="descripcion" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Recomendación" />
                <textarea wire:model.defer="recomendacion"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                    rows="2" placeholder="Escriba la recomendación"></textarea>
                <x-jet-input-error for="recomendacion" />
            </div>
            <div class="mb-4">
                <x-jet-label value="URL Mapa" />
                <x-jet-input type="text" class="w-full" wire:model.defer="url_mapa"
                    placeholder='Escriba la URL del mapa.' />
            </div>
            <div class="mb-4">
                <x-jet-label value="Video" />
                <x-jet-input type="text" class="w-full" wire:model.defer="url_mapa"
                    placeholder='Escriba la dirección del video.' />
            </div>

            {{-- <div class="mb-4">
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
                <x-jet-label value='Eventos' />
                <select wire:model='evento_id' style='width: 100%'
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                    @foreach ($eventos as $evento)
                        <option value="{{ $evento->id }}">{{ $evento->tipoEvento }} </option>
                    @endforeach
                </select>
                <x-jet-input-error for="evento_id" />
            </div>

            <div class="mb-4 w-full">
                <x-jet-label value='Sigla de la Unidad Tecnocientífica' />
                <select wire:model='unidad_id' style='width: 100%'
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                    @foreach ($unidades as $unidad)
                        <option value="{{ $unidad->id }}">{{ $unidad->sigla }} </option>
                    @endforeach
                </select>
                <x-jet-input-error for="unidad_id" />
            </div> --}}

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

    {{--  
    <x-jet-dialog-modal wire:model="modal_edit">

        <x-slot name="title">
            Editar Estructura del Comité:
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
                <x-jet-label value='Eventos' />
                <select wire:model='evento_id' style='width: 100%'
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                    @foreach ($eventos as $evento)
                        <option value="{{ $evento->id }}">{{ $evento->tipoEvento }} </option>
                    @endforeach
                </select>
                <x-jet-input-error for="evento_id" />
            </div>

            <div class="mb-4 w-full">
                <x-jet-label value='Sigla de la Unidad Tecnocientífica' />
                <select wire:model='unidad_id' style='width: 100%'
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                    @foreach ($unidades as $unidad)
                        <option value="{{ $unidad->id }}">{{ $unidad->sigla }} </option>
                    @endforeach
                </select>
                <x-jet-input-error for="unidad_id" />
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

 --}}


    @push('js')
        <script>
            Livewire.on('deleteAlerta',
                alertaCodigo => {
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

                            Livewire.emitTo('gestion.alerta.show-detail-alerta-gestion', 'delete', alertaCodigo)
                        }
                    })
                });
        </script>

        <script>
            Livewire.on('showMessageResult', () => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tienes datos de otras tablas referenciados a esta alerta!',
                    footer: '<a href="">¿Por qué tengo este error?</a>'
                });
            });
        </script>
    @endpush
</div>
