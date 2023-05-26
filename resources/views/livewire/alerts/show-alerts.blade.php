<div>
    <!-- Green Button -->

    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif --}}
                @endauth
            </div>
        @endif

    <div id="main-card" class="card rounded-xl bg-white px-16 shadow-lg backdrop-blur-md max-sm:px-8">
        
        <div class="text-white">
            <div class="mb-3 flex flex-col items-center">
                <img id="main-logo" class="logo" src="imgs/logo_gobierno_scz.png" width="500" alt=""
                    srcset="" />
                <h2 class=" pt-5 pb-10  text-xl text-black font-extrabold sm:text-md md:text-2xl">
                    Sistema Departamental de Alertas Tempranas
                </h2>



                {{-- @foreach ($images as $image)
                        <img src="{{$image->foto}}" alt="">
                    @endforeach --}}

                <!-- Product List -->
                <div>
                    <div id="main-text" class="hidden">
                        <div
                            class="mx-auto grid max-w-3xl grid-cols-1 gap-6  sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                            @foreach ($images as $image)
                                <div class="text-center">
                                    <article
                                        class="rounded-xl text-center bg-white p-1 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                                        <a href="{{ route('main_alerts.index', $image->id) }}"
                                            class="text-center bg-center self-center items-center justify-center content-center">
                                            <div class="m-1 p-2 rounded-xl">
                                                <img src="{{ $image->foto }}"
                                                    style="object-fit: cover; width:200px; height:100px; border-radius: 0.75rem; " />

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







                    <div id="buttons-container"
                        class="pt-10 grid max-w-lg grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                        <button id="back-button" onclick="change()" class="hidden">
                            Atrás
                        </button>
                        <button id="alert-button" onclick="change()"
                            class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                            Mostrar Alertas
                        </button>

                        <button id="guia-button"
                            class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                            Guías de Seguridad
                        </button><button id="contingencia-button"
                            class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                            Planes de Contingencia
                        </button><button id="blog-button"
                            class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                            Blog de Artículos
                        </button><button id="emergency-button"
                            class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                            Números de Emergencia
                        </button><button id="boletin-button"
                            class="increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200">
                            Boletines
                        </button>

                        <div class="my-5"></div>

                    </div>

                </div>

            </div>
        </div>


    </div>
