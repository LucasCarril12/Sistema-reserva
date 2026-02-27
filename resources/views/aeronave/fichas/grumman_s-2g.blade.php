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
                <h1 class="museo-title">GRUMMAN S-2G</h1>
                <h5 class="museo-subtitle">"Tracker”</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/grumman/grumman-1.jpg') }}" class="img-fluid museo-img" alt="GRUMMAN S-2G - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/grumman/grumman-2.jpg') }}" class="img-fluid museo-img" alt="GRUMMAN S-2G - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Grumman Aerospace Corporation (EE.UU.) <br>
                            <strong>Tipo:</strong> Patrulla marítima y guerra antisubmarina <br>
                            <strong>Descripción:</strong> Bimotor de ala alta plegable para operar en portaaviones, estructura metálica y tren triciclo retráctil, con capacidad para 4 tripulantes <br>
                            <strong>Planta motriz:</strong> (2) Wright R-1820-82WA Cyclone radiales de 9 cilindros, 1.525hp <br>
                            <strong>Prestaciones:</strong> Velocidad máxima: 450km/h - Techo de servicio: 6.700m - Alcance: 2.170km <br>
                            <strong>Armamento:</strong> 2.180kg de armamento interno y externo, incluyendo bombas, cargas de profundidad y 6 cohetes en las perchas subalares <br>
                            <strong>En Uruguay:</strong> Aviación Naval, total 3 unidades S-2A (1965-1990) y 3 S-2G (1982-2000) <br>
                            <strong>En exhibición:</strong> S-2G ARMADA 856 (originalmente S-2E), c/n 263C Bu.No. 152376, Escuadrón de Exploración y Antisubmarino, Base Aeronaval N°2, Laguna del Sauce, Maldonado, 1988
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Grumman Aerospace Corporation (USA) <br>
                            <strong>Type:</strong> Maritime patrol and anti-submarine warfare aircraft <br>
                            <strong>Description:</strong> Twin-engine, high-wing aircraft with folding wings for carrier operations, all-metal construction, retractable landing gear, 4 crew members <br>
                            <strong>Power plant:</strong> (2) Wright R-1820-82WA Cyclone, 9-cylinder radial, 1,525hp <br>
                            <strong>Performance:</strong> Maximum speed: 280mph - Service ceiling: 22,000ft - Range: 1,350 miles <br>
                            <strong>Armament:</strong> 4,800lb of internal and external weaponry including bombs, depth charges and 6 rockets on wing stations <br>
                            <strong>In Uruguay:</strong> Aviación Naval, total 3 S-2A units (1965-1990) and 3 S-2G units (1982-2000) <br>
                            <strong>Exhibition:</strong> S-2G ARMADA 856 (originally S-2E), c/n 263C Bu.No. 152376, Escuadrón de Exploración y Antisubmarino, Base Aeronaval N°2, Laguna del Sauce, Maldonado, 1988
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Grumman S-2G_Tracker_-20.png') }}" class="btn btn-museo me-2" download="Grumman S-2G - Ficha">Descargar ficha</a>
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
