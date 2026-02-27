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
            <div class="section-ul py-5">
                <div class="container">

                    <!-- Título -->
                    <div class="mb-4">
                        <h1 class="titulo-ul">
                            Ultraliviano Motorizado <span class="text-uppercase ulm">(ULM)</span>
                        </h1>
                    </div>

                    <!-- Intro + Imagen -->
                    <div class="row align-items-start mb-5">
                        <div class="col-lg-7">
                            <p>
                                En la década de los 80', a partir del ala delta, se desarrolló este nuevo tipo de aeronave agregando la planta motopropulsora (motor y hélice), tren de aterrizaje y asientos.
                                <br><br>
                                El modelo que se exhibe fue el primero de su clase armado en Uruguay, con certificado de aeronavegabilidad y matriculado. Es de la primera generación.
                                <br><br>
                                <strong>Diseño:</strong> RAINBOW Ultraleve Ltda. (San Pablo - Brasil) <br>
                                <strong>Modelo:</strong> R-12 <br>
                                <strong>Materiales:</strong> Caño de aleación de aluminio y tela Dacrón
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset('assets/images/aeronaves/img-fichas/ultraliviano/img-ul-1.jpg') }}" class="img-fluid rounded img-ultraliviano" alt="Ultraliviano">
                        </div>
                    </div>

                    <!-- 2 Columnas principales -->
                    <div class="row">

                        <!-- Columna Izquierda -->
                        <div class="col-lg-6 mb-4">

                            <h3 class="subtitulo">Dimensiones y Características</h3>
                            <p>
                                <strong>Envergadura:</strong> 10 m <br>
                                <strong>Longitud:</strong> 5 m <br>
                                <strong>Altura:</strong> 3 m <br>
                                <strong>Peso vacío:</strong> 110 kg <br>
                                <strong>Carga máxima:</strong> 190 kg <br>
                                <strong>Peso máximo:</strong> 300 kg
                            </p>

                            <h3 class="subtitulo mt-4">Planta motopropulsora</h3>
                            <p>
                                <strong>Motor:</strong> ORC, fabricante RAINBOW Ultraleve <br>
                                <strong>Tipo:</strong> Explosión, dos tiempos, refrigerado por aire, bicilíndrico invertido <br>
                                <strong>Cilindrada:</strong> 550 cc <br>
                                <strong>Potencia:</strong> 45 CV a 6.500 rpm <br>
                                <strong>Carburador:</strong> Bing <br>
                                <strong>Arranque:</strong> Manual <br>
                                <strong>Hélice:</strong> O.S. Czelusniak bipala, madera 52" x 34"
                            </p>

                            <img src="{{ asset('assets/images/aeronaves/img-fichas/ultraliviano/ulm_artigas.png') }}" class="img-fluid rounded mt-3 img-ultraliviano" alt="ULM Artigas">

                        </div>

                        <!-- Columna Derecha -->
                        <div class="col-lg-6 mb-4">

                            <h3 class="subtitulo">Particularidades</h3>
                            <p>
                                <strong>Velocidad de pérdida:</strong> 30 km/h <br>
                                <strong>Velocidad crucero:</strong> 60 km/h <br>
                                <strong>Carrera despegue:</strong> 6 a 10 m <br>
                                <strong>Carrera aterrizaje:</strong> 20 a 30 m <br>
                                <strong>Tiempo de vuelo:</strong> 2 hs <br>
                                <strong>Alcance:</strong> 100 km
                            </p>

                            <h3 class="subtitulo mt-4">Superficies de Control</h3>
                            <p>
                                <strong>Alabeo:</strong> En lugar de alerones, cuenta con spoilers en el extradós del ala.
                                <br><br>
                                <strong>Viraje:</strong> Se logra moviendo lateralmente el bastón de mando que acciona el timón de dirección.
                                <br><br>
                                <strong>Ascenso y descenso:</strong> El bastón actúa sobre el timón de profundidad. Adelante para descender, atrás para ascender.
                            </p>

                        </div>
                    </div>

                    <!-- Galería inferior -->
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('assets/images/aeronaves/img-fichas/ultraliviano/img-ul-3.jpg') }}" class="img-fluid rounded  img-ultraliviano" alt="Ultraliviano">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('assets/images/aeronaves/img-fichas/ultraliviano/img-ul-2.jpg') }}" class="img-fluid rounded  img-ultraliviano" alt="Ultraliviano">
                        </div>
                    </div>

                    <!-- Botón -->
                    <div class="text-center mt-4 d-flex justify-content-center gap-3">
                        <a href="{{ asset('assets/images/aeronaves/fichas_aeronaves/FICHA-ULTRA-LIVIANO.pdf') }}" class="btn btn-museo"
                        download="Ultra-liviano - Ficha Técnica.pdf">
                        Descargar Ficha
                        </a>
                        <a href="{{ route('aeronaves.index') }}" class="btn btn-museo btn-museo-outline" style="background-color: #ffff;color: #0b2a5b; border: 1px solid #0b2a5b;">Volver</a>
                    </div>

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
