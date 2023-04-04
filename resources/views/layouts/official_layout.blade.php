<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="icon" type="image/png" href="{{ asset('Logo.png') }}"> --}}

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .increase-btn {

            transition: 0.3s ease-in-out;
        }

        .increase-btn:hover {
            transform: scale(1.05);
        }

        .card {
            transition: 0.3s ease-in-out;
            padding-top: 5px;
            padding-bottom: 5px;



        }

        .increase-card {
            padding-top: 5px;
            padding-bottom: 5px;

            transition: 0.3s ease-in-out;
            /* transform: translate(0px, 1px) ; */


        }

        .logo {
            transition: 0.3s ease-in-out;
        }

        .logo-up {
            padding-top: 10px;
            transition: 0.3s ease-in-out;
            transform: translate(0px, -20px) scale(0.5);
        }

        .button-down {
            transition: 0.3s ease-in-out;
            transform: translate(0px, 10px);
        }

        /*
        .card {
            padding-left: 16px;
            padding-right: 16px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 0.75rem;
            background-color: rgb(55 65 81);
            opacity: .5;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            backdrop-filter: blur(12px);
            
            transition: 0.5s ease-in-out;
        }


        .increase-card {
            padding-left: 150px;
            padding-right: 150px;
            padding-top: 120px;
            padding-bottom: 120px;
            border-radius: 0.75rem;
            background-color: rgb(55 65 81);
            opacity: .5;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            backdrop-filter: blur(12px);
        }

        .increase-card:hover {
            transform: scale(1.5);
        } */
    </style>




    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}

</head>

<body>
    <!-- component -->

    <div id="main-background" class="py-32 h-screen"
        style="background-image: linear-gradient(to top, #013220  , #90ee90 );">
        <div class="grid place-items-center mx-2 my-20 sm:my-auto" x-data="{ showPass: true }">

            @yield('content')


        </div>
    </div>






    <script>
        function change() {

            var changeSize = document.getElementById("main-background")
            if (changeSize.className ==
                "py-32 h-full") {
                changeSize.className =
                    "flex flex-col h-full";
            } else {
                changeSize.className =
                    "py-32 h-full";
            }

            var changeSize = document.getElementById("main-card")
            if (changeSize.className ==
                "card rounded-xl bg-gray-50 bg-opacity-50 px-16 shadow-lg backdrop-blur-md max-sm:px-8") {
                changeSize.className =
                    "increase-card rounded-xl bg-gray-50 bg-opacity-50 px-16 shadow-lg backdrop-blur-md max-sm:px-8";
            } else {
                changeSize.className =
                    "card rounded-xl bg-gray-50 bg-opacity-50 px-16 shadow-lg backdrop-blur-md max-sm:px-8";

            }
            var changeSize = document.getElementById("main-logo")
            if (changeSize.className ==
                "logo") {
                changeSize.className =
                    "logo-up";
            } else {
                changeSize.className =
                    "logo";
            }
            var categories = document.getElementById("main-text")
            if (categories.className ==
                "hidden") {
                categories.className =
                    "visible";
            } else {
                categories.className =
                    "hidden";
            }
            var alertButton = document.getElementById("alert-button")
            var guiaButton = document.getElementById("guia-button")
            var contingenciaButton = document.getElementById("contingencia-button")
            var blogButton = document.getElementById("blog-button")
            var emergencyButton = document.getElementById("emergency-button")
            var boletinButton = document.getElementById("boletin-button")
            var institutionButton = document.getElementById("institution-button")
            var backButton = document.getElementById("back-button")


            if (backButton.className ==
                "hidden"
            ) {
                backButton.className =
                    "increase-btn button-down w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                alertButton.className =
                    "hidden w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                guiaButton.className =
                    "hidden w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                contingenciaButton.className =
                    "hidden w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                blogButton.className =
                    "hidden w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                emergencyButton.className =
                    "hidden w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                boletinButton.className =
                    "hidden  w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                institutionButton.className =
                    "hidden w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";

            } else {
                backButton.className =
                    "hidden";
                alertButton.className =
                    "increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                guiaButton.className =
                    "increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                contingenciaButton.className =
                    "increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                blogButton.className =
                    "increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                emergencyButton.className =
                    "increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                boletinButton.className =
                    "increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                institutionButton.className =
                    "increase-btn w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";

            }




            var changeSize = document.getElementById("difussion-button")
            if (changeSize.className ==
                "increase-btn grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200"
            ) {
                changeSize.className =
                    "hidden increase-btn grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200"
            } else {
                changeSize.className =
                    "increase-btn grado border-2 bg-gradient-to-t from-green-900 to-green-100 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200"
            }

        }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    @livewireScripts
    @stack('js')

</body>

</html>
