<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Estilos del sidebar -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/sidebar2.css') }}"> --}}
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Iconos del sidebar -->
    <script src="https://kit.fontawesome.com/24eae91c56.js" crossorigin="anonymous"></script>

    @yield('css')

    <!-- Scripts y estilos de tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    {{-- sidebar --}}
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!-- <img src="images/logo.png" alt=""> -->
            </div>

            <span class="logo_name">SASEB</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="/dashboard">
                        <i class="fa-solid fa-house"></i>
                        <span class="link-name">Inicio</span>
                    </a>
                </li>
                @can('alumno.index')
                    <li><a href="/alumno">
                            <i class="fa-solid fa-user-graduate"></i>
                            <span class="link-name">Alumnos</span>
                        </a>
                    </li>
                @endcan
                @can('user.index')
                <li>
                    <a href="/user">
                        <i class="fa-solid fa-users"></i>
                        <span class="link-name">Usuarios</span>
                    </a>
                </li>
                @endcan
                @can('expediente.index')
                <li><a href="/expediente">
                        <i class="fa-solid fa-folder-open"></i>
                        <span class="link-name">Expedientes</span>
                    </a>
                </li>
                @endcan
                @can('reporte.index')
                <li><a href="/reporte">
                        <i class="fa-solid fa-file"></i>
                        <span class="link-name">Reportes</span>
                    </a>
                </li>
                @endcan
            </ul>

            <ul class="logout-mode">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <li>
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="link-name">Cerrar Sesión</span>
                        </a>
                    </li>

                </form>
            </ul>
        </div>
    </nav>

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

            <div class="overflow-hidden bg-white shadow sm:rounded-lg">

                @yield ('contenido')

            </div>

        </div>
    </section>

    @stack('modals')

    @livewireScripts
    <script src="{{ asset('js/sidebar.js') }}"></script>

    @yield('js')


</body>

</html>
