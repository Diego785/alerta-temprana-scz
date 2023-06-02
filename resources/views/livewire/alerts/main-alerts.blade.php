<div>
    {{-- @if ($alerts != [] && $alerts[0]->alerta_envio[0]->estado->color != '') --}}

    <aside
        style="position:fixed; width:100%; background: url({{ $event->foto }}); background-size:cover; background-repeat:no-repeat; background-position: center;"
        class="rounded-lg bg-center bg-slate-900/50">



        <div style="height:700px;" class="p-8 md:py-12 lg:px-4 overflow-auto bg-slate-900/50">
            <div class="mb-2 text-base font-bold flex items-center text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                &nbsp<a>

                    <a href="{{ route('show_alerts') }}" class="hover:underline text-white">Menú</a>&nbsp/&nbsp
                    <a href="{{ route('main_alerts.index', $event->id) }}" class="hover:underline text-white">Alertas de
                        {{ $event->tipoEvento }}</a>

                </a>
            </div>


            <!-- component -->
            <section class="container px-4 mx-auto">
                <div class="sm:flex sm:items-center sm:justify-between">

                    <h2 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2">
                        {{ $event->tipoEvento }}
                    </h2>






                    <div class="flex items-center mt-4 gap-x-3">


                        <a class="flex items-center justify-center w-40 grado border-2 bg-gradient-to-t from-green-400 to-green-900 border-green-300 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-blue-600 hover:text-black"
                            href="{{ route('alerts_list.pdf', $myId) }}">


                            <span>Reporte</span>
                            <svg class="ml-5" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.3333 13.3332L9.99997 9.9999M9.99997 9.9999L6.66663 13.3332M9.99997 9.9999V17.4999M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94616 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.4999H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832"
                                    stroke="currentColor" stroke-width="1.67" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <defs>
                                    <clipPath id="clip0_3098_154395">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>

                    </div>
                </div>

                <div class="mt-6 md:flex md:items-center md:justify-between">
                    <div
                        class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                        <x-jet-button wire:click="justLookAtAll()"
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            Ver todo
                        </x-jet-button>

                        <x-jet-button wire:click="justLookAtCritics()"
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            Crítico
                        </x-jet-button>
                        <x-jet-button wire:click="justLookAtHigh()"
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            Muy alto
                        </x-jet-button>
                        <x-jet-button wire:click="justLookAtModerado()"
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            Moderado
                        </x-jet-button>
                        <x-jet-button wire:click="justLookAtMonitored()"
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            Normal
                        </x-jet-button>
                    </div>
                    <div class="relative flex items-center mt-4 md:mt-0">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </span>

                        <x-jet-input wire:model="search" type="text" placeholder="ID, nombre, fecha, hora"
                            class="block max-w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                </div>


                <!-- component -->
                <div class="mt-6 md:flex md:items-center md:justify-between">

                    <div
                        class="items-center inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                        <select wire:model='perPage'
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            <span class="mr-2 font-bold ">Paginar</span>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>


                    <div
                        class="items-center inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                        <select wire:model='municipio_id'
                            class="px-7 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            <span class="mr-2 font-bold ">Municipios</span>
                            <option value="Todos" class="text-gray-500">Todos</option>
                            @foreach ($municipios as $municipio)
                                <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                @if (sizeOf($alertsP) == 0 || $show_alerts == false)

                    <div
                        class="flex h-screen flex-col items-center justify-center space-y-6 px-4 sm:flex-row sm:space-x-6 sm:space-y-0">
                        <div
                            class="w-full px-5 max-w-sm overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mt-8 h-16 w-16 text-green-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />

                            </svg>
                            <h1 class="mt-2 text-center text-2xl font-bold text-gray-500">¡No hay alertas!</h1>
                            <p class="my-4 text-center text-sm text-gray-500">No tenemos registrada ninguna
                                alerta para este evento en el estado seleccionado.
                            </p>
                            {{-- <div class="space-x-4 bg-gray-100 py-4 text-center">
                        <button
                            class="inline-block rounded-md bg-red-500 px-10 py-2 font-semibold text-red-100 shadow-md duration-75 hover:bg-red-400">Cancel</button>
                        <button
                            class="inline-block rounded-md bg-green-500 px-6 py-2 font-semibold text-green-100 shadow-md duration-75 hover:bg-green-400">Dashboard</button>
                    </div> --}}
                        </div>

                    </div>
                @else
                    <div class="flex flex-col mt-6">
                        <div class="-mx-8 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-green-100 dark:bg-gray-800">
                                            <tr>
                                                <th wire:click="order('id')" scope="col"
                                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <button class="flex items-center gap-x-3 focus:outline-none">
                                                        <span>Id y Nombre</span>

                                                        @if ($sort == 'id')
                                                            @if ($direction == 'asc')
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 inline" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M16 17l-4 4m0 0l-4-4m4 4V3" />
                                                                </svg>
                                                            @else
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 inline" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M8 7l4-4m0 0l4 4m-4-4v18" />
                                                                </svg>
                                                            @endif
                                                        @else
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-6 w-6 inline" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                                            </svg>
                                                        @endif
                                                    </button>
                                                </th>

                                                <th wire:click="order('fecha')" scope="col"
                                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <button class="flex items-center gap-x-3 focus:outline-none">
                                                        <span>Fecha y Hora</span>

                                                        @if ($sort == 'fecha')
                                                            @if ($direction == 'asc')
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 inline" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M16 17l-4 4m0 0l-4-4m4 4V3" />
                                                                </svg>
                                                            @else
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-6 w-6 inline" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M8 7l4-4m0 0l4 4m-4-4v18" />
                                                                </svg>
                                                            @endif
                                                        @else
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-6 w-6 inline" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                                            </svg>
                                                        @endif
                                                    </button>
                                                </th>



                                                <th scope="col"
                                                    class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Descripción
                                                </th>
                                                <th scope="col"
                                                    class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Estado Actual</th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Fotos
                                                </th>


                                                {{-- <th scope="col"
                                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Porcentaje de Riesgo</th> --}}
                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Unidad Tecnocientífica</th>
                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Ver Detalles</th>




                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                            @foreach ($alertsP as $alert)
                                                @if (
                                                    $justLook == $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre ||
                                                        $justLook == 'Ver todo')
                                                    <tr>
                                                        <td class="px-4 py-4 text-sm font-medium">
                                                            <div style="white-space:inherit; width:200px;">
                                                                <h2 class="font-bold text-gray-800 dark:text-white">
                                                                    {{ $alert->id }}
                                                                </h2>
                                                                <p
                                                                    class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                                    {{ $alert->nombre }}</p>
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                            <div>
                                                                <h4 class="text-gray-700 dark:text-gray-200">
                                                                    {{ $alert->fecha }}</h4>
                                                                <h4 class="text-gray-700 dark:text-gray-200">
                                                                    {{ $alert->hora }}</h4>

                                                            </div>
                                                        </td>

                                                        <td class="px-4 py-4 text-sm font-medium">

                                                            <p class="italic text-xs text-gray-600 dark:text-gray-400"
                                                                style="display: block;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis;
                                                                white-space: normal;
                                                                width: 200px;">

                                                                {{ \Illuminate\Support\Str::limit($alert->description, 100, '...') }}
                                                            </p>
                                                        </td>
                                                        <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                            @if ($alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre == 'Crítico')
                                                                <div style="background-color:   {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->color }}"
                                                                    class="inline px-3 py-1 text-sm font-normal rounded-full text-white gap-x-2 dark:bg-gray-800">
                                                                    {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre }}
                                                                </div>
                                                            @elseif($alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre == 'Muy alto')
                                                                <div style="background-color:   {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->color }}"
                                                                    class="inline px-3 py-1 text-sm font-normal rounded-full text-white gap-x-2 dark:bg-gray-800">
                                                                    {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre }}
                                                                </div>
                                                            @elseif($alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre == 'Moderado')
                                                                <div style="background-color:   {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->color }}"
                                                                    class="inline px-3 py-1 text-sm font-normal rounded-full text-gray-900 gap-x-2 bg-alertYellow dark:bg-gray-800">
                                                                    {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre }}
                                                                </div>
                                                            @elseif($alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre == 'Normal')
                                                                <div style="background-color:  {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->color }}"
                                                                    class="inline px-3 py-1 text-sm font-normal rounded-full text-white gap-x-2 bg-alertGreen dark:bg-gray-800">
                                                                    {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre }}
                                                                </div>
                                                            @endif

                                                        </td>

                                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                @if (sizeOf($alert->alerta_envio->where('alerta_id', $alert->id)->last()->image) > 0)
                                                                    @foreach ($alert->alerta_envio->where('alerta_id', $alert->id)->last()->image as $img)
                                                                        <img class="object-cover w-6 h-6 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0"
                                                                            src="{{ $img->path }}" alt="">
                                                                    @endforeach
                                                                @else
                                                                    No hay fotos
                                                                @endif


                                                            </div>
                                                        </td>

                                                        {{-- <td class="px-12 py-4 text-sm whitespace-nowrap">
                                                    <div
                                                        class="w-48 h-1.5 bg-blue-200 overflow-hidden rounded-full">
                                                        <div class="bg-blue-500 w-2/3 h-1.5"></div>
                                                    </div>
                                                </td> --}}
                                                        <td class="px-4 py-4 text-sm font-medium">
                                                            <div style="white-space:inherit; width:200px;"">

                                                                <p
                                                                    class="font-extralight text-gray-600 dark:text-gray-400">
                                                                    {{ $alert->unidad->sigla }}</p>
                                                            </div>
                                                        </td>


                                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                            <a href="{{ route('sending_alerts.index', [$alert->id, $event->id]) }}"
                                                                class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24"
                                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"
                                                                    class="hover:bg-gray-100">
                                                                    <path
                                                                        d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z">
                                                                    </path>
                                                                    <path
                                                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach


                                        </tbody>
                                    </table>
                                    <div class="bg-green-100">
                                        {{ $alertsP->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    {{-- @if ($alerts->hasPages())
                    <div class="px-6 py-3">
                        {{ $alerts->links() }}
                    </div>
                @endif --}}

                @endif



            </section>
        </div>

    </aside>


</div>
