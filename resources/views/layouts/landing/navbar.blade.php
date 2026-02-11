<nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/images/logo-mujer-alada-blanca.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="50">
            <img src="{{ asset('assets/images/favicon.png') }}" class="card-logo card-logo-light" alt="logo light" height="50">
        </a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            {{-- --- NAVBAR LINKS --- --}}
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}"
                    href="{{ route('welcome') }}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}#visita_guiada">Vistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}#instalaciones">Instalaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('aeronaves.index') ? 'active' : '' }}"
                    href="{{ route('aeronaves.index') }}">
                        Aeronaves
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/aama_uruguay/">AAMA</a>
                </li>
            </ul>

            @if (Route::has('login'))
                <nav class="flex items-center justify-center gap-5">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary rounded-pill m-2 px-3"> Iniciar sesión </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="btn btn-primary btn-login m-2 px-3" >
                            Ingresar a Mi Cuenta
                        </a>
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</nav>
