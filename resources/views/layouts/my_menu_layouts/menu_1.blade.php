<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Layout 1</title>
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

</head>


<!-- component -->
<!-- full tailwind config using javascript -->
<!-- https://github.com/neurolinker/popice -->

<!-- component -->
<!-- full tailwind config using javascript -->
<!-- https://github.com/neurolinker/popice -->

<body class="body bg-white dark:bg-[#0F172A]">
    <div class="fixed w-full flex bg-green-700 dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-10">
        <div
            class="logo ml-12 font-mono text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
            Alertas Tempranas SCZ
        </div>
        <!-- SPACER -->
        <div class="grow h-full flex items-center justify-center"></div>
        <div class="flex-none h-full text-center flex items-center justify-center">

            <div class="flex space-x-3 items-center px-3">
                <div class="flex-none flex justify-center">
                    <div class="w-8 h-8 flex ">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShta_GXR2xdnsxSzj_GTcJHcNykjVKrCBrZ9qouUl0usuJWG2Rpr_PbTDu3sA9auNUH64&usqp=CAU"
                            alt="profile" class="shadow rounded-full object-cover" />
                    </div>
                </div>


                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

        </div>
    </div>
    <aside
        class="w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-gray-300 ">
        <!-- open sidebar button -->
        <div
            class="max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-between border-4 border-white dark:border-[#0F172A] bg-[#1E293B]  absolute top-2 rounded-full h-12">

            <div class="flex pl-4 items-center space-x-2 ">
                <div>
                    <div onclick="setDark('dark')"
                        class="moon text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                            stroke="currentColor" class="w-4 h-4">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                    </div>
                    <div onclick="setDark('light')"
                        class="sun hidden text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                    </div>
                </div>
                <div class="text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                        stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </div>
            </div>
            <div
                class="flex items-center space-x-3 group bg-gradient-to-r dark:from-green-900 dark:to-green-500 from-green-700 via-green-400 to-white  pl-10 pr-2 py-1 rounded-full text-white  ">
                <div class="transform ease-in-out duration-300 mr-12">
                    SGAT
                </div>
            </div>
        </div>
        <div onclick="openNav()"
            class="-right-6 transition transform ease-in-out duration-500 flex border-4 border-white dark:border-[#0F172A] bg-[#1E293B] dark:hover:bg-green-900 hover:bg-green-500 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
        </div>
        <!-- MAX SIDEBAR-->
        <div class="max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
            <div
                class="cursor-pointer hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <div>
                    Dashboard
                </div>
            </div>
            <a href=""
                class="cursor-pointer hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-4 h-4">
                    <path
                        d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z">
                    </path>
                    <path d="M11 9h2v5h-2zm0 6h2v2h-2z"></path>
                </svg>
                <div>
                    Alertas
                </div>
            </a>
            <div
                class="cursor-pointer hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-4 h-4">
                    <path
                        d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z">
                    </path>
                    <path
                        d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z">
                    </path>
                </svg>
                <div>
                    Comités
                </div>
            </div>
            <div
                class="cursor-pointer hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
                <div>
                    Municipios
                </div>
            </div>
            <div
                class="cursor-pointer hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>
                <div>
                    Unidades
                </div>
            </div>


            <div
                class="cursor-pointer hover:ml-4 w-full text-white hover:text-purple-500 dark:hover:text-blue-500 bg-[#1E293B] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>
                <div>
                    <a href="{{ route('profile.show') }}"> Configuraciones </a>
                    {{-- {{ __('Profile') }} --}}
                </div>
            </div>
        </div>
        <!-- MINI SIDEBAR-->
        <div class="mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
            <div
                class="hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </div>
            <div
                class="hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-4 h-4">
                    <path
                        d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z">
                    </path>
                    <path d="M11 9h2v5h-2zm0 6h2v2h-2z"></path>
                </svg>
            </div>

            <div
                class="hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-4 h-4">
                    <path
                        d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z">
                    </path>
                    <path
                        d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z">
                    </path>
                </svg>
            </div>
            <div
                class="hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </div>
            <div
                class="hover:ml-4 justify-end pr-5 text-white hover:text-purple-500 dark:hover:text-blue-500 w-full bg-[#1E293B] p-3 rounded-full transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>
            </div>

        </div>

    </aside>
    <!-- CONTENT -->


    <main class="flex-1 max-h-full py-1 overflow-y-scroll">

        <div class="content ml-10 duration-500 pt-20 pb-4  ">

            <div id="main-background" class="py-20 h-full " style="background-color: white" x-data="{ showPass: true }">
                @yield('content')

            </div>
        </div>
    </main>

    <script>
        const sidebar = document.querySelector("aside");
        const maxSidebar = document.querySelector(".max")
        const miniSidebar = document.querySelector(".mini")
        const roundout = document.querySelector(".roundout")
        const maxToolbar = document.querySelector(".max-toolbar")
        const logo = document.querySelector('.logo')
        const content = document.querySelector('.content')
        const moon = document.querySelector(".moon")
        const sun = document.querySelector(".sun")

        function setDark(val) {
            if (val === "dark") {
                document.documentElement.classList.add('dark')
                moon.classList.add("hidden")
                sun.classList.remove("hidden")
            } else {
                document.documentElement.classList.remove('dark')
                sun.classList.add("hidden")
                moon.classList.remove("hidden")
            }
        }

        function openNav() {
            if (sidebar.classList.contains('-translate-x-48')) {
                // max sidebar 
                sidebar.classList.remove("-translate-x-48")
                sidebar.classList.add("translate-x-none")
                maxSidebar.classList.remove("hidden")
                maxSidebar.classList.add("flex")
                miniSidebar.classList.remove("flex")
                miniSidebar.classList.add("hidden")
                maxToolbar.classList.add("translate-x-0")
                maxToolbar.classList.remove("translate-x-24", "scale-x-0")
                logo.classList.remove("ml-12")
                content.classList.remove("ml-12")
                content.classList.add("ml-12", "md:ml-60")
            } else {
                // mini sidebar
                sidebar.classList.add("-translate-x-48")
                sidebar.classList.remove("translate-x-none")
                maxSidebar.classList.add("hidden")
                maxSidebar.classList.remove("flex")
                miniSidebar.classList.add("flex")
                miniSidebar.classList.remove("hidden")
                maxToolbar.classList.add("translate-x-24", "scale-x-0")
                maxToolbar.classList.remove("translate-x-0")
                logo.classList.add('ml-12')
                content.classList.remove("ml-12", "md:ml-60")
                content.classList.add("ml-12")

            }

        }
    </script>
    <script>
        function change() {


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
                    "visible pt-10";
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
            var containerButtons = document.getElementById("buttons-container")

            if (backButton.className ==
                "hidden"
            ) {
                containerButtons.className =
                    "py-10 grid max-w-lg grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3";
                backButton.className =
                    "increase-btn button-down w-40 grado border-2 bg-gradient-to-t from-green-900 to-green-400 border-green-600 rounded-lg px-3 py-2 text-white cursor-pointer hover:bg-green-600 hover:text-green-200";
                alertButton.className =
                    "hidden";
                guiaButton.className =
                    "hidden";
                contingenciaButton.className =
                    "hidden";
                blogButton.className =
                    "hidden";
                emergencyButton.className =
                    "hidden";
                boletinButton.className =
                    "hidden";
                institutionButton.className =
                    "hidden";

            } else {
                backButton.className =
                    "hidden";
                containerButtons.className =
                    "pt-10 grid max-w-lg grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3";

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
                    "hidden"
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
