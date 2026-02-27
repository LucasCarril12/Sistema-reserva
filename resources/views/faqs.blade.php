<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FAQs || Museo Aeronáutico</title>
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
    <link href="{{ asset('assets/css/faqs.css') }}" rel="stylesheet" type="text/css" />

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

        <!-- TÍTULO -->
        <div class="text-center mb-5 mt-5">
        <h1 class="fw-bold">Preguntas Frecuentes</h1>
        <p class="text-muted">Información sobre visitas, eventos y contacto</p>
        </div>

        <!-- FAQ ACCORDION -->
        <section class="mb-5">
        <div class="accordion" id="faqAccordion">

            <!-- ITEM 1 -->
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">
                ¿Cómo agendar una visita guiada?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                1)- ingresá a la página oficial y hacé clic en <strong><strong>Ingresar a mi cuenta</strong></strong>.<br>
                2)- Luego seleccioná <strong><strong>“Nueva reserva”</strong></strong><br>
                3)- Completá el formulario con los datos solicitados y enviá la solicitud.<br>
                Una vez recibida, <strong>nos pondremos en contacto</strong> para finalizar la confirmación de la visita.
                </div>
            </div>
            </div>

            {{-- --- Item 2 --- --}}
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">
                ¿Necesito agendar una visita para ir un domingo?
                </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                No es necesario agendar una visita para ir un domingo. El museo está abierto los domingos de 13:00 a 17:00 hs.
                </div>
            </div>
            </div>

            <!-- ITEM 3 -->
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                ¿Puedo donar algo al museo?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Para realizar una donación, comuníquese con la Administración al 098 274 774.
                </div>
            </div>
            </div>

            <!-- ITEM 4 -->
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                ¿Qué días están abiertos?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Todos los domingos de 13:00 a 17:00 hs.
                </div>
            </div>
            </div>

            <!-- ITEM 5 -->
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">
                ¿Qué costo tiene la entrada?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                La entrada es gratuita. Se pueden realizar donaciones dentro del museo.
                </div>
            </div>
            </div>

            <!-- ITEM 6 -->
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">
                ¿Cómo funcionan los eventos?
                </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                La información de cada evento está disponible en “Próximos eventos” o en Instagram
                @MuseoAeronautico.uy
                </div>
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
