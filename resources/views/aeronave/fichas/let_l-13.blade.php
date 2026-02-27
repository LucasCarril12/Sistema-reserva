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
                <h1 class="museo-title">LET L-13</h1>
                <h5 class="museo-subtitle">Blanik</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/let/let-1.jpg') }}" class="img-fluid museo-img" alt="LET L-13 - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/let/let-2.jpg') }}" class="img-fluid museo-img" alt="LET L-13 - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> LET VZLÚ Letňany (Checoslovaquia) <br>
                            <strong>Tipo:</strong> Planeador utilitario para instrucción y acrobacia <br>
                            <strong>Descripción:</strong> Monoplano de ala alta, biplaza en tándem, estructura metálica y tren semirretráctil <br>
                            <strong>Planta motriz:</strong> Opcional <br>
                            <strong>Prestaciones:</strong> Velocidad máxima 253 km/h - Techo de servicio 5.200 m - Relación de planeo 1:28 <br>
                            <strong>En Uruguay:</strong> Volovelismo deportivo: desde 1976 se registran 2 unidades adquiridas por la Dirección General de Aeronáutica Civil (DGAC). Fuerza Aérea Uruguaya: 2009 al presente (1 unidad, activa desde 2014) <br>
                            <strong>En exhibición:</strong> L-13 Blaník, c/n 26309, adquirido por la DGAC en 1976, matriculado CX-BJP el 31/05/1977. Cedido en préstamo al Centro Uruguayo de Planeadores (CUP). Conserva el esquema de colores original utilizado durante todo su servicio (1977–2008). Fue motorizado en 1988 con un motor Volkswagen automotriz de 4 cilindros, manteniendo esa planta motriz hasta 1996
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> LET VZLÚ Letňany (Czechoslovakia) <br>
                            <strong>Type:</strong> Utility glider for training and aerobatics <br>
                            <strong>Description:</strong> High-wing monoplane, two-seat tandem configuration, all-metal structure with semi-retractable landing gear <br>
                            <strong>Power plant:</strong> Optional <br>
                            <strong>Performance:</strong> Maximum speed 253 km/h - Service ceiling 5,200 m - Glide ratio 1:28 <br>
                            <strong>In Uruguay:</strong> Sport gliding: since 1976, 2 units registered and acquired by the Dirección General de Aeronáutica Civil (DGAC). Uruguayan Air Force: 2009 to present (1 unit, active since 2014) <br>
                            <strong>Exhibition:</strong> L-13 Blaník, c/n 26309, acquired by the DGAC in 1976, registered as CX-BJP on 05/31/1977. Loaned to the Centro Uruguayo de Planeadores (CUP). It retains the original color scheme worn throughout its service life (1977–2008). It was motorized in 1988 with a 4-cylinder Volkswagen automotive engine, retaining that power plant until 1996
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/LET L-13_Blanik_-23.png') }}" class="btn btn-museo me-2" download="LET L-13 Blaník - Ficha">Descargar ficha</a>
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
