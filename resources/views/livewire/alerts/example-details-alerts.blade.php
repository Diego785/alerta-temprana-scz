<div wire:loading.remove>

    <aside style="position: relative; overflow-y: scroll; height: 100vh;">
        <div
            style="position: sticky; top: 0; background: url({{ $event->foto }}); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh;">
            <div class="p-8 md:py-12 lg:px-4 bg-slate-900/50">







                <div class="mx-5  grid place-content-center">
                    <div
                        class="bg-gradient-to-r from-green-400 to-green-900 rounded-2xl text-white p-8 text-center h-auto pb-28 w-auto mx-auto">
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

                        <a href="#etiquetaDestino">
                            <div
                                class="rounded-md bg-gradient-to-r from-green-400 to-green-900 whitespace-normal  text-xl text-white pt-3 pb-4 px-8">
                                <p class="text-xs text-center font-extrabold text-white mb-2">
                                    Revisa el historial de la alerta aNormal
                                </p>
                            </div>
                        </a>

                    </div>
                </div>


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
                                    <img :alt="imgModalSrc" class="object-contain h-1/2-screen"
                                        :src="imgModalSrc">
                                    <p x-text="imgModalDesc" class="text-center text-white"></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>



                <div class="flex justify-center ">
                    <!-- component -->
                    <section class="w-full text-center overflow-y-auto overflow-x-hidden px-10 pb-10 pt-20">
                        <div class="sm:flex sm:items-center sm:justify-between">

                            <!-- component -->
                            <div
                                class="container max-w-4xl text-center min-w-screen min-h-screen flex items-center justify-start">
                                <div class="flex flex-wrap ">

                                    @foreach ($sending_alerts as $sending_alert)
                                        <div class="px-10 my-10">
                                            @if ($sending_alert->estado->nombre == 'Crítico')
                                                <div
                                                    class="p-5 px-20 bg-alertRed text-white pt-4 rounded-xl space-y-6 overflow-hidden transition-all duration-500 transform hover:-translate-y-6 hover:scale-105 shadow-xl hover:shadow-2xl cursor-pointer">
                                                @elseif($sending_alert->estado->nombre == 'Muy alto')
                                                    <div
                                                        class="p-5 px-20 bg-alertOrange text-white pt-4 rounded-xl space-y-6 overflow-hidden transition-all duration-500 transform hover:-translate-y-6 hover:scale-105 shadow-xl hover:shadow-2xl cursor-pointer">
                                                    @elseif($sending_alert->estado->nombre == 'Moderado')
                                                        <div
                                                            class="p-5 px-20 bg-alertYellow text-gray-800 pt-4 rounded-xl space-y-6 overflow-hidden transition-all duration-500 transform hover:-translate-y-6 hover:scale-105 shadow-xl hover:shadow-2xl cursor-pointer">
                                                        @elseif($sending_alert->estado->nombre == 'Normal')
                                                            <div
                                                                class="p-5 px-20 bg-alertGreen text-white pt-4 rounded-xl space-y-6 overflow-hidden transition-all duration-500 transform hover:-translate-y-6 hover:scale-105 shadow-xl hover:shadow-2xl cursor-pointer">
                                            @endif

                                            <div id="etiquetaDestino" class="px-8 flex justify-evenly items-center">
                                                <h4 class="text-xl font-bold inline-block ">
                                                    {{ $sending_alert->estado->nombre }}</h1>
                                                    <span class="inline-block mx-10"></span>
                                                    <div>
                                                        <h1 class="text-xs text-center font-bold whitespace-nowrap">
                                                            {{ $sending_alert->fecha }}
                                                        </h1>
                                                        <h1 class="text-xs text-center font-bold whitespace-nowrap">
                                                            {{ $sending_alert->hora }}</h1>
                                                    </div>


                                            </div>


                                            <p class="text-center text-xs">{{ $sending_alert->description }}</p>


                                            <!-- component -->


                                            <div class="flex justify-center">


                                                <div>
                                                    <iframe src="/storage/eventos/inundaciones/videos/video1.mp4"
                                                        frameborder="0" allow="autoplay; encrypted-media"
                                                        allowfullscreen></iframe>
                                                </div>

                                            </div>
                                            <div x-data="{}" class="flex justify-center">
                                                <div class="grid grid-cols-2 gap-4">

                                                    @if ($sending_alert->image != null)
                                                        @foreach ($sending_alert->image as $image)
                                                            <div style="width: 150px; height: 150px; overflow: hidden;">
                                                                <a href="#show-img"
                                                                    @click="$dispatch('img-modal', {  imgModalSrc: '{{ $image->path }}', imgModalDesc: '{{ $image->description }}' })"
                                                                    class="cursor-pointer">
                                                                    <img alt="Placeholder" class="object-fit w-full"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border: 2px solid #000; border-radius: 10px; "
                                                                        src="{{ $image->path }}">
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                </div>
                                            </div>



                                            <ul class="text-center pb-10">
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

                                                        </div>
                                                    </div>
                                                </section>
                                            </ul>



                                            <!-- component -->
                                            <!-- post card -->
                                            <div
                                                class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl ">
                                                <!--horizantil margin is just for display-->
                                                <div class="flex items-start px-4 py-6">

                                                    <div class="">

                                                        <p class="mt-3 text-gray-700 text-sm italic font-bold">
                                                            {{ $sending_alert->recomendacion }}
                                                        </p>

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
