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
    <link href="{{ asset('assets/css/custom-aeronave.css') }}" rel="stylesheet" type="text/css" />

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

        <section id="Aeronaves" class="latest-posts section">
            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                <h2 class="fw-semibold">Aeronaves expuestas en el hangar</h2>
                <div>Museo Aeronáutico Cnel. (Av.) Jaime Meregalli</div>
            </div><!-- End Section Title -->
            {{-- --- card de aeronave --- --}}
            <div class="container aos-init aos-animate mt-5" data-aos="fade-up" data-aos-delay="100">
                    <!-- search/filter bar -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <input type="text" id="searchInput" class="form-control" placeholder="Buscar aeronave...">
                        </div>
                    </div>
                <div class="row gy-4">
                    {{-- --- El Palomar --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/farman 50hp.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                Farman 50hp
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/farman50hp') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- De Havilland DH-82A --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/De Havilland DH 82A.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Tiger Moth”</p>

                            <h2 class="title">
                                De Havilland DH-82A
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/de_havilland_dh_82a') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Fairchild PT-19 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Fairchild PT-19.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Cornell”</p>

                            <h2 class="title">
                                Fairchild PT-19
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/fairchild_pt-19') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Stinson 108-3 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Stinson 108-3.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Voyager”</p>

                            <h2 class="title">
                                Stinson 108-3
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/stinson_108-3') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Blériot XI --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/bleriot xi.jpeg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">(Réplica)</p>

                            <h2 class="title">
                                Blériot XI
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/bleriot_xi') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Beechcraft AT-11 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/beechcraft at-11.jpeg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Kansan”</p>

                            <h2 class="title">
                                Beechcraft AT-11
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/beechcraft_at-11') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Curtiss SNC-1 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/curtiss SNC-1.jpeg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Falcon”</p>

                            <h2 class="title">
                                Curtiss SNC-1
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/Curtiss_SNC-1') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- North American T-6G --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/north american t-6g.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Texan”</p>

                            <h2 class="title">
                                North American T-6G
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/north_american_t-6g') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Lockheed F-80C --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Lockheed F-80C_1968_CBorucki.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Shooting star”</p>

                            <h2 class="title">
                                Lockheed F-80C
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/lockheed_f-80c') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Lockheed T-33A --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/lockheed t-33A.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“T-bird”</p>

                            <h2 class="title">
                                Lockheed T-33A
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/lockheed_t-33a') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- ---Bell UH-1B --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/bell UH-1B.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Iroquois”</p>

                            <h2 class="title">
                                Bell UH-1B
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/bell_uh-1b') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Castaibert --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/CASTAIBERT.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">70hp</p>

                            <h2 class="title">
                                Castaibert
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/castaibert') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- North American B-25J --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/NORTH AMERICAN B25J.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Mitchell”</p>

                            <h2 class="title">
                               North American B-25J
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/north_american_b-25j') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Piper AE-1 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Piper AE-1.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">-</p>

                            <h2 class="title">
                                Piper AE-1
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/piper_ae-1') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- De Havilland DHC-1 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/dehavilland DHC-1.jpeg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Chipmunk”</p>

                            <h2 class="title">
                                De Havilland DHC-1
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/de_havilland_dhc-1') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Beechcraft T-34B --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Beechcraft T-34B.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Mentor”</p>

                            <h2 class="title">
                                Beechcraft T-34B
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/beechcraft_t-34b') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- North American/ Ryan NA-145 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/L-17B NAVION.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Navion”</p>

                            <h2 class="title">
                                North American/ Ryan NA-145
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/north_american_ryan_na-145') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Grumman S-2G --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Grumman S-2.png') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Tracker”</p>

                            <h2 class="title">
                                Grumman S-2G
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/grumman_s-2g') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- MBB (Bolköw) --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/MBB Bo.105_2007.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">BO-105 P1</p>

                            <h2 class="title">
                                MBB (Bolköw)
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/mbb') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Westland Wessex --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Westland Wessex HC Mk2.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">HC Mk2</p>

                            <h2 class="title">
                                Westland Wessex
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/westland_wessex') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Hiller H-23F --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Hiller H-23f.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Raven”</p>

                            <h2 class="title">
                                Hiller H-23F
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/hiller_h-23f') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Curtiss-Wright P-3A --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/CURTIS-WRIGHT P-3A.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Dehmel”</p>

                            <h2 class="title">
                                Curtiss-Wright P-3A
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/curtiss_wright_p-3a') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- FMA IA-58A --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/fma ia-s8a.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Pucará”</p>

                            <h2 class="title">
                                FMA IA-58A
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/fma_ia-58a') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Cessna T-41D --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Cessna T-41D en 1983.png') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Mescalero”</p>

                            <h2 class="title">
                                Cessna T-41D
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/cessna_t-41d') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Cessna U-17A --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/cessna u-17a.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Skywagon”</p>

                            <h2 class="title">
                                Cessna U-17A
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/cessna_u-17a') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Thompson Bros P505 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/THOMPSON BROS.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">Mk V</p>

                            <h2 class="title">
                                Thompson Bros P505
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/thomson_bros') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 27 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/embraer emb-110c.png') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Bandeirante”</p>

                            <h2 class="title">
                                Embraer EMB-110C (C-95)
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/embraer_emb-110c') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- LET L-13 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/let l-13.png') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Blanik”</p>

                            <h2 class="title">
                                LET L-13
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/let_l-13') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Cessna A-37 B --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/cessna a-37 b.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Dragonfly”</p>

                            <h2 class="title">
                                Cessna A-37 B
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/cessna_a-37_b') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Douglas C-47 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/douglas c47.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Skytrain” (Cabina)</p>

                            <h2 class="title">
                                Douglas C-47
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/douglas_c-47') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Douglas DC-3/C-47 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/Douglas DC-3-c-47.png') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Skytrain”</p>

                            <h2 class="title">
                                Douglas DC-3/C-47
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/douglas_dc-3-c-47') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Vickers Viscount --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/vickers.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">V.827</p>

                            <h2 class="title">
                                Vickers Viscount
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/vickers_viscount') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- North American F-51D --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/north american f-51d.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“Mustang”</p>

                            <h2 class="title">
                                North American F-51D
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/north_american_f-51d') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- Ultraliviano --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ultra liviano.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">Motorizado</p>

                            <h2 class="title">
                                Ultraliviano
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="{{ url('aeronave/fichas/ultraliviano') }}">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
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

        <script>
            // Filter aircraft cards based on search input (ignore case & accents)
            document.addEventListener('DOMContentLoaded', function () {
                const input = document.getElementById('searchInput');
                const normalize = str => str
                    .toLowerCase()
                    .normalize('NFD')
                    .replace(/\p{Diacritic}/gu, '');

                input.addEventListener('input', function () {
                    const query = normalize(this.value.trim());
                    const cards = document.querySelectorAll('#Aeronaves .row.gy-4 > .col-lg-4');
                    cards.forEach(card => {
                        const titleEl = card.querySelector('.title');
                        const categoryEl = card.querySelector('.post-category');
                        const title = titleEl ? normalize(titleEl.textContent) : '';
                        const category = categoryEl ? normalize(categoryEl.textContent) : '';
                        if (query === '' || title.includes(query) || category.includes(query)) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        </script>
