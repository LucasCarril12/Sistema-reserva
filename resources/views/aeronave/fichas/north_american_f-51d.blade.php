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
                <h1 class="museo-title">NORTH AMERICAN F-51D</h1>
                <h5 class="museo-subtitle">Mustang</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/mustang/mustang-1.png') }}" class="img-fluid museo-img" alt="Mustang - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/mustang/mustang-2.png') }}" class="img-fluid museo-img" alt="Mustang - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> North American Aviation Inc. (E.U.A.) <br>
                            <strong>Tipo:</strong> Caza <br>
                            <strong>Descripción:</strong> Monomotor metálico de ala baja con tren de aterrizaje convencional retráctil <br>
                            <strong>Planta motriz:</strong> Packard V-1650-7, motor en V, 1.495 hp <br>
                            <strong>Prestaciones:</strong> Velocidad máxima 703 km/h - Techo máximo 12.800 m - Alcance 1.529 km <br>
                            <strong>Armamento:</strong> Seis ametralladoras Browning M2 de 12,7 mm (.50 in.), dos bombas de 500 kg o diez cohetes HVAR <br>
                            <strong>En Uruguay:</strong> Aeronáutica Militar / Fuerza Aérea Uruguaya, 1950–1960 (25 unidades) <br>
                            <strong>En exhibición:</strong> Réplica en madera a escala 1:4, construida por Jorge Noceti y donada por la familia Noceti. Acondicionada por el Sgto. 1° (E.C.) Joel Ferreira, Gustavo Necco y Víctor Romero; esquema de pintura realizado por Eduardo Luzardo y Fernando Cerovaz. Representa la aeronave matrícula 256 de la Aeronáutica Militar durante su vuelo de traslado a Uruguay por el Alférez Óscar M. Musto. En agradecimiento a su familia por la donación de elementos utilizados en dicho traslado desde los Estados Unidos de América
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> North American Aviation Inc. (USA) <br>
                            <strong>Type:</strong> Fighter aircraft <br>
                            <strong>Description:</strong> Single-engine, all-metal low-wing aircraft with retractable conventional landing gear <br>
                            <strong>Power plant:</strong> Packard V-1650-7 V-12 engine, 1,495 hp <br>
                            <strong>Performance:</strong> Maximum speed 703 km/h - Service ceiling 12,800 m - Range 1,529 km <br>
                            <strong>Armament:</strong> Six 12.7 mm (.50 in.) Browning M2 machine guns, two 500 kg bombs or ten HVAR rockets <br>
                            <strong>In Uruguay:</strong> Military Aeronautics / Uruguayan Air Force, 1950–1960 (25 units) <br>
                            <strong>Exhibition:</strong> Wooden 1:4 scale replica built by Jorge Noceti and donated by the Noceti family. Refurbished by Sgt. 1st Class (E.C.) Joel Ferreira, Gustavo Necco and Víctor Romero; paint scheme by Eduardo Luzardo and Fernando Cerovaz. It represents Military Aeronautics aircraft registration 256 during its ferry flight to Uruguay flown by Ensign Óscar M. Musto. Dedicated in gratitude to his family for the donation of items used during the ferry flight from the United States to Uruguay
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
