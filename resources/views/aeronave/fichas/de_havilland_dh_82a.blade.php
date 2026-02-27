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
                <h1 class="museo-title">De Havilland DH.82A</h1>
                <h5 class="museo-subtitle">“Tiger Moth”</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/de_havilland_dh_82a/de_havilland_dh_82_23.png') }}" class="img-fluid museo-img" alt="De Havilland DH.82A - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/de_havilland_dh_82a/de_havilland_dh_82.png') }}" class="img-fluid museo-img" alt="De Havilland DH.82A - Imagen 2">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 museo-text">
                    <p>
                        <strong><strong>Fabricante:</strong></strong>  De Havilland Aircraft Co. Ltd. (Reino Unido)<br>
                        <strong><strong>Tipo:</strong></strong> Instrucción, entrenamiento y enlace<br>
                        <strong><strong>Descripción:</strong></strong> Monomotor, biplano, doble cabina en tándem, tren convencional fijo, de estructura mixta (metal y madera entelada)<br>
                        <strong><strong>Planta motriz:</strong></strong> De Havilland Gipsy Major, 4 cilindros invertidos en línea, 130hp<br>
                        <strong><strong>Prestaciones:</strong></strong> Velocidad max. 175km/h - techo max. 4.185m - alcance 486km<br>
                        <strong><strong>Armamento:</strong></strong> Un soporte opcional para bombas livianas bajo el fuselaje<br>
                        <strong><strong>En Uruguay:</strong></strong> Escuela Militar de Aviación / Aeronáutica Militar: 1935 - 1949 (18 unidades)<br>
                        <strong><strong>En exhibición:</strong></strong>  DH.82A probablemente Aeronáutica Militar 17, c/n 3619, División Talleres, Almacenes Generales y Servicios, Aeródromo Militar “Capitán Juan Manuel Boiso Lanza”, Montevideo 1937<br>
                    </p>
                </div>

                <div class="col-lg-6 museo-text">
                    <p>
                        <strong><strong>Manufacturer:</strong></strong> De Havilland Aircraft Co. Ltd. (United Kingdom)<br>
                        <strong><strong>Type:</strong></strong> Instruction, training and liaison<br>
                        <strong><strong>Description:</strong></strong>  Single-engine, biplane with open tandem cockpits and fixed conventional landing gear. Mixed structure (wooden and metallic)<br>
                        <strong><strong>Power plant:</strong></strong>  De Havilland Gipsy Major, inverted 4 cylinders inline, 130hp<br>
                        <strong><strong>Performance (approx.):</strong></strong> Max. speed: 109mph - service ceiling: 13,730 ft - range: 302 miles<br>
                        <strong><strong>Armament:</strong></strong> Optional rack for light bombs under the fuselage<br>
                        <strong><strong>En Uruguay:</strong></strong> Escuela Militar de Aviación / Aeronáutica Militar: 1935 - 1949 (18 unidades)<br>
                        <strong><strong>En exhibición:</strong></strong>  DH.82A probablemente Aeronáutica Militar 17, c/n 3619, División Talleres, Almacenes Generales y Servicios, Aeródromo Militar “Capitán Juan Manuel Boiso Lanza”, Montevideo 1937<br>
                    </p>
                </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/de Havilland DH-82A_Tiger Moth_-36.png') }}"
                class="btn btn-museo me-2"
                download="De Havilland DH-82A - Ficha">
                Descargar ficha
                </a>

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
