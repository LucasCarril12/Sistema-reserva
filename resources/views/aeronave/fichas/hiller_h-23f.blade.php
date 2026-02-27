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
                <h1 class="museo-title">HILLER H-23F</h1>
                <h5 class="museo-subtitle">"Raven"</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/hiller/hiller-1.jpg') }}" class="img-fluid museo-img" alt="Hiller H-23F - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/hiller/hiller-2.jpeg') }}" class="img-fluid museo-img" alt="Hiller H-23F - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Hiller Aircraft Corporation (EE.UU.) <br>
                            <strong>Tipo:</strong> Helicóptero utilitario y de entrenamiento <br>
                            <strong>Descripción:</strong> Modelo UH-12-4 (designación militar H-23F), doble comando, cabina tipo burbuja y rotor principal bipala metálico. Capacidad para 2 tripulantes y 2 pasajeros, o 2 camillas, o 500 kg de carga externa <br>
                            <strong>Planta motriz:</strong> Lycoming VO-540-9A, 6 cilindros opuestos, 305 hp <br>
                            <strong>Prestaciones:</strong> Velocidad de crucero 145 km/h - Techo máximo 4.600 m - Alcance 370 km <br>
                            <strong>En Uruguay:</strong> Fuerza Aérea Uruguaya, 1964–1990 (4 unidades). Aviación General operó una unidad luego de su baja en la FAU <br>
                            <strong>En exhibición:</strong> Hiller H-23F ex FAU 026 c/n 2297, s/n 64-14850, matrícula civil CX-BNR. Hiller H-23F FAU 028, Base Aérea N°1, Carrasco, 1969. Fotografía: H. Gareiso
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Hiller Aircraft Corporation (USA) <br>
                            <strong>Type:</strong> Utility and training helicopter <br>
                            <strong>Description:</strong> Model UH-12-4 (military designation H-23F), dual controls, bubble-type cockpit and two-blade metal main rotor. Capacity for 2 crew and 2 passengers, or 2 stretchers, or 1,100 lbs of external load <br>
                            <strong>Power plant:</strong> Lycoming VO-540-9A, 6-cylinder opposed engine, 305 hp <br>
                            <strong>Performance:</strong> Cruising speed 90 mph - Maximum ceiling 15,200 ft - Range 225 miles <br>
                            <strong>In Uruguay:</strong> Uruguayan Air Force, 1964–1990 (4 units). One aircraft later operated in General Aviation after retirement from FAU service <br>
                            <strong>Exhibition:</strong> Hiller H-23F ex FAU 026 c/n 2297, s/n 64-14850, civilian registration CX-BNR
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Hiller H-23F_Raven_-21') }}" class="btn btn-museo me-2" download="Hiller H-23F - Ficha">Descargar ficha</a>
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
