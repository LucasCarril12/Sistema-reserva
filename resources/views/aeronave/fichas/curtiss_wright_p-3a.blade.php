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
                <h1 class="museo-title">Curtiss-Wright Р-ЗА</h1>
                <h5 class="museo-subtitle">“Dehmel”</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/curtiss/curtiss.png') }}" class="img-fluid museo-img" alt="Curtiss-Wright P-3A - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/curtiss/curtiss-1.png') }}" class="img-fluid museo-img" alt="Curtiss-Wright P-3A - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Curtiss-Wright Corporation (EE.UU.) <br>
                            <strong>Tipo:</strong> Simulador de vuelo por instrumentos <br>
                            <strong>Descripción:</strong> Primer simulador de vuelo electrónico del mundo. Fue el primero en resolver las ecuaciones de vuelo y lograr que los controles e instrumentos respondieran como los de un avión real. El diseño de la cabina se basó en la del bombardero B-25J. Se fabricaron 1.948 unidades desde 1943 <br>
                            <strong>En Uruguay:</strong> Aeronáutica Militar / Fuerza Aérea Uruguaya (1 unidad). Recibido poco después de la incorporación de los B-25J (llegados en 1950). Fue utilizado para el entrenamiento de pilotos de B-25 y C-47 en la Base Aérea N°1, Carrasco. En la década de 1970 tuvo un breve pasaje por la Base Aérea N°2, Durazno, y la Escuela Militar de Aeronáutica (EMA), Pando <br>
                            <strong>En exhibición:</strong> Curtiss-Wright Dehmel modelo P-3A, c/n 450, Base Aérea N°1, Carrasco. Mantiene su configuración original de las décadas de 1940 y 1950
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Curtiss-Wright Corporation (USA) <br>
                            <strong>Type:</strong> Instrument flight simulator <br>
                            <strong>Description:</strong> The world's first electronic flight simulator. It was the first to solve flight equations and make the controls and instruments respond as an accurate equivalent of a real aircraft. The cockpit layout was based on that of the B-25J bomber. A total of 1,948 units were manufactured from 1943 <br>
                            <strong>In Uruguay:</strong> Military Aeronautics / Uruguayan Air Force (1 unit). Received shortly after the incorporation of the B-25J bombers (arrived in 1950). It was used for training B-25 and C-47 pilots at Air Base No. 1, Carrasco. In the 1970s it briefly served at Air Base No. 2, Durazno, and at the Military School of Aeronautics (EMA), Pando <br>
                            <strong>Exhibition:</strong> Curtiss-Wright Dehmel model P-3A, c/n 450, Air Base No. 1, Carrasco. Preserves its original 1940s–1950s configuration
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/simulador-curttis.png') }}" class="btn btn-museo me-2" download="Curtiss-Wright P-3A - Ficha">Descargar ficha</a>
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
