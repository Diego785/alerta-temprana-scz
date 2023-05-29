<div wire:loading.remove>

    <style>
        .scrollable-container {
            position: relative;
            overflow-y: scroll;
            height: 100vh;
        }

        .background-image {
            position: fixed;
            top: 0;
            width: 100%;
            height: 100%;
            background: url('{{ $event->foto }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            z-index: -1;
        }

        .content {
            padding: 8px;
        }
    </style>

    <style>
        .ribbon {
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 22px;
            margin-right: -20px;
            margin-top: 20px;
            -ms-transform: rotate(45deg);
            /* IE 9 */
            -webkit-transform: rotate(45deg);
            /* Safari prior 9.0 */
            transform: rotate(30deg);
            /* Standard syntax */
        }
    </style>

    <aside class="scrollable-container">
        <div class="background-image">



        </div>


        <div class="content p-8 pt-10 md:py-12 lg:px-4 bg-slate-900/50">
            <div class="mb-2 text-base font-bold flex items-center text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                &nbsp<a>

                    <a href="{{ route('show_alerts') }}" class="hover:underline text-white">Menú</a>&nbsp/&nbsp
                    <a href="{{ route('main_alerts.index', $event->id) }}" class="hover:underline text-white">Alertas de
                        {{ $event->tipoEvento }}</a>&nbsp/&nbsp
                    <a href="{{ route('sending_alerts.index', [$alert->id, $event->id]) }}"
                        class="hover:underline text-white">Detalles de {{ $alert->nombre }}</a>

                </a>
            </div>


            <div class="mx-5  grid place-content-center">
                <div
                    class="relative bg-gradient-to-r from-green-400 to-green-900 rounded-2xl text-white p-8 text-center h-auto pb-28 w-auto mx-auto">
                    <h2 class=" uppercase text-xl font-bold text-white sm:text-md md:text-lg mb-2">
                        {{ $alert->nombre }}
                    </h2>
                    <p class="text-sm text-gray-100 italic mb-2">
                        {{ $alert->description }}
                    </p>
                    @if ($alert->estado == 'Cerrada')
                        <div class="ribbon bg-red-500 text-white text-sm font-bold whitespace-no-wrap px-4">Alerta
                            Cerrada
                        </div>
                    @endif


                </div>




                <div
                    class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 max-w-xs mx-auto">
                    <p class="text-lg font-extrabold text-gray-800 mb-2">
                        {{ $alert->fecha }}
                    </p>
                    <p class="text-lg font-extrabold text-gray-800 mb-2">
                        {{ $alert->hora }}
                    </p>


                </div>

            </div>

            <header class="sticky top-0 bg-white shadow z-10">
                <div class="block py-1 my-1 text-center rounded-lg">


                    @foreach ($sending_alerts as $sending_alert)
                        {{-- <a
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            {{ $sending_alert->fecha }}
                        </a> --}}
                        <!-- component -->
                        <!-- This is an example component -->



                        @if ($sending_alert->estado->nombre == 'Crítico')
                            <a href="#{{ $sending_alert->id }}"
                                class="group h-5 w-20 font-bold text-sm relative overflow-hidden inline-block border border-alertRed text-alertRed rounded-full mr-4 hover:bg-alertRed hover:text-white">{{ $sending_alert->fecha }}
                            @elseif($sending_alert->estado->nombre == 'Muy alto')
                                <a href="#{{ $sending_alert->id }}"
                                    class="group h-5 w-20 font-bold text-sm relative overflow-hidden inline-block border border-alertOrange text-alertOrange rounded-full mr-4 hover:bg-alertOrange hover:text-white">{{ $sending_alert->fecha }}
                                @elseif($sending_alert->estado->nombre == 'Moderado')
                                    <a href="#{{ $sending_alert->id }}"
                                        class="group h-5 w-20 font-bold text-sm relative overflow-hidden inline-block border border-alertYellow text-alertYellow rounded-full mr-4 hover:bg-alertYellow hover:text-white">{{ $sending_alert->fecha }}
                                    @elseif($sending_alert->estado->nombre == 'Normal')
                                        <a href="#{{ $sending_alert->id }}"
                                            class="group h-5 w-20 font-bold text-sm relative overflow-hidden inline-block border border-alertGreen text-alertGreen rounded-full mr-4 hover:bg-alertGreen hover:text-white">{{ $sending_alert->fecha }}
                        @endif


                        <div
                            class="absolute duration-300 inset-0 w-full h-full transition-all scale-0 group-hover:scale-100 group-hover:bg-white/30 rounded-2xl">

                        </div>
                        </a>
                    @endforeach


                </div>

            </header>


            <section class="container px-4 mx-auto">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="flex items-center mt-4 gap-x-3">


                        <a class="flex items-center justify-center w-40 grado border-2 bg-gradient-to-t from-green-400 to-green-900 border-green-300 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-blue-600 hover:text-black"
                            href="{{ route('detail_alerts_list.pdf', [$event->id, $alert->id]) }}">


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
            </section>

            <div id="show-img" x-data="{ imgModal: false, imgModalSrc: '', imgModalDesc: '' }">
                <template
                    @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;"
                    x-if="imgModal">
                    <div x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''"
                        class=" w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">

                        <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
                            <div class="z-50">
                                <button @click="imgModal = ''"
                                    class="float-right pt-2 pr-2 outline-none focus:outline-none">
                                    <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg"
                                        width="18" height="18" viewBox="0 0 18 18">
                                        <path
                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
                                <p x-text="imgModalDesc" class="text-center text-white"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>



            <div class="">
                <!-- component -->
                <section class="w-full text-center overflow-y-auto overflow-x-hidden lg:px-52 md:px-20 sm:px-5  py-10">
                    <div class="sm:flex sm:items-center sm:justify-between">

                        <!-- component -->
                        <div class="text-center min-h-screen w-screen">
                            <div class="">

                                @foreach ($sending_alerts as $sending_alert)
                                    <div id="{{ $sending_alert->id }}" class=" my-10">
                                        <div class="flex justify-center text-center">
                                            @if ($sending_alert->estado->nombre == 'Crítico')
                                                <div
                                                    class="p-5 px-20 bg-alertRed text-white pt-4 rounded-xl space-y-6 overflow-hidden transition-all duration-500 transform hover:-translate-y-6 hover:scale-10 shadow-xl hover:shadow-2xl cursor-pointer">
                                                @elseif($sending_alert->estado->nombre == 'Muy alto')
                                                    <div
                                                        class="p-5 px-20 bg-alertOrange text-white pt-4 rounded-xl space-y-6 overflow-hidden transition-all duration-500 transform hover:-translate-y-6 hover:scale-10 shadow-xl hover:shadow-2xl cursor-pointer">
                                                    @elseif($sending_alert->estado->nombre == 'Moderado')
                                                        <div
                                                            class="p-5 px-20 w-full bg-alertYellow text-gray-800 pt-4 rounded-xl space-y-6 overflow-hidden transition-all duration-500 transform hover:-translate-y-6 hover:scale-10 shadow-xl hover:shadow-2xl cursor-pointer">
                                                        @elseif($sending_alert->estado->nombre == 'Normal')
                                                            <div
                                                                class="p-5 px-20 bg-alertGreen text-white pt-4 rounded-xl space-y-6 overflow-hidden transition-all duration-500 transform hover:-translate-y-6 hover:scale-10 shadow-xl hover:shadow-2xl cursor-pointer">
                                            @endif
                                            <div id="etiquetaDestino" class="px-8 flex justify-evenly items-center">
                                                <h4 class="text-xl font-bold inline-block">
                                                    {{ $sending_alert->estado->nombre }}
                                                </h4>
                                                <span class="inline-block mx-10"></span>
                                                <div>
                                                    <h1 class="text-xs text-center font-extrabold whitespace-nowrap">
                                                        {{ $sending_alert->fecha }}
                                                    </h1>
                                                    <h1 class="text-xs text-center font-extrabold whitespace-nowrap">
                                                        {{ $sending_alert->hora }}
                                                    </h1>
                                                </div>
                                            </div>

                                            <p class="text-center text-xs">{{ $sending_alert->description }}
                                            </p>

                                            <!-- component -->
                                            @if (sizeOf($sending_alert->image) > 0 && $sending_alert->video != null)
                                                <div style="display: flex; justify-content: space-evenly;">
                                                    <section class="body-font relative">
                                                        <div class="inset-0 flex justify-center items-center">
                                                            <div class="w-full">
                                                                <iframe allowfullscreen sandbox class="w-full h-full"
                                                                    frameborder="0" title="map" scrolling="no"
                                                                    src="{{ $sending_alert->video }}"></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="container px-5 py-5 mx-auto flex">
                                                            <div
                                                                class="lg:w-1/3 md:w-1/2 rounded-lg flex flex-col md:ml-auto w-full mt-5 md:mt-0 relative">
                                                                <!-- Resto del código -->
                                                            </div>
                                                        </div>
                                                    </section>

                                                    <div x-data="{}" class="flex justify-center">
                                                        <div class="grid grid-cols-2 gap-4">
                                                            @if ($sending_alert->image != null)
                                                                @foreach ($sending_alert->image as $image)
                                                                    <div
                                                                        style="width: 150px; height: 150px; overflow: hidden;">
                                                                        <a href="#show-img"
                                                                            @click="$dispatch('img-modal', {  imgModalSrc: '{{ $image->path }}', imgModalDesc: '{{ $image->description }}' })"
                                                                            class="cursor-pointer">
                                                                            <img alt="Placeholder"
                                                                                class="object-fit xl:w-full xl:h-full lg:w-full lg:h-full md:h-52 md:w-52 sm:w-32 sm:h-32 w-20 h-20 object-cover border-2 border-black rounded-lg"
                                                                                src="{{ asset($image->path) }}">
                                                                        </a>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                @if (sizeOf($sending_alert->image) > 0)
                                                    <div x-data="{}" class="flex justify-center">
                                                        <div class="grid grid-cols-2 gap-4">
                                                            @if ($sending_alert->image != null)
                                                                @foreach ($sending_alert->image as $image)
                                                                    <div
                                                                        style="width: 150px; height: 150px; overflow: hidden;">
                                                                        <a href="#show-img"
                                                                            @click="$dispatch('img-modal', {  imgModalSrc: '{{ $image->path }}', imgModalDesc: '{{ $image->description }}' })"
                                                                            class="cursor-pointer">
                                                                            <img alt="Placeholder"
                                                                                class="object-fit xl:w-full xl:h-full lg:w-full lg:h-full md:h-52 md:w-52 sm:w-32 sm:h-32 w-20 h-20 object-cover border-2 border-black rounded-lg"
                                                                                src="{{ asset($image->path) }}">
                                                                        </a>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                @else
                                                    @if ($sending_alert->video != null)
                                                        <div style="display: flex; justify-content: center;"
                                                            class="inset-0">
                                                            <section class="body-font relative">
                                                                <div class="inset-0 flex justify-center items-center">
                                                                    <div class="w-full">
                                                                        <iframe allowfullscreen sandbox
                                                                            class="w-full h-full" frameborder="0"
                                                                            title="map" scrolling="no"
                                                                            src="{{ $sending_alert->video }}"></iframe>
                                                                    </div>
                                                                </div>
                                                                <div class="container px-5 py-5 mx-auto flex">
                                                                    <div
                                                                        class="lg:w-1/3 md:w-1/2 rounded-lg flex flex-col md:ml-auto w-full mt-5 md:mt-0 relative">
                                                                        <!-- Resto del código -->
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif

                                            <ul class="text-center pb-5">
                                                <section class="text-gray-600 body-font relative">
                                                    <div class="absolute inset-0 bg-gray-300">
                                                        <iframe width="100%" height="100%" frameborder="0"
                                                            marginheight="0" marginwidth="0" title="map"
                                                            scrolling="no"
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.7918791795554!2d-63.17055368586038!3d-17.782799787133053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92ee0171f618bb37%3A0x6b2a6ab90685e0e9!2sSanta%20Cruz%20de%20la%20Sierra%2C%20Bolivia!5e0!3m2!1sen!2sus!4v1654953641922!5m2!1sen!2sus"
                                                            style=""></iframe>
                                                    </div>
                                                    <div class="container px-5 py-24 mx-auto flex">
                                                        <div
                                                            class="lg:w-1/3 md:w-1/2 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative">
                                                            <!-- Resto del código -->
                                                        </div>
                                                    </div>
                                                </section>
                                            </ul>

                                            <!-- component -->
                                            <!-- post card -->
                                            <div
                                                class="bg-white rounded-2xl text-white p-5 text-center h-auto w-auto mx-auto">
                                                <!--horizantil margin is just for display-->
                                                <div class="flex items-start">
                                                    <div>
                                                        <p
                                                            class="text-xs text-red-600 text-center font-extrabold mb-2">
                                                            RECOMENDACIÓN:
                                                        </p>
                                                        <p class="text-black text-sm italic">
                                                            {{ $sending_alert->recomendacion }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endforeach


                        </div>


                    </div>
            </div>


            </section>

        </div>
</div>

</aside>


</div>


@push('js')
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('scrollToSection', function() {
                if (window.livewire.findComponent('alerts.detail-alerts').scrollToSection) {
                    const etiquetaDestino = document.getElementById('etiquetaDestino');
                    etiquetaDestino.scrollIntoView({
                        behavior: 'smooth'
                    });
                    window.livewire.findComponent('alerts.detail-alerts').scrollToSection = false;
                }
            });
        });
    </script>
@endpush

<div wire:loading>
    Cargando...
</div>

</div>
