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
                <h1 class="museo-title">North American B-25J</h1>
                <h5 class="museo-subtitle">“Mitchell”</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/northamericanb-25j/b-25j-2.jpg') }}" class="img-fluid museo-img" alt="North American B-25J - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/northamericanb-25j/North American B-25J-1.png') }}" class="img-fluid museo-img" alt="North American B-25J - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> North American Aviation Inc. (EE.UU.) <br>
                            <strong>Tipo:</strong> Bombardero mediano <br>
                            <strong>Descripción:</strong> Bimotor de ala media, estructura metálica, con cola bideriva y tren triciclo retráctil <br>
                            <strong>Planta motriz:</strong> (2) Wright R-2600-29 Cyclone de 14 cilindros en doble estrella, 1.700hp <br>
                            <strong>Prestaciones:</strong> Velocidad máx. 442km/h. - Techo máx. 7.400m. - Alcance 2.200km <br>
                            <strong>Armamento:</strong> 13 ametralladoras cal. .50 y hasta 4.000 libras de bombas (aprox. 1.800kg) <br>
                            <strong>En Uruguay:</strong> Aeronáutica Militar / Fuerza Aérea Uruguaya, 1950 - 1963 (15 unidades, 14 B-25J y un B-25H) <br>
                            <strong>En exhibición:</strong> B-25J s/n 43-27847, ex FAB 5087, donado por el Ministerio de Aeronáutica de Brasil en 1977. Luce los colores del FAU 156 “Charrúa”; Grupo de Aviación Nº3 (Bombardeo), Base Aérea Nº1, Carrasco 1962
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> North American Aviation Inc. (U.S.A.) <br>
                            <strong>Type:</strong> Medium bomber <br>
                            <strong>Description:</strong> Twin-engine, mid-wing aircraft with twin tail and retractable landing gear <br>
                            <strong>Power plant:</strong> (2) Wright R-2600-29 Cyclone 14-cylinder double-row, 1,700hp <br>
                            <strong>Performance:</strong> Max. speed 275mph. - Max. ceiling 24,300ft. - Range 1,367 miles <br>
                            <strong>Armament:</strong> Thirteen .50 machine guns and up to 4,000lbs of bombs
                        </p>
                    </div>
                </div>


                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/North American B-25J_Mitchell_-03.png') }}" class="btn btn-museo me-2" download="North American B-25J - Ficha">Descargar ficha</a>
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
