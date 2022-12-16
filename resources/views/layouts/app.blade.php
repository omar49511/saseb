<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Estilos del sidebar -->
        <link rel="stylesheet" href="{{asset('css/sidebar.css')}}" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Iconos del sidebar -->
        <script src="https://kit.fontawesome.com/24eae91c56.js" crossorigin="anonymous"></script>

        <!-- Scripts y estilos de tailwind -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        
        <!-- sidebar -->
        {{ $slot }}

        <section class="dashboard" id="main-container">
            <div class="top">
              <i class="fa-solid fa-bars sidebar-toggle"></i>
              <div class="search-box">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <input type="text" placeholder="Buscar aqui...">
              </div>
            </div>

            <!-- Page Content -->
            <div class="mt-20">
                
                @yield ('contenido')

            </div>
        </section>

        @stack('modals')

        @livewireScripts
    </body>
    <script src="{{asset('js/sidebar.js')}}"></script>
</html>
