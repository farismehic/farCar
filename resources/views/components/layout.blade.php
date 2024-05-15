<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FarCar</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- FontAwesome CDN -->
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
        
        </style>
    </head>
    <body class="mx-auto my-auto bg-slate-100 mt-3">
        <x-navigation></x-navigation>
        @auth
        <div class="bg-slate-500">
            <div class="flex justify-end items-center mx-5 py-3">
                <div class="flex justify-end w-1/6 hover:scale-105 transition ease-in-out duration-500">
                    <a href="/" class="flex justify-center w-full p-auto rounded-md w-2/5 border border-2 shadow-md border-teal-400 mr-2 text-white">
                        Dashboard
                    </a>
                </div>
                <div class="flex justify-end w-1/6 hover:scale-105 transition ease-in-out duration-500">
                    <a href="{{ route('cars.create') }}" class="flex justify-center w-full p-auto rounded-md shadow-md w-2/5 border border-2 border-teal-400 text-white">
                        Create a car
                    </a>

                </div>
            </div>
        </div>
        @endauth
        <div class="mx-5">
            

            {{ $slot }}

        </div>
        
       
    </body>
    <x-footer></x-footer>
</html>
