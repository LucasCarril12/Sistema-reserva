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
        <section class="section" id="hero" style="background-image: url('{{ asset('assets/images/edificios/header-aeronaves.jpg') }}'); background-size: cover; background-position: center;">
            @include('layouts.landing.navbar')
            <div class="bg-overlay" style="background-color: black;opacity:0.6"></div> <!-- oscuridad -->
        </section>

        <section id="Aeronaves" class="latest-posts section">
            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                <h2 class="fw-semibold">Aeronaves expuestas en el hangar</h2>
                <div>Museo Aeronáutico Cnel. (Av.) Jaime Meregalli</div>
            </div><!-- End Section Title -->
            {{-- --- card de aeronave --- --}}
            <div class="container aos-init aos-animate mt-5" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    {{-- --- AVION 1 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 2 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 3 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 4 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 5 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 6 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 7 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 8 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 9 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 10 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 11 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 12 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 13 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 14 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 15 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 16 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 17 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 18 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 19 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 20 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 21 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 22 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 23 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 24 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 25 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 26 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 27 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 28 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 29 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 30 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 31 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
                    </div>

                    {{-- --- AVION 32 --- --}}
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="{{ asset('assets/images/aeronaves/ejemplo-avion.jpg') }}" alt="Foto de avion" class="img-fluid">
                            </div>

                            <p class="post-category">“El palomar”</p>

                            <h2 class="title">
                                <a href="blog-details.html">Farman 50hp</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <a href="#">Ver Ficha<i class="bi bi-arrow-right-short fw-semibold"></i></a>
                            </div>
                        </article>
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
