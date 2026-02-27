<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
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

    {{-- AOS Animation css --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example" style="overflow: hidden;">
    <!-- Begin page -->
    <div class="layout-wrapper landing bg-welcome-color">
        <!-- start hero section -->
        <section class="section" id="hero" style="width:100%;background-image: url('{{ asset('assets/images/auth-one-bg.png') }}'); background-size: cover; background-position: center;">
            @include('layouts.landing.navbar')
            <div class="bg-overlay" style="background-color: black;opacity:0.6"></div> <!-- oscuridad -->
        </section>
        <!-- end hero section -->

        <!-- start wallet -->
        <section class="section" id="inicio">
            <div class="container" data-aos-delay="100">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="hero-content">
                            <div class="hero-tag" data-aos="fade-right" data-aos-delay="250">
                                <span class="tag-text">Pasado, presente y futuro del vuelo</span>
                            </div>

                            <h1 class="hero-headline fw-bold title-hero" data-aos="fade-right" data-aos-delay="300">
                                Un viaje por la historia de la aviación
                            </h1>

                            <p class="hero-text" data-aos="fade-right" data-aos-delay="350">
                            El Museo Aeronáutico es un espacio de aprendizaje y
                            disfrute que invita a recorrer la historia
                            de la aeronáutica
                            y la astronáutica desde sus inicios en el país.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="stats-grid">
                            <div class="row g-4">
                                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="stat-card stat-primary">
                                        <div class="stat-icon">
                                            <i class="bi bi-alarm"></i>
                                        </div>
                                        <div class="stat-info">
                                            <h3>Horario</h3>
                                            <p>Domingos - 13:00hs a 18:00hs</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <a href="{{ route('faqs')}}">
                                        <div class="stat-card">
                                            <div class="stat-icon">
                                                <i class="bi bi-question-circle"></i>
                                            </div>
                                            <div class="stat-info">
                                                <h3>FAQs</h3>
                                                <p>Preguntas frecuentes</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                                    <a href="{{ route('login') }}">
                                        <div class="stat-card">
                                            <div class="stat-icon">
                                                <i class="bi bi-calendar-event"></i>
                                            </div>
                                            <div class="stat-info">
                                                <h3>Visita guiada</h3>
                                                <p>Agenda tu visita guiada</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end wallet -->

        <!-- start marketplace -->
        <section id="visita_guiada" class="about section bg-light">
            <div class="container-fluid ">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="img-visita-guiada" ></div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                        <div class="content-section">
                            <div class="section-intro">
                                <div class="company-badge" style="color:#006ED2; font-weight: 500;">¡Agenda tu visita guiada!</div>
                                <h2 class="mt-3">Se realizan visitas guiadas de lunes a viernes</h2>
                                <p class="intro-text">Las visitas guiadas se realizan junto a
                                    un guía del museo, quien acompaña a los visitantes durante
                                    el recorrido. El museo cuenta con <strong>tres salas</strong>, y la duración
                                    de la visita es de entre <strong>1 y 2 horas</strong>,
                                    dependiendo de las salas que se elijan recorrer.</p>
                            </div>

                            <div class="action-section">
                                <a href="{{ route('login') }}" class="btn btn-primary btn-login mt-3 px-3" style="box-shadow: 0 0px 30px rgba(0, 0, 0, 0.3);">Agendar visita guiada</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end marketplace -->

        <!-- start features -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-2" data-aos="zoom-in">
                            <h2 class="fw-semibold" style="color: #006ED2;">Próximos eventos</h2>
                            <p class="text-muted subtitle-event">Museo Aeronáutico Cnel. (Av.) Jaime Meregalli</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row" >
                    @foreach ($events as $event)
                        @php
                            $carouselId = 'carouselEvent'.$loop->index;
                        @endphp

                        <div class="container my-5" data-aos="zoom-in">

                            <div class="row align-items-center event-box">

                                <!-- TEXTO -->
                                <div class="col-lg-6 text-lg-end event-text">
                                    <h3 class="mb-2 fw-bold">
                                        {{ $event->title }}
                                    </h3>

                                    <h4 class="mb-3 text-muted">
                                        {{ $event->subtitle }}
                                    </h4>

                                    <p>
                                        {!! nl2br(e($event->description)) !!}
                                    </p>
                                </div>

                                <!-- CARRUSEL -->
                                <div class="col-lg-6">

                                    @if($event->images->count())
                                    <div id="{{ $carouselId }}" class="carousel slide" data-bs-ride="carousel">

                                        <!-- INDICATORS -->
                                        <div class="carousel-indicators">
                                            @foreach ($event->images as $key => $image)
                                                <button
                                                    type="button"
                                                    data-bs-target="#{{ $carouselId }}"
                                                    data-bs-slide-to="{{ $key }}"
                                                    class="{{ $key === 0 ? 'active' : '' }}"
                                                    aria-current="{{ $key === 0 ? 'true' : 'false' }}">
                                                </button>
                                            @endforeach
                                        </div>

                                        <!-- SLIDES -->
                                        <div class="carousel-inner">
                                            @foreach ($event->images as $key => $image)
                                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                    <img
                                                        src="{{ asset('storage/'.$image->image_path) }}"
                                                        class="d-block h-100 w-100 img-fluid"
                                                        alt="{{ $event->title }}">
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- CONTROLS -->
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#{{ $carouselId }}"
                                                data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </button>

                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#{{ $carouselId }}"
                                                data-bs-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </button>

                                    </div>
                                    @endif

                                </div>
                            </div>

                        </div>

                    @endforeach
                </div>
            </div><!-- end container -->
        </section><!-- end features -->

        <!-- FEEDBACK USUARIO -->
        <section id="testimonials" class="testimonials section">

            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                <h2>¡Tu opinión nos importa!</h2>
                <p>Cada comentario nos ayuda a mejorar y ofrecerte una mejor experiencia.</p>
            </div>

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="150">
                        <div class="testimonials-sidebar">
                            <div class="sidebar-content">
                                <span class="satisfied-badge"><i class="bi bi-heart-fill"></i> Visitantes Satisfechos</span>
                                <h3>Descubrí lo que nuestros visitantes dicen sobre su experiencia</h3>
                                <a href="https://maps.app.goo.gl/PDo4wbzBGGZmfLQk9" target="_blank" class="btn btn-primary btn-login mt-3 px-3" style="box-shadow: 0 0px 30px rgba(0, 0, 0, 0.3);">Ir a Google Map</a>
                            </div>
                        </div>
                    </div><!-- End Left Sidebar -->

                <!-- Right Testimonials Slider -->
                    <div class="col-lg-8 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">
                        <div class="testimonials-img"></div>
                    </div><!-- End Right Testimonials Slider -->

                </div>
            </div>
        </section>

        <!-- EDIFICIOS -->
        <section id="instalaciones" class="services section">
            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5">
                    <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="fw-bold">Instalaciones</h3>
                    </div>
                    {{-- --- edificio 1 --- --}}
                    <div class="col-12 aos-init aos-animate">
                        <div class="service-block" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-content">
                                <div class="service-number">0.1</div>
                                <div class="service-info">
                                    <h4>Aeronáutica Civil</h4>
                                    <p>
                                        El museo presenta los inicios de la aviación en Uruguay,
                                        destacando a sus pioneros, primeras aeronaves, aeropuertos
                                        y compañías aéreas, junto a figuras nacionales e internacionales
                                        que marcaron su historia.
                                    </p>
                                </div>
                            </div>
                            <div class="service-image">
                                <img src="{{ asset('assets/images/edificios/Sala civil.png')}}" alt="Buy Dream Home" class="img-fluid">
                                <div class="image-overlay">
                                    <i class="bi bi-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- --- edificio 2.1 --- --}}
                    <div class="col-12 aos-init aos-animate">
                        <div class="service-block" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-content">
                                <div class="service-number">2.1</div>
                                <div class="service-info">
                                    <h4>Aeronáutica Militar y Naval</h4>
                                    <p>
                                        El edificio dedicado a la aeronáutica militar
                                        y naval recorre la historia del vuelo militar
                                        en Uruguay, homenajeando a sus principales
                                        precursores y destacando hitos como la misión antártica
                                        “Antarkos I”. También presenta la evolución de la
                                        Aeronáutica Naval, misiones de paz de la ONU, uniformes,
                                        equipamiento histórico y una valiosa colección de maquetas
                                        de la aviación nacional y mundial.
                                    </p>
                                </div>
                            </div>
                            <div class="service-image">
                                <img src="{{ asset('assets/images/edificios/Sala militar 1.png')}}" alt="Buy Dream Home" class="img-fluid">
                                <div class="image-overlay">
                                    <i class="bi bi-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- --- edificio 2.2 --- --}}
                    <div class="col-12 aos-init aos-animate">
                        <div class="service-block" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-content">
                                <div class="service-number">2.2</div>
                                <div class="service-info">
                                    <h4>Espacial "De la Tierra a las estrellas"</h4>
                                    <p>
                                        La sala “De la Tierra a las estrellas” propone un
                                        recorrido académico por los avances que llevaron a
                                        la humanidad al espacio, desde sus primeros precursores
                                        hasta los grandes hitos de la exploración espacial.
                                        Incluye maquetas, paneles informativos y la participación
                                        de Uruguay en el ámbito espacial, además de piezas
                                        destacadas como una bandera nacional que viajó a la
                                        Luna en la misión Apolo XI, fragmentos de roca lunar y
                                        autógrafos de astronautas, junto a una línea de tiempo
                                        con los principales logros hasta la exploración de Marte.
                                    </p>
                                </div>
                            </div>
                            <div class="service-image">
                                <img src="{{ asset('assets/images/edificios/sala espacial.png')}}" alt="Buy Dream Home" class="img-fluid">
                                <div class="image-overlay">
                                    <i class="bi bi-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- --- edificio 3 --- --}}
                    <div class="col-12 aos-init aos-animate">
                        <div class="service-block" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-content">
                                <div class="service-number">0.3</div>
                                <div class="service-info">
                                    <h4>Hangar de aeronaves</h4>
                                    <p>
                                        El recorrido presenta la historia del vuelo a través
                                        de paneles y piezas históricas, junto a una destacada
                                        exhibición de aeronaves civiles y militares, desde una
                                        réplica del Blériot XI de 1910 hasta un IA-58 Pucará. Incluye
                                        helicópteros, motores, hélices, instrumentos de vuelo, la
                                        primera pantalla de radar del país y diversos equipos
                                        históricos, además de simuladores y un espacio dedicado
                                        al accidente de los Andes de 1972 y a la exploración espacial.
                                        En el hangar también se encuentra el Espacio de las Telecomunicaciones
                                        de Antel, que muestra la evolución de las TIC.
                                    </p>
                                </div>
                            </div>
                            <div class="service-image">
                                <img src="{{ asset('assets/images/edificios/sala espacial.png')}}" alt="Buy Dream Home" class="img-fluid">
                                <div class="image-overlay">
                                    <i class="bi bi-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        @include('layouts.landing.footer-main')

    </div>
    <!-- end layout wrapper -->


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
