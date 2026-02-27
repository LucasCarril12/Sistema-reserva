<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Museo Aeronáutico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
     <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://cdn.boxicons.com/3.0.5/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/box-custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/aeronave.css') }}" rel="stylesheet" type="text/css" />

    {{-- AOS Animation css --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <div class="layout-wrapper landing bg-welcome-color">
        <section class="section" id="hero" style="background-image: url('{{ asset('assets/images/aeronaves/header-aeronaves.png') }}'); background-size: cover; background-position: center;">
            @include('layouts.landing.navbar')
            <div class="bg-overlay" style="background-color: black;opacity:0.3"></div> <!-- oscuridad -->
        </section>

        <section class="section-museo py-5">
            <div class="container">

                <div class="text-center mb-5">
                <h1 class="museo-title">WESTLAND</h1>
                <h5 class="museo-subtitle">Wessex HC Mk2</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/westland/westland-1.jpg') }}" class="img-fluid museo-img" alt="Westland Wessex HC Mk2 - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/westland/westland-2.jpg') }}" class="img-fluid museo-img" alt="Westland Wessex HC Mk2 - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Westland Aircraft Ltd. (Reino Unido) <br>
                            <strong>Tipo:</strong> Helicóptero utilitario <br>
                            <strong>Descripción:</strong> Biturbina, rotor articulado de cuatro palas, sistemas de autoestabilización y flotación, tren de aterrizaje fijo y sección de cola plegable <br>
                            <strong>Planta motriz:</strong> (2) Rolls Royce Gnome, 1.500 shp <br>
                            <strong>Prestaciones:</strong> Velocidad de crucero 180 km/h - Techo máximo 3.050 m - Autonomía 3 h 30 min <br>
                            <strong>Capacidad:</strong> 3–4 tripulantes, 16 pasajeros u 8 camillas. Grúa de rescate y gancho de carga según configuración <br>
                            <strong>En Uruguay:</strong> Fuerza Aérea Uruguaya, 1997 hasta el presente (11 unidades). Aviación Naval, 1998 hasta el presente (5 unidades HC Mk2 y 3 del modelo 60) <br>
                            <strong>En exhibición:</strong> Westland Wessex HC Mk2 FAU 076, ex RAF s/n XR 497 (Q), Escuadrón Aéreo N°5 (Helicópteros), Base Aérea N°1, Carrasco, 2003. Puerto de Montevideo, 9 de agosto de 2002. Fotografía: Fernando Ceróvaz
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Westland Aircraft Ltd. (UK) <br>
                            <strong>Type:</strong> Utility helicopter <br>
                            <strong>Description:</strong> Twin-turbine helicopter with four-blade articulated main rotor, auto-stabilization and flotation systems, fixed landing gear and folding tail section for storage <br>
                            <strong>Power plant:</strong> (2) Rolls Royce Gnome turboshaft engines, 1,500 shp each <br>
                            <strong>Performance:</strong> Cruising speed 110 mph - Maximum ceiling 10,000 ft - Endurance 3 h 30 min <br>
                            <strong>Accommodation:</strong> 3–4 crew and 16 passengers, or 8 stretchers. Rescue hoist and cargo hook according to configuration <br>
                            <strong>In Uruguay:</strong> Uruguayan Air Force, 1997 to present (11 units). Naval Aviation, 1998 to present (5 HC Mk2 units and 3 model 60) <br>
                            <strong>Exhibition:</strong> Westland Wessex HC Mk2 FAU 076, ex RAF s/n XR 497 (Q), Air Squadron No. 5 (Helicopters), Air Base No. 1, Carrasco, 2003
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Westland Wessex HC Mk2-37') }}" class="btn btn-museo me-2" download="Westland Wessex HC Mk2 - Ficha">Descargar ficha</a>
                <a href="{{ route('aeronaves.index') }}" class="btn btn-museo-outline">Volver</a>
                </div>
            </div>
        </section>

        @include('layouts.landing.footer-main')
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/pages/nft-landing.init.js"></script>

    <script>
        // Cambiar logo en navbar al hacer scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const logoDark = document.querySelector('.card-logo-dark');
            const logoLight = document.querySelector('.card-logo-light');

            if (window.scrollY > 50) {
                // Al hacer scroll, mostrar logo light (favicon)
                logoDark.style.display = 'none';
                logoLight.style.display = 'inline';
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            } else {
                // Sin scroll, mostrar logo dark (mujer alada)
                logoDark.style.display = 'inline';
                logoLight.style.display = 'none';
                navbar.style.backgroundColor = 'transparent';
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900,     // duración de la animación
            easing: 'ease-out',
            once: true,        // anima solo una vez (ideal para hero)
            offset: 120
        });
    </script>
</body>
</html>
