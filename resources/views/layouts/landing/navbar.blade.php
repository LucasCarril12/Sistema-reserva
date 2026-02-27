<nav class="navbar navbar-expand-lg navbar-landing navbar-dark fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/images/logo-mujer-alada-blanca.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="50">
            <img src="{{ asset('assets/images/favicon.png') }}" class="card-logo card-logo-light" alt="logo light" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color:#fff;"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            {{-- --- NAVBAR LINKS --- --}}
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}"
                    href="{{ route('welcome') }}#hero">
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
                    <a class="nav-link" href="https://www.instagram.com/aama_uruguay/" target="_blank">AAMA</a>
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');

    const handleNavbarScroll = function() {
      if (window.scrollY > 50) {
        // Estado con scroll: fondo visible, tema claro
        navbar.classList.add('bg-welcome-color');
        navbar.classList.remove('navbar-dark');
        navbar.classList.add('navbar-light');
      } else {
        // Estado inicial: transparente, tema oscuro
        navbar.classList.remove('bg-welcome-color');
        navbar.classList.add('navbar-dark');
        navbar.classList.remove('navbar-light');
      }
    };

    // Ejecutar al cargar la página
    handleNavbarScroll();

    // Escuchar el evento scroll
    window.addEventListener('scroll', handleNavbarScroll);
  });
</script>
