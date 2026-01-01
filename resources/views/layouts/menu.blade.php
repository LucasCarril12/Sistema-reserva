<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/favicon.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/favicon.png')}}" alt="" height="17">
            </span>
        </a>

        <!-- Light Logo-->

        <a href="index.html" class="logo logo-light">

            {{-- --- cuando el menu esta plegado --- --}}
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-mujer-alada-blanca.png')}}" alt="" height="30">
            </span>

            {{-- --- cuando el menu esta desplegado --- --}}
            <span class="spanLogo logo-lg">
                <img src="{{ asset('assets/images/LogoMuseo.png')}}" alt="" height="60">
            </span>

        </a>

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>

    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                {{-- ::::: COMO LO VE UN USUARIO :::: --}}

                @if(Auth::user()->rol_id == 3)

                {{-- --- USUARIO --- --}}

                <li class="menu-title"><span>USUARIO</span></li>

                {{-- --- NUEVA RESERVA USUARIO --- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('cliente.reserva')  }}">
                        <i class='bx  bx-plus'></i> <span>Nueva Reserva</span>
                    </a>
                </li>

                {{-- --- CONSULTAR RESERVA USUARIO--- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('cliente.reservas') }}">
                        <i class='bx  bx-bus'></i> <span>Lista de Reservas</span>
                    </a>
                </li>

                {{-- --- CALENDARIO USUARIO --- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('cliente.calendario') }}">
                        <i class='bx  bx-calendar-event'></i> <span>Calendario</span>
                    </a>
                </li>

                @endif

                {{-- ::::: CONDICION SI ES GUIA ::::: --}}

                @if(Auth::user()->rol_id == 2)
                <li class="menu-title"><span>Guia</span></li>

                {{-- --- NUEVA RESERVA GUIA --- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('reservations.create') }}">
                        <i class='bx bx-plus'></i><span>Nueva Reserva</span>
                    </a>
                </li>

                {{-- --- CONSULTAR RESERVA GUIA--- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('reservations.index') }}">
                        <i class='bx  bx-bus'></i><span>Lista de Reservas</span>
                    </a>
                </li>

                {{-- --- CALENDARIO GUIA--- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('guia.calendario') }}">
                        <i class='bx  bx-calendar-event'></i> <span>Calendario</span>
                    </a>
                </li>

                @endif



                {{-- ::::: CONDICION SI ES ADMIN ::::: --}}

                @if(Auth::user()->rol_id == 1)




                {{-- --- ADMIN --- --}}
                <li class="menu-title"><span>ADMINISTRADOR</span></li>

                {{-- --- NUEVA RESERVA ADMIN --- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('reservations.create') }}">
                        <i class='bx bx-plus'></i> <span>Nueva Reserva</span>
                    </a>
                </li>

                {{-- --- CONSULTAR RESERVA ADMIN --- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('reservations.index') }}">
                        <i class='bx  bx-bus'></i><span>Lista de Reservas</span>
                    </a>
                </li>

                {{-- --- CALENDARIO ADMIN--- --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('reservations.calendario') }}">
                        <i class='bx  bx-calendar-event'></i> <span>Calendario</span>
                    </a>
                </li>

                {{-- --- MANTENIMIENTO DE USUARIO --- --}}

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('usuarios.index') }}">
                        <i class='bx  bx-gear'></i> <span>Mant. Usuarios</span>
                    </a>
                </li>

                @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
