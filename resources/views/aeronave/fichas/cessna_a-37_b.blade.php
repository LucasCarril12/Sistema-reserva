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
                <h1 class="museo-title">CESSNA A-37 B</h1>
                <h5 class="museo-subtitle">"Dragonfly"</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/cessna-a-37/a-37.jpg') }}" class="img-fluid museo-img" alt="CESSNA A-37 B - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/cessna-a-37/a-37-1.jpg') }}" class="img-fluid museo-img" alt="CESSNA A-37 B - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Cessna Aircraft Company (EE.UU.) <br>
                            <strong>Tipo:</strong> Avión de ataque <br>
                            <strong>Descripción:</strong> Birreactor de ala baja, biplaza lado a lado, tren de aterrizaje triciclo retráctil y tanques en punta de ala <br>
                            <strong>Planta motriz:</strong> Dos turborreactores General Electric J85-GE-17A de 1.293 kg de empuje cada uno <br>
                            <strong>Prestaciones:</strong> Velocidad máxima 770 km/h - Techo máximo 11.000 m - Alcance 740 km <br>
                            <strong>Armamento:</strong> Un mini cañón fijo frontal calibre 7,62 mm con cadencia de 1.500 disparos por minuto y hasta 1.800 kg de bombas o cohetes <br>
                            <strong>En Uruguay:</strong> Fuerza Aérea Uruguaya, 1976 al presente (18 unidades) <br>
                            <strong>En exhibición:</strong> A-37B FAU 284, s/n 69-6429, Escuadrón Aéreo N°2 (Caza), Base Aérea N°2, Durazno, 2003. En vuelo en el año 2000 (FAU)
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Cessna Aircraft Company (USA) <br>
                            <strong>Type:</strong> Light attack aircraft <br>
                            <strong>Description:</strong> Twin-engine low-wing aircraft, two-seat side-by-side configuration, retractable tricycle landing gear with wingtip fuel tanks <br>
                            <strong>Power plant:</strong> Two General Electric J85-GE-17A turbojet engines, 1,293 kg thrust each <br>
                            <strong>Performance:</strong> Maximum speed 770 km/h - Service ceiling 11,000 m - Range 740 km <br>
                            <strong>Armament:</strong> One forward-firing 7.62 mm rotary minigun with a rate of fire of 1,500 rounds per minute and up to 1,800 kg of bombs or rockets <br>
                            <strong>In Uruguay:</strong> Uruguayan Air Force, 1976 to present (18 units) <br>
                            <strong>Exhibition:</strong> A-37B FAU 284, s/n 69-6429, Air Squadron No. 2 (Fighter), Air Base No. 2, Durazno, 2003. In flight in 2000 (Uruguayan Air Force)
                        </p>
                    </div>
                </div>


                <div class="text-center mt-4">
                <p style="color: #ededed; font-size: 10px;">La Ficha de este avion no esta disponible para descarga en este momento</p>
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
