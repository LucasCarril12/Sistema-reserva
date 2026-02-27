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
                <h1 class="museo-title">Bell UH-1B</h1>
                <h5 class="museo-subtitle">“Iroquois”</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/bell_uh/Bell UH-1B-1.png') }}" class="img-fluid museo-img" alt="Bell UH-1B - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/bell_uh/Bell UH-1B-2.png') }}" class="img-fluid museo-img" alt="Bell UH-1B - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>

                            <strong><strong>Fabricante:</strong></strong> Bell Helicopter Company (EE.UU.) <br>
                            <strong><strong>Tipo:</strong></strong>  Helicóptero utilitario (transporte de tropas, evacuación médica, plataforma de tiro, etc)<br>
                            <strong><strong>Descripción:</strong></strong> Propulsado por turbina, doble comando, rotor bipala, con capacidad para 2 tripulantes y hasta 8 pasajeros o 3 camillas o 2.000kg de carga externa <br>
                            <strong><strong>Planta motriz:</strong></strong> Turbina Lycoming T-53-L-11D de 1.100shp <br>
                            <strong><strong>Prestaciones:</strong></strong> Velocidad de crucero 203km/h. - Alcance 420km. - Techo de servicio 5.150m <br>
                            <strong><strong>Armamento (eventual):</strong></strong> 2 ametralladoras cal. 50, y 2 coheteras LAU 68 <br>
                            <strong><strong>En Uruguay:</strong></strong> Fuerza Aérea Uruguaya, 1976 - 1990 (5 unidades)<br>
                            <strong><strong>En exhibición:</strong></strong> Bell UH-1B FAU 061 c/n 283 s/n 61-0703, perteneciente al Grupo de Aviación Nº5 (Busqueda y rescate), Base Aérea Nº1, Carrasco 1980<br>
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong><strong>Manufacturer:</strong></strong> Bell Helicopter Company (U.S.A.) <br>
                            <strong><strong>Type:</strong></strong> Utility helicopter (troop carrier, medevac, light attack)<br>
                            <strong><strong>Description:</strong></strong> Single turbine, two blade rotor with accomodation for 2 crew and up to 8 passengers or 3 stretchers or 4,400 lbs external load <br>
                            <strong><strong>Power plant:</strong></strong> Lycoming T-53-L-11D turboshaft, 1,100shp <br>
                            <strong><strong>Performance:</strong></strong> Cruising speed 126mph. - Service ceiling 16,900ft. - Range 260 miles <br>
                            <strong><strong>Armament (optional):</strong></strong> Two .50 mg and two LAU 68 rocket pods<br>
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Bell UH-1B_Iroquois_-05.png') }}" class="btn btn-museo me-2" download="Bell UH-1B - Ficha">Descargar ficha</a>
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
