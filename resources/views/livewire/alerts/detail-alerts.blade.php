<div>
    <aside
        style="background: url({{ $event->foto }}); background-size:cover; background-repeat:no-repeat; background-position: center;"
        class="overflow-hidden rounded-lg bg-center bg-no-repeat bg-cover bg-slate-900/50">
        <div class="p-8 md:py-12 lg:px-4 bg-slate-900/50">
            <div class="mx-5 grid place-content-center">
                <div
                    class="bg-gradient-to-r from-green-400 to-green-900 rounded-2xl text-white p-8 text-center h-72 max-w-sm mx-auto">
                    <h2 class="text-xl font-extrabold text-white sm:text-md md:text-lg mb-2">
                        {{ $alert->nombre }}
                    </h2>
                    <p class="text-sm font-extrabold text-gray-100 italic mb-2">
                        {{ $alert->description }}
                    </p>
                </div>
                <div
                    class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
                    <p class="text-lg font-extrabold text-gray-800 mb-2">
                        {{ $alert->fecha }}
                    </p>
                    <p class="text-lg font-extrabold text-gray-800 mb-2">
                        {{ $alert->hora }}
                    </p>

                    <button
                        class="rounded-md bg-gradient-to-r from-green-400 to-green-900 text-xl text-white pt-3 pb-4 px-8 inline">
                        <p class="text-xs text-center font-extrabold text-white mb-2">
                            Revisa el historial de la alerta abajo
                        </p>
                    </button>
                </div>
            </div>

            <!-- component -->
            <section class="container px-4 mx-auto">
                <div class="sm:flex sm:items-center sm:justify-between">


                    <!-- component -->
                    <div class="container mx-auto max-w-4xl text-center">
                        <div class="flex space-x-10 pt-5">

                            @foreach ($alert->alerta_envio as $sending_alert)
                                <div class="">
                                    @if ($sending_alert->estado->nombre == 'Crítico')
                                        <div
                                            class="bg-alertRed text-white pt-4 rounded-xl space-y-6 overflow-hidden  transition-all duration-500 transform hover:-translate-y-6 hover:scale-105 shadow-xl hover:shadow-2xl cursor-pointer">
                                        @elseif($sending_alert->estado->nombre == 'Muy alto')
                                            <div
                                                class="bg-alertOrange text-white pt-4 rounded-xl space-y-6 overflow-hidden  transition-all duration-500 transform hover:-translate-y-6 hover:scale-105 shadow-xl hover:shadow-2xl cursor-pointer">
                                            @elseif($sending_alert->estado->nombre == 'Moderado')
                                                <div
                                                    class="bg-alertYellow text-gray-800 pt-4 rounded-xl space-y-6 overflow-hidden  transition-all duration-500 transform hover:-translate-y-6 hover:scale-105 shadow-xl hover:shadow-2xl cursor-pointer">
                                                @elseif($sending_alert->estado->nombre == 'Bajo')
                                                    <div
                                                        class="bg-alertGreen text-white pt-4 rounded-xl space-y-6 overflow-hidden  transition-all duration-500 transform hover:-translate-y-6 hover:scale-105 shadow-xl hover:shadow-2xl cursor-pointer">
                                    @endif

                                    <div class="px-8 flex justify-between items-center">
                                        <h4 class="text-xl font-bold ">
                                            {{ $sending_alert->estado->nombre }}</h1>

                                    </div>
                                    <h1 class="text-4xl text-center font-bold">{{ $sending_alert->fecha }}
                                    </h1>
                                    <h1 class="text-4xl text-center font-bold">{{ $sending_alert->hora }}</h1>
                                    <p class="px-4 text-center text-sm ">{{ $sending_alert->description }}</p>
                                    <ul class="text-center">
                                        <section class="text-gray-600 body-font relative">
                                            <div class="absolute inset-0 bg-gray-300">
                                                <iframe width="100%" height="100%" frameborder="0" marginheight="0"
                                                    marginwidth="0" title="map" scrolling="no"
                                                    src="https://earth.google.com/web/@0,0,0a,22251752.77375655d,35y,0h,0t,0r?utm_source=earth7&utm_campaign=vine&hl=es"
                                                    style=""></iframe>
                                            </div>
                                            <div class="container px-5 py-24 mx-auto flex">
                                                <div
                                                    class="lg:w-1/3 md:w-1/2 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative">

                                                </div>
                                            </div>
                                        </section>
                                    </ul>

                                </div>


                        </div>
                        @endforeach


                    </div>
                </div>


        </div>
        </section>
</div>
</aside>



</div>
