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
                <h1 class="museo-title">Lockheed F-80C</h1>
                <h5 class="museo-subtitle">“Shooting Star”</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/lockheed_f-80c/Lockheed F-80C-3.png') }}" class="img-fluid museo-img" alt="Lockheed T-33A - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/lockheed_f-80c/Lockheed F-80C-2.png') }}" class="img-fluid museo-img" alt="Lockheed F-80C - Imagen 2">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 museo-text">
                    <p>
                        <strong><strong>Fabricante:</strong></strong>  Lockheed Aircraft Corp. (EE.UU.) <br>
                        <strong><strong>Tipo:</strong></strong> Caza a reacción. <br>
                        <strong><strong>Descripción:</strong></strong> Monorreactor de ala baja, monoplaza, tren triciclo retráctil, y tanques suplementarios en puntas de ala.<br>
                        <strong><strong>Planta motriz:</strong></strong> Turborreactor Allison J 33-A-35 de 2.451 kg. de empuje.<br>
                        <strong><strong>Prestaciones:</strong></strong> Velocidad max. 956km/h. - Techo max. 14.265m. - Alcance 2.220km. <br>
                        <strong><strong>Armamento:</strong></strong> 6 ametralladoras cal. 50, 2 bombas de 450kg, 6 cohetes de 5 pulgadas.<br>
                        <strong><strong>En Uruguay:</strong></strong>  Fuerza Aérea Uruguaya, 1958- 1970 (14 unidades)<br>
                    </p>
                </div>

                <div class="col-lg-6 museo-text">
                    <p>
                        <strong><strong>Manufacturer:</strong></strong> Lockheed Aircraft Corp. (EE.UU.) <br>
                        <strong><strong>Type:</strong></strong>  Interceptor fighter and fighter bomber. <br>
                        <strong><strong>Description:</strong></strong>  Single-engine, low wing, single seat with retractable landing gear, and fuel tip-tanks.<br>
                        <strong><strong>Engine:</strong></strong>  Turbojet Allison J-33-A-35, 5,400 lbs s.t.<br>
                        <strong><strong>Performance:</strong></strong> Max. speed 594 mph. - Max. ceiling 46,800 ft. - Range 1,370 miles.<br>
                        <strong><strong>Armament:</strong></strong>  Six .50 mg, two 1,000 lb. bombs and six 5 inch rockets.<br>
                    </p>
                </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Lockheed F-80C_Shooting Star_-18.png') }}" class="btn btn-museo me-2" download="Lockheed F-80C - Ficha">Descargar ficha</a>
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
