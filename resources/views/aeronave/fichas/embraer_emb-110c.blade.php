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
                <h1 class="museo-title">EMBRAER EMB-110C</h1>
                <h5 class="museo-subtitle">(C-95) Bandeirante</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/embraer/emb-1.png') }}" class="img-fluid museo-img" alt="EMBRAER EMB-110C - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/embraer/emb-2.jpg') }}" class="img-fluid museo-img" alt="EMBRAER EMB-110C - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Empresa Brasileira de Aeronáutica S.A. (Brasil) <br>
                            <strong>Tipo:</strong> Transporte de pasajeros, convertible a ambulancia <br>
                            <strong>Descripción:</strong> Bimotor de ala baja, tren de aterrizaje triciclo retráctil <br>
                            <strong>Planta motriz:</strong> Dos turbohélices Pratt &amp; Whitney Canada PT6A-27, 680 hp cada uno <br>
                            <strong>Prestaciones:</strong> Velocidad máxima 425 km/h - Techo de servicio 8.000 m - Alcance 1.900 km <br>
                            <strong>Capacidad:</strong> 3 tripulantes y 15 pasajeros <br>
                            <strong>En Uruguay:</strong> Fuerza Aérea Uruguaya, 1975 al presente (6 unidades: 5 EMB-110C designados C-95 y 1 EMB-110B-1 (R-95) equipado para fotografía aérea). Aviación General: operan algunas unidades de distintos subtipos en empresas de transporte de pasajeros y carga postal <br>
                            <strong>En exhibición:</strong> EMB-110C (C-95) FAU 580 / CX-BJJ, c/n 110-176, Escuadrón Aéreo N°3 (Transporte), Brigada Aérea I, Carrasco, 2005. Primera aeronave vendida por el fabricante fuera de Brasil. Operó entre 1975 y 1994 con el Grupo de Aviación N°6 (Transporte)
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Empresa Brasileira de Aeronáutica S.A. (Brazil) <br>
                            <strong>Type:</strong> Passenger transport aircraft, convertible to air ambulance <br>
                            <strong>Description:</strong> Twin-engine low-wing aircraft with retractable tricycle landing gear <br>
                            <strong>Power plant:</strong> Two Pratt &amp; Whitney Canada PT6A-27 turboprop engines, 680 hp each <br>
                            <strong>Performance:</strong> Maximum speed 425 km/h - Service ceiling 8,000 m - Range 1,900 km <br>
                            <strong>Accommodation:</strong> 3 crew members and 15 passengers <br>
                            <strong>In Uruguay:</strong> Uruguayan Air Force, 1975 to present (6 units: 5 EMB-110C designated C-95 and 1 EMB-110B-1 (R-95) equipped for aerial photography). General Aviation: several aircraft of different subtypes operate in passenger and postal transport services <br>
                            <strong>Exhibition:</strong> EMB-110C (C-95) FAU 580 / CX-BJJ, c/n 110-176, Air Squadron No. 3 (Transport), Air Brigade I, Carrasco, 2005. First aircraft sold by the manufacturer outside Brazil. Operated from 1975 to 1994 with Air Group No. 6 (Transport)
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Embraer EMB-110C_Bandeirante_-04.png') }}" class="btn btn-museo me-2" download="Embraer EMB-110C - Ficha">Descargar ficha</a>
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
