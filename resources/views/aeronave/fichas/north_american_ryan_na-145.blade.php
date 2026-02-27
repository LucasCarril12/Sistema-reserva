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
                <h1 class="museo-title">RYAN NA-145</h1>
                <h5 class="museo-subtitle">"Navion"</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/ryan/ryan-1.jpg') }}" class="img-fluid museo-img" alt="RYAN NA-145 - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/ryan/ryan-2.png') }}" class="img-fluid museo-img" alt="RYAN NA-145 - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Ryan Aeronautical Company (EE.UU.) <br>
                            <strong>Tipo:</strong> Turismo cuadriplaza, enlace, ambulancia <br>
                            <strong>Descripción:</strong> Monomotor metálico de ala baja, con tren triciclo retráctil <br>
                            <strong>Planta motriz:</strong> Continental O-470-7, seis cilindros horizontales opuestos, 185hp <br>
                            <strong>Prestaciones (versión militar L-17A):</strong> Velocidad máxima: 260km/h - Techo: 5.100m - Alcance: 1.100km <br>
                            <strong>En Uruguay:</strong> En la Aviación General, a partir de 1947 reciben matrícula unas 15 unidades. Ministerio de Salud Pública (MSP): 1949-1966, total 2 aeronaves utilizadas como ambulancia. Aeronáutica Militar / Fuerza Aérea Uruguaya: 1951-1964, total 3 unidades versión L-17B <br>
                            <strong>En exhibición:</strong> Ryan Navion 185, c/n NAV-4-1118, matrícula CX-AJT, registrado el 09/12/47. Representa a la ambulancia del Ministerio de Salud Pública, matrícula 1903 c. 1950. Era operada por la Aeronáutica Militar / FAU
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Ryan Aeronautical Company (USA) <br>
                            <strong>Type:</strong> Four-seat light aircraft, liaison, ambulance <br>
                            <strong>Description:</strong> Single-engine, low-wing, all-metal aircraft with retractable landing gear <br>
                            <strong>Power plant:</strong> Continental O-470-7, 6-cylinder horizontally opposed, 185hp <br>
                            <strong>Performance (L-17A version):</strong> Maximum speed: 163mph - Maximum ceiling: 17,000ft - Range: 680 miles <br>
                            <strong>In Uruguay:</strong> Civil Aviation: since 1947 about 15 units were registered. Ministerio de Salud Pública (MSP): 1949-1966, 2 aircraft used as ambulances. Aeronáutica Militar / Fuerza Aérea Uruguaya: 1951-1964, 3 L-17B units <br>
                            <strong>Exhibition:</strong> Ryan Navion 185, c/n NAV-4-1118, registration CX-AJT dated 09/12/47. Represents c/n 1903, ambulance of the Ministry of Public Health c. 1950; operated by Aeronáutica Militar / FAU
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/North American Ryan NA-145_Navion_-24.png') }}" class="btn btn-museo me-2" download="North American Ryan NA-145 - Ficha">Descargar ficha</a>
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
