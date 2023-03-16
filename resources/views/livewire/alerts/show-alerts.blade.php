<div>
    <!-- Green Button -->


    <div id="main-card" class="card rounded-xl bg-gray-50 bg-opacity-50 px-16 shadow-lg backdrop-blur-md max-sm:px-8">
        <div class="text-white">
            <div class="mb-3 flex flex-col items-center">
                <img id="main-logo" class="logo" src="imgs/logo_gobierno_scz.png" width="500" alt=""
                    srcset="" />


                {{-- @foreach ($images as $image)
                        <img src="{{$image->foto}}" alt="">
                    @endforeach --}}

                <!-- Product List -->
                <div >
                    <div id="main-text" class="hidden">
                        <div
                            class="mx-auto grid max-w-3xl grid-cols-1 gap-6  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                            @foreach ($images as $image)
                                <div class="text-center">
                                    <article
                                        class="rounded-xl bg-white p-1 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                                        <a href="{{ route('main_alerts.index', $image->id) }}">
                                            <div class="relative flex items-end overflow-hidden rounded-xl pl-16">
                                                <img src="{{ $image->foto }}"
                                                    style="object-fit: cover; width:75px; height:75px; border-radius: 0.75rem; "
                                                    alt="Hotel Photo" />

                                            </div>

                                            <div class="m-1 p-2 ">
                                                <h2 class="text-slate-700" />
                                                {{ $image->tipoEvento }}</h2>

                                            </div>
                                        </a>
                                    </article>
                                </div>
                            @endforeach

                        </div>

                    </section>
                </div>







                <div class="pt-10 mx-auto grid max-w-lg grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                    <button id="back-button" onclick="change()"
                    class="hidden">
                    Atrás
                </button>
                    <button id="alert-button" onclick="change()" style=""
                        class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                        Mostrar Alertas
                    </button>

                    <button id="guia-button"
                        class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                        Guías de Seguridad
                    </button><button id="contingencia-button"
                        class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                        Planes de Contingencia
                    </button><button id="blog-button"
                        class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                        Blog de Artículos
                    </button><button id="emergency-button"
                        class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                        Números de Emergencia
                    </button><button id="boletin-button"
                        class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                        Boletines
                    </button>
                  
                    <div class="my-5"></div>

                </div>

            </div>

        </div>
    </div>


</div>
