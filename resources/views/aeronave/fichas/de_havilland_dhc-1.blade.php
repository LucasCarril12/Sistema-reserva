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
                <h1 class="museo-title">DE HAVILLAND DHC-1</h1>
                <h5 class="museo-subtitle">“Chipmunk”</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/dehaviland_dhc1/De Havilland DHC-1-10.jpg') }}" class="img-fluid museo-img" alt="De Havilland DHC-1 - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/dehaviland_dhc1/De Havilland DHC-1-10-2.jpg') }}" class="img-fluid museo-img" alt="De Havilland DHC-1 - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> De Havilland Aircraft Co. Ltd. (Reino Unido), diseño: de Havilland Canada <br>
                            <strong>Tipo:</strong> Entrenador primario <br>
                            <strong>Descripción:</strong> Monomotor metálico, de ala baja, doble cabina en tándem, tren convencional fijo <br>
                            <strong>Planta motriz:</strong> De Havilland Gipsy Major 10 Mk-2, 4 cilindros en línea invertidos, 145hp <br>
                            <strong>Prestaciones (aprox):</strong> Velocidad de crucero: 190km/h - Techo máximo: 5.000m - Alcance: 450km <br>
                            <strong>En Uruguay:</strong> El 20 de agosto de 1954 arriba el primer DHC-1 matrícula británica G-ANOW, al mando del Group Captain (RAF) Alexander McDougall, quedando basado en nuestro país como demostrador de de Havilland para América del Sur. Fue bautizado "Urutaú". Fuerza Aérea Uruguaya: 1955-1962, total 10 unidades versión Mk 20. Aviación General: luego de su baja en la FAU, varios continuaron volando con matrícula civil <br>
                            <strong>En exhibición:</strong> DHC-1 “Chipmunk” Mk 21 G-ANOW "Urutaú" c/n C1/0972, con el esquema original de pintura que portaba al arribar al país en 1954
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> De Havilland Aircraft Co. Ltd. (UK), design: de Havilland Canada <br>
                            <strong>Type:</strong> Primary trainer <br>
                            <strong>Description:</strong> All-metal single-engine low-wing aircraft, two-place tandem cockpit and fixed landing gear <br>
                            <strong>Power plant:</strong> De Havilland Gipsy Major 10 Mk-2, 4-cylinder inline inverted, 145hp <br>
                            <strong>Performance (Approx.):</strong> Cruising speed: 119mph - Maximum ceiling: 16,400ft - Range: 280 miles <br>
                            <strong>In Uruguay:</strong> On 20 August 1954 the first DHC-1 arrived, flown by Group Captain (RAF) Alexander MacDougall, British registration G-ANOW, remaining in Uruguay as a de Havilland demonstrator for South America. It was christened "Urutaú". Fuerza Aérea Uruguaya: 1955-1962, a total of 10 Mk 20 units. General Aviation: after retirement from the FAU, several continued flying under civil registration <br>
                            <strong>Exhibition:</strong> DHC-1 "Chipmunk" Mk 21 G-ANOW "Urutaú" c/n C1/0972, with the original paint scheme worn upon arrival in 1954
                        </p>
                    </div>
                </div>


                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/de Havilland DHC-1_Chipmunk_-15.png') }}" class="btn btn-museo me-2" download="De Havilland DHC-1 - Ficha">Descargar ficha</a>
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
