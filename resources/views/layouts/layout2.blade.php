<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="icon" type="image/png" href="{{ asset('Logo.png') }}"> --}}

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
<body>
<!-- This is an example component -->
<div class="flex flex-col h-screen bg-gradient-to-b from-[#063970] to-blue-200">
       <div class="grid place-items-center mx-2 my-20 sm:my-auto" x-data="{ showPass: true }">
           <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
               px-6 py-10 sm:px-10 sm:py-6
               bg-white rounded-lg shadow-md lg:shadow-lg">
               <div class="text-center mb-4">
                   <h6 class="font-semibold text-[#063970] text-xl">Login</h6>
               </div>
               <form class="space-y-5" method="POST">
                   <div>
                       <input id="email" type="email" class="block w-full py-3 px-3 mt-2
                           text-gray-800 appearance-none
                           border-2 border-gray-100
                           focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" />
                   </div>

                   <div class="relative w-full">
                       <input :type="showPass ? 'password' : 'text'" id="password" class="block w-full py-3 px-3 mt-2 mb-4
                           text-gray-800 appearance-none
                           border-2 border-gray-100
                           focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md" />
                           <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                               <p class="font-semibold" @click="showPass = !showPass" x-text ="showPass ? 'Show' : 'Hide'">Show</p>
                           </div>
                   </div>

                   <button type="submit" class="w-full py-3 mt-10 bg-[#063970] rounded-md
                       font-medium text-white uppercase
                       focus:outline-none hover:shadow-none">
                       Login
                   </button>
               </form>
           </div>
   </div>
</div>
</body>
</html>