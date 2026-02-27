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
                <h1 class="museo-title">Vickers Viscount</h1>
                <h5 class="museo-subtitle">-</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/vickers/vicker.jpg') }}" class="img-fluid museo-img" alt="Farman 50hp - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/vickers/vicker-1.jpg') }}" class="img-fluid museo-img" alt="Farman 50hp - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Vickers-Armstrongs Limited <br>
                            <strong>Tipo:</strong> Transporte comercial de pasajeros <br>
                            <strong>Descripción:</strong> Aeronave británica turbohélice de mediano alcance <br>
                            <strong>Planta motriz:</strong> Cuatro turbohélices Rolls-Royce Dart 525, 1.990 SHP (potencia al eje por motor) <br>
                            <strong>Prestaciones:</strong> Velocidad máxima 563 km/h - Techo de vuelo 25.000 ft - Alcance 2.776 km <br>
                            <strong>Capacidad:</strong> 76 pasajeros (según configuración original) <br>
                            <strong>En Uruguay:</strong> Primeras Líneas Uruguayas de Navegación Aérea (PLUNA), operó un total de 8 aeronaves modelo Viscount: Serie 769D (CX-AQN c/n 321, CX-AQO c/n 322, CX-AQP c/n 323), Serie 745D (CX-BHA c/n 130, CX-BHB c/n 131), Serie 827 (CX-BIY c/n 397, CX-BIZ c/n 316, CX-BJA c/n 400) <br>
                            <strong>En exhibición:</strong> Vickers Viscount Serie 827 c/n 400, fabricado en 1958 para la aerolínea brasileña VASP (PP-SFR), con la que voló hasta 1975. Adquirido por PLUNA e incorporado a su flota como CX-BJA hasta 1982. Donado por PLUNA al Museo Aeronáutico en 1984. Interior restaurado por el grupo de voluntarios “Memorias de PLUNA”, en exhibición desde 2021
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Vickers-Armstrongs Limited <br>
                            <strong>Type:</strong> Commercial passenger transport aircraft <br>
                            <strong>Description:</strong> British medium-range turboprop airliner <br>
                            <strong>Power plant:</strong> Four Rolls-Royce Dart 525 turboprop engines, 1,990 SHP (shaft horsepower per engine) <br>
                            <strong>Performance:</strong> Maximum speed 563 km/h - Service ceiling 25,000 ft - Range 2,776 km <br>
                            <strong>Accommodation:</strong> 76 passengers (original configuration) <br>
                            <strong>In Uruguay:</strong> Primeras Líneas Uruguayas de Navegación Aérea (PLUNA) operated a total of 8 Viscount aircraft: Series 769D (CX-AQN c/n 321, CX-AQO c/n 322, CX-AQP c/n 323), Series 745D (CX-BHA c/n 130, CX-BHB c/n 131), Series 827 (CX-BIY c/n 397, CX-BIZ c/n 316, CX-BJA c/n 400) <br>
                            <strong>Exhibition:</strong> Vickers Viscount Series 827 c/n 400, manufactured in 1958 for the Brazilian airline VASP (PP-SFR), with which it operated until 1975. Acquired by PLUNA and incorporated into its fleet as CX-BJA until 1982. Donated by PLUNA to the Museo Aeronáutico in 1984. The interior was restored by the volunteer group “Memorias de PLUNA”, on display since 2021
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
