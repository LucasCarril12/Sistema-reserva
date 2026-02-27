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
                <h1 class="museo-title">MBB (Bolköw)</h1>
                <h5 class="museo-subtitle">BO-105 P1</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/mbb/mbb-1.jpg') }}" class="img-fluid museo-img" alt="MBB BO-105 P1 - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/mbb/mbb-2.jpg') }}" class="img-fluid museo-img" alt="MBB BO-105 P1 - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Messerschmitt-Bölkow-Blohm GmbH (Alemania) <br>
                            <strong>Tipo:</strong> Helicóptero utilitario (entrenamiento, evacuación médica y transporte de fusileros navales en operaciones especiales, con capacidad de operar en cubierta de buques) <br>
                            <strong>Descripción:</strong> Biturbina, rotor principal cuatripala, con capacidad para 4 tripulantes o 3 tripulantes y 1 camilla o 250kg de carga externa. Esta versión fue originalmente antitanque en servicio con el Ejército Alemán, operando 6 u 8 misiles guiados aire-tierra. El armamento fue desmontado previo a su pase a la ANU <br>
                            <strong>Planta motriz:</strong> Dos turbinas MTU (Motoren- und Turbinen-Union) (Allison) 250-C20B, 420shp c/u <br>
                            <strong>Prestaciones:</strong> Velocidad máx. 242km/h - Alcance 575km - Techo de servicio 5.180m <br>
                            <strong>En Uruguay:</strong> Aviación Naval, 2007 - 2017 (6 unidades) <br>
                            <strong>En exhibición:</strong> Bo-105 P1 (PAH-1) ARMADA 061, c/n 6091, Base Aeronaval Nº2, Laguna del Sauce, Maldonado. Porta el esquema de alta visibilidad utilizado por el 063 en operaciones en el buque ROU 04 General Artigas en 2011
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Messerschmitt-Bölkow-Blohm GmbH (Germany) <br>
                            <strong>Type:</strong> Utility helicopter (training, medical evacuation and naval infantry transport in special operations, capable of operating from ship decks) <br>
                            <strong>Description:</strong> Twin-turbine helicopter with four-blade main rotor, capacity for 4 crew members or 3 crew members and 1 stretcher, or 250kg of external load. This version was originally an anti-tank variant in service with the German Army, operating 6 or 8 air-to-ground guided missiles. The armament was removed prior to its transfer to the Uruguayan Naval Aviation <br>
                            <strong>Power plant:</strong> Two MTU (Motoren- und Turbinen-Union) (Allison) 250-C20B turbines, 420shp each <br>
                            <strong>Performance:</strong> Max. speed 242km/h - Range 575km - Service ceiling 5,180m <br>
                            <strong>In Uruguay:</strong> Naval Aviation, 2007 - 2017 (6 units) <br>
                            <strong>Exhibition:</strong> Bo-105 P1 (PAH-1) ARMADA 061, c/n 6091, Naval Air Base Nº2, Laguna del Sauce, Maldonado. Wears the high-visibility paint scheme used by aircraft 063 during operations aboard ROU 04 General Artigas in 2011
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/MBB (Bolköw) BO-105 P1-08') }}" class="btn btn-museo me-2" download="Farman 50hp - Ficha">Descargar ficha</a>
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
