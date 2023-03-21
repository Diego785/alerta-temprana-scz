<div>
    <aside
        style="background: url({{ $event->foto }}); background-size:cover; background-repeat:no-repeat; background-position: center;"
        class="overflow-hidden rounded-lg bg-center bg-no-repeat bg-cover bg-slate-900/50">
        <div class=" p-8 md:py-12 lg:px-4 bg-slate-900/50">
            <!-- component -->
            <section class="container px-4 mx-auto">
                <div class="sm:flex sm:items-center sm:justify-between">
                    {{-- <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Customers</h2>

                    <span
                        class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">240
                        vendors</span>
                </div>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">These companies have purchased in the last 12
                    months.</p>
            </div> --}}

                    <div class="flex items-center mt-4 gap-x-3">


                        <button
                            class="flex items-center justify-center w-40 grado border-2 bg-gradient-to-t from-green-400 to-green-900 border-green-300 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-blue-600 hover:text-black">

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
                        </button>

                    </div>
                </div>

                <div class="mt-6 md:flex md:items-center md:justify-between">
                    <div
                        class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                        <button
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                            Ver todo
                        </button>

                        <button
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            Críticos
                        </button>

                        <button
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            Monitoreados
                        </button>
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

                        <input type="text" placeholder="Busca por el nombre o el ID"
                            class="block max-w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <div class="-mx-8 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-green-100 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <button class="flex items-center gap-x-3 focus:outline-none">
                                                    <span>Id y Nombre</span>

                                                    <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.1" />
                                                        <path
                                                            d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.1" />
                                                        <path
                                                            d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.3" />
                                                    </svg>
                                                </button>
                                            </th>

                                            <th scope="col"
                                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <button class="flex items-center gap-x-3 focus:outline-none">
                                                    <span>Fecha y Hora</span>

                                                    <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.1" />
                                                        <path
                                                            d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.1" />
                                                        <path
                                                            d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.3" />
                                                    </svg>
                                                </button>
                                            </th>

                                            <th scope="col"
                                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Evento</th>

                                            <th scope="col"
                                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Description
                                            </th>
                                            <th scope="col"
                                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Estado Actual</th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Fotos
                                            </th>


                                            <th scope="col"
                                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Porcentaje de Riesgo</th>
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
                                        @foreach ($alerts as $alert)
                                            <tr>
                                                <td class="px-4 py-4 text-sm font-medium">
                                                    <div style="white-space:inherit; width:200px;"">
                                                        <h2 class="font-bold text-gray-800 dark:text-white" ">{{ $alert->id }}
                                                </h2>
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                    {{ $alert->nombre }}</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            <div>
                                                <h4 class="text-gray-700 dark:text-gray-200">{{ $alert->fecha }}</h4>
                                                <p class="text-gray-500 dark:text-gray-400">{{ $alert->hora }}</p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-md font-medium">
                                            <div style="white-space:inherit; width:200px;"">

                                                            <p class="font-semibold text-gray-600 dark:text-gray-400">
                                                                {{ $alert->evento->tipoEvento }}</p>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-4 text-sm font-medium">
                                                    <div style="white-space:inherit; width:200px;"">

                                                        <p class="italic text-xs text-gray-600 dark:text-gray-400">
                                                            {{ $alert->description }}</p>
                                                    </div>
                                                </td>
                                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                    <div
                                                        class="inline px-3 py-1 text-sm font-normal rounded-full text-gray-300 gap-x-2 bg-[{{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->color }}] dark:bg-gray-800">
                                                        {{ $alert->alerta_envio->where('alerta_id', $alert->id)->last()->estado->nombre }}
                                                    </div>
                                                </td>

                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <img class="object-cover w-6 h-6 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0"
                                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=256&q=80"
                                                            alt="">
                                                        <img class="object-cover w-6 h-6 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0"
                                                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=256&q=80"
                                                            alt="">
                                                        <img class="object-cover w-6 h-6 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0"
                                                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1256&q=80"
                                                            alt="">
                                                        <img class="object-cover w-6 h-6 -mx-1 border-2 border-white rounded-full dark:border-gray-700 shrink-0"
                                                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=256&q=80"
                                                            alt="">
                                                        <p
                                                            class="flex items-center justify-center w-6 h-6 -mx-1 text-xs text-blue-600 bg-blue-100 border-2 border-white rounded-full">
                                                            +4</p>
                                                    </div>
                                                </td>

                                                <td class="px-12 py-4 text-sm whitespace-nowrap">
                                                    <div class="w-48 h-1.5 bg-blue-200 overflow-hidden rounded-full">
                                                        <div class="bg-blue-500 w-2/3 h-1.5"></div>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-4 text-sm font-medium">
                                                    <div style="white-space:inherit; width:200px;"">

                                                        <p class="font-extralight text-gray-600 dark:text-gray-400">
                                                            {{ $alert->unidad->sigla }}</p>
                                                    </div>
                                                </td>


                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    <button
                                                        class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 sm:flex sm:items-center sm:justify-between ">
                    <div class="text-sm text-gray-500 dark:text-gray-400">
                        Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 10</span>
                    </div>

                    <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
                        <a href="#"
                            class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>

                            <span>
                                previous
                            </span>
                        </a>

                        <a href="#"
                            class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                            <span>
                                Next
                            </span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </div>

    </aside>
</div>
