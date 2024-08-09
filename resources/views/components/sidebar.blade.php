<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: crimson">

    <div class="text-center">
        <a href="{{ route('home') }}">
            <img src="{{ asset('dist/img/logo_sin_fondo.png') }}" alt="AdminLTE Logo" class="brand-image"
                style=" width: 150px; height: auto;" />
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header" style="color: white">Inicio</li>
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link" style="color: white">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-header" style="color: white">Administrador</li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Usuarios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gestion de Usuarios</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header" style="color: white">Atenciones</li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Atenciones
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link" style="color: white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ordenes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link" style="color: white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/buttons.html" class="nav-link" style="color: white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mesas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header" style="color: white">Reportes</li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: white">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Reportes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link" style="color: white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Por Fecha</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link" style="color: white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Observaciones</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
