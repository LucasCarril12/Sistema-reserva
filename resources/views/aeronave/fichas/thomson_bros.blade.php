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
                <h1 class="museo-title">Thompson Bros</h1>
                <h5 class="museo-subtitle">Bilston</h5>
                </div>

                <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/thomsonbros/tb-1.jpg') }}" class="img-fluid museo-img" alt="Thompson Bros - Imagen 1">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/aeronaves/img-fichas/thomsonbros/tb-2.jpg') }}" class="img-fluid museo-img" alt="Thompson Bros - Imagen 2">
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Fabricante:</strong> Thompson Bros (Bilston) Ltd. (Reino Unido) <br>
                            <strong>Tipo:</strong> Vehículo reabastecedor de combustible aeronáutico <br>
                            <strong>Descripción:</strong> Chasis triciclo. Capacidad: 1 tanque de combustible de 2.000 litros y 1 tanque de 200 litros para aceite. Bomba de combustible con régimen de abastecimiento de 80 litros por minuto <br>
                            <strong>Planta motriz:</strong> Motor Ford 10 hp a nafta, con transmisión por cadena <br>
                            <strong>En Uruguay:</strong> 1 unidad utilizada por la compañía Shell a principios de la década de 1950 en el recién inaugurado Aeropuerto Nacional de Carrasco. En 1976 fue transferido al Grupo de Aviación N°5 de la Fuerza Aérea Uruguaya, Base Aérea N°1, Carrasco, para el abastecimiento de combustible JP4 a helicópteros Bell y, ocasionalmente, a los jets Lockheed T-33. Tras su retiro en la década de 1990 regresó a la compañía Shell, que lo exhibió con sus colores en una estación de servicio de Montevideo <br>
                            <strong>En exhibición:</strong> Thompson Bros P505 Mk V c/n 31643/45, fecha de entrega en Inglaterra 22/10/1945. Luce los colores aplicados por la compañía Shell luego de su retiro de la FAU. Donado al museo a fines de la década de 1990
                        </p>
                    </div>

                    <div class="col-lg-6 museo-text">
                        <p>
                            <strong>Manufacturer:</strong> Thompson Bros (Bilston) Ltd. (United Kingdom) <br>
                            <strong>Type:</strong> Aircraft refuelling vehicle <br>
                            <strong>Description:</strong> Tricycle chassis. Capacity: one 2,000-litre fuel tank and one 200-litre oil tank. Fuel pump with a supply rate of 80 litres per minute <br>
                            <strong>Power plant:</strong> Ford 10 hp petrol engine with chain-driven transmission <br>
                            <strong>In Uruguay:</strong> One unit operated by Shell in the early 1950s at the newly inaugurated Carrasco National Airport. In 1976 it was transferred to the Uruguayan Air Force, Air Group No. 5, Air Base No. 1, Carrasco, to supply JP4 aviation fuel to Bell helicopters and occasionally to Lockheed T-33 jets. After its retirement in the 1990s, it returned to Shell and was displayed in company colours at a service station in Montevideo <br>
                            <strong>Exhibition:</strong> Thompson Bros P505 Mk V c/n 31643/45, delivered in England on 22/10/1945. Donated to the museum in the late 1990s and still wearing the Shell paint scheme applied after retirement from FAU service
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/Thompson Bros P505 Mk V-09.png') }}" class="btn btn-museo me-2" download="Thompson Bros - Ficha">Descargar ficha</a>
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
