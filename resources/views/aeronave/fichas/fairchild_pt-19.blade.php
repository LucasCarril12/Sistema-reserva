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
                <h1 class="museo-title">Fairchild PT-19</h1>
                <h5 class="museo-subtitle">“Cornell”</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/fairchild_pt-19/fairchild_pt-19-1.jpg') }}" class="img-fluid museo-img" alt="Fairchild PT-19 - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/fairchild_pt-19/fairchild_pt-19-2.jpg') }}" class="img-fluid museo-img" alt="Fairchild PT-19 - Imagen 2">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 museo-text">
                    <p>
                        <strong><strong>Fabricante:</strong></strong>  Fairchild Engine & Airplane Corporation (EE.UU.)<br>
                        <strong><strong>Tipo:</strong></strong> Entrenador primario <br>
                        <strong><strong>Descripción:</strong></strong> Monomotor biplaza en tándem, de ala baja, tren convencional fijo y estructura mixta (fuselaje con partes en metal y partes en madera; planos de madera con superficies de control enteladas) <br>
                        <strong><strong>Planta motriz:</strong></strong> Ranger L-440-1 de 6 cilindros en línea invertidos, de 175hp <br>
                        <strong><strong>Prestaciones:</strong></strong> Velocidad max. 180km/h - techo max. 4.800m - Alcance 675km <br>
                        <strong><strong>En Uruguay:</strong></strong>  Aeronáutica Militar / Fuerza Aérea Uruguaya, 1942 - 1962 (21 unidades PT-19, 36 unidades PT-26) - Aviación Naval, 1944 - 1960 (3 unidades PT-23, 2 unidades PT-26) - Aviación Civil, aprox. unas 15 unidades (en su mayoría ex FAU)<br>
                    </p>
                </div>

                <div class="col-lg-6 museo-text">
                    <p>
                    <strong><strong>Manufacturer:</strong></strong> Fairchild Engine & Airplane Corporation (U.S.A.)<br>
                    <strong><strong>Type:</strong></strong> Primary Trainer <br>
                    <strong><strong>Description:</strong></strong>  Single-engine, low wing with open tandem cockpits and fixed landing gear, mixed structure (wooden and metallic) and wooden wings with fabric covered control surfaces<br>
                    <strong><strong>Engine:</strong></strong> Ranger L-440-1 6-cylinder inverted inline engine, 175hp <br>
                    <strong><strong>Performance:</strong></strong>  Max. speed 112mph. - max. ceiling 15,700ft - range 420 miles <br>
                    </p>
                </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Fairchild PT-19_Cornell_-27.png') }}" class="btn btn-museo me-2" download="Fairchild PT-19 - Ficha">Descargar ficha</a>
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
