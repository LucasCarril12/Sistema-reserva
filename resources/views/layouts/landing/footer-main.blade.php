<footer class="bg-light pt-5 pb-4" aria-label="Nuestra historia y contacto">
    <div class="container">
        <div class="row align-items-center g-5 contenedor-footer">
            <!-- Columna Texto -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="300">
                <img src="{{ asset('assets/images/logo.png')}}" alt="Logo Museo Aeronáutico"
                    class="mb-4 logo_museo" style="width:100px;">

                <h2 class="fw-bold mb-3">Nuestra historia</h2>

                <p class="text-muted small">
                A principios del año 2013 se da comienzo a un nuevo traslado físico de las instalaciones del Museo,
                siendo su destino un nuevo hangar en construcción y parte del área del Servicio de Mantenimiento de la
                Fuerza Aérea ubicado en zona lindera con el aeropuerto internacional
                “Gral Cesáreo L. Berisso” (Carrasco).
                </p>

                <h5 class="fw-bold mt-3">Contacto</h5>
                <p class="mb-1 text-muted small">
                Tel: (+598) 2604 0210 al 14, interno 5003
                </p>
                <p class="mb-2 text-muted small">
                Cel: (+598) 098274774
                </p>
                <a href="{{ route('login') }}" class="btn btn-primary btn-login mt-3 px-3" style="box-shadow: 0 0px 30px rgba(0, 0, 0, 0.3);">Agendar visita guiada</a>
            </div>

            <!-- Columna Imagen -->
            <div class="col-lg-6">
                <div class="rounded-4  shadow-sm"
                    style="height:280px; background:url('{{ asset('assets/images/footer/planes.png') }}') center/cover no-repeat;" role="img"
                    aria-label="Aviones en vuelo" data-aos="fade-left" data-aos-duration="300">
                </div>
            </div>
        </div>
    </div>
</footer>
