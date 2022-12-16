<x-app-layout>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!-- <img src="images/logo.png" alt=""> -->
            </div>

            <span class="logo_name">SASEB</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="">
                        <i class="fa-solid fa-house"></i>
                        <span class="link-name">Inicio</span>
                    </a></li>
                <li><a href="">
                        <i class="fa-solid fa-user-graduate"></i>
                        <span class="link-name">Alumnos</span>
                    </a>
                </li>

                <li><a href="">
                        <i class="fa-solid fa-user-tie"></i>
                        <span class="link-name">Psicologos</span>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-user-plus"></i>
                                <span class="link-name">Nuevo psicologo</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="">
                        <i class="fa-solid fa-folder-open"></i>
                        <span class="link-name">Expedientes</span>
                    </a></li>
                <li><a href="#">
                        <i class="fa-solid fa-file"></i>
                        <span class="link-name">Reportes</span>
                    </a></li>

                <li><a href="">
                        <i class="fas fa-user"></i>
                        <span class="link-name"> Usuarios </span></a>
                </li>
                <li><a href="">
                        <i class="fas fa-cogs"></i>
                        <span class="link-name"> Configuración </span></a>
                </li>
                
            </ul>

            <ul class="logout-mode">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <li><a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="link-name">Cerrar Sesión</span>
                        </a></li>

                </form>
            </ul>
        </div>
    </nav>
</x-app-layout>