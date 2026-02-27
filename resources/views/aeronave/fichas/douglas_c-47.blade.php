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
                <h1 class="museo-title">DOUGLAS C-47</h1>
                <h5 class="museo-subtitle">"Skytrain" (Cabina)</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/c-47/c-47.jpg') }}" class="img-fluid museo-img" alt="DOUGLAS C-47 - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/c-47/c-47-1.jpg') }}" class="img-fluid museo-img" alt="DOUGLAS C-47 - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Douglas Aircraft Co. (EE.UU.) <br>
                            <strong>Tipo:</strong> Transporte de pasajeros y carga (versión civil DC-3, versión militar C-47) <br>
                            <strong>Descripción:</strong> Bimotor de ala baja, estructura metálica con superficies móviles enteladas y tren de aterrizaje convencional retráctil <br>
                            <strong>Planta motriz:</strong> Dos Pratt &amp; Whitney R-1830-92 de 14 cilindros en doble estrella, 1.200 hp cada uno <br>
                            <strong>Prestaciones:</strong> Velocidad de crucero 250 km/h - Techo máximo 7.300 m - Alcance 2.150 km <br>
                            <strong>Capacidad:</strong> 2 a 4 tripulantes y 21 a 28 pasajeros, según configuración <br>
                            <strong>En Uruguay:</strong> Aeronáutica Militar / Fuerza Aérea Uruguaya, 1947–1988 (22 unidades). PLUNA – Primeras Líneas Uruguayas de Navegación Aérea, 1946–1971 (8 aeronaves, de las cuales solo una fue DC-3 original) <br>
                            <strong>En exhibición:</strong> C-47A-70-DL, FAU 521, c/n 19231, s/n 42-100768, Grupo de Aviación N°3 (Transporte), Base Aérea N°1, Carrasco, 1978
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Douglas Aircraft Co. (USA) <br>
                            <strong>Type:</strong> Passenger and cargo transport aircraft (civil version DC-3, military version C-47) <br>
                            <strong>Description:</strong> Twin-engine low-wing aircraft, all-metal structure with fabric-covered control surfaces and retractable conventional landing gear <br>
                            <strong>Power plant:</strong> Two Pratt &amp; Whitney R-1830-92 14-cylinder twin-row radial engines, 1,200 hp each <br>
                            <strong>Performance:</strong> Cruising speed 250 km/h - Service ceiling 7,300 m - Range 2,150 km <br>
                            <strong>Accommodation:</strong> 2 to 4 crew members and 21 to 28 passengers, depending on configuration <br>
                            <strong>In Uruguay:</strong> Military Aeronautics / Uruguayan Air Force, 1947–1988 (22 units). PLUNA – Primeras Líneas Uruguayas de Navegación Aérea, 1946–1971 (8 aircraft, only one being an original DC-3) <br>
                            <strong>Exhibition:</strong> C-47A-70-DL, FAU 521, c/n 19231, s/n 42-100768, Air Group No. 3 (Transport), Air Base No. 1, Carrasco, 1978
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Douglas C-47_Skytrain_-16.png') }}" class="btn btn-museo me-2" download="Douglas C-47 - Ficha">Descargar ficha</a>
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
