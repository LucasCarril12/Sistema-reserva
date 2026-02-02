@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Nueva reserva</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reservas</a></li>
                    <li class="breadcrumb-item active">Nueva reserva</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex ">
                <div class="card-header align-items-center d-flex border-bottom-0 p-0">
                    <h4 class="card-title mb-0 flex-grow-1">Crear nueva reserva</h4>
                </div>
            </div>
            <div class="card-body">
                {{-- ::::: MENSAJE DE ERRORES ::::: --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>⚠️ Hay errores en el formulario</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="row gy-1" id="reservationForm" method="POST" action="{{ route('cliente.reserva.store') }}">
                    @csrf

                    <p style="color: #767676; font-size: 18px; font-weight:600;">Datos personales:</p>

                    {{-- :::: SELECCIONAR USUARIO :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3" style="width:100%;">
                        <div>
                            <label for="user" class="form-label">{{ __('Usuario:') }}</label>
                            <input id="user" type="text" value="{{ Auth::user()->nombres }} {{ Auth::user()->apellidos }}" readonly>
                            <input name="user_id" id="user_id" value="{{ Auth::user()->id }}" type="hidden">
                        </div>
                    </div>

                    {{-- :::: NOMBRE RESPONSABLE :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="nombre_responsable" class="form-label">{{ __('Nombre del responsable:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="nombre_responsable" name="nombre_responsable" placeholder="Nombre del responsable" style="text-transform: capitalize;">
                        </div>
                    </div>

                    {{-- :::: TELEFONO DE CONTACTO :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="telefono" class="form-label">{{ __('Teléfono de contacto:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="telefono" name="telefono" placeholder="Teléfono de contacto">
                        </div>
                    </div>

                    {{-- :::: TELEFONO RESPALDO :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="telefono2" class="form-label">{{ __('Teléfono de respaldo:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="telefono2" name="telefono2" placeholder="Teléfono de respaldo">
                        </div>
                    </div>

                    {{-- :::: C.I :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="ci" class="form-label">{{ __('Cédula de Identidad (C.I):') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('ci') is-invalid @enderror" id="ci" name="ci" placeholder="Ej: 12345678" value="{{ old('ci') }}" required>
                            @error('ci')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <p style="color: #767676; font-size: 18px; font-weight:600; margin-top: 1rem;">Datos Institución:</p>

                    {{-- :::: NOMBRE INSTITUCION :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="institucion" class="form-label">{{ __('Institución:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="institucion" name="institucion" placeholder="Nombre de Instituto">
                        </div>
                    </div>

                    {{-- :::: FECHA RESERVA :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="reservation_date" class="form-label">{{ __('Fecha de Reserva:') }} <span class="text-danger">*</span></label>
                            <input type="date" class="form-control @error('reservation_date') is-invalid @enderror" id="reservation_date" name="reservation_date" value="{{ old('reservation_date') }}" required>

                            @error('reservation_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- :::: opcion de salas :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="sala" class="form-label">{{ __('Que sala desea conocer:') }} <span class="text-danger">*</span></label>
                            <select class="form-select" id="sala" name="sala" required>
                                <option value="">Seleccionar sala</option>
                                <option value="Hangar">Hangar</option>
                                <option value="Sala Civil">Sala Civil</option>
                                <option value="Sala Militar">Sala Militar</option>
                                <option value="Hangar + Sala Civil">Hangar + Sala Civil</option>
                                <option value="Hangar + Sala Militar">Hangar + Sala Militar</option>
                                <option value="Sala Civil + Sala Militar">Sala Civil + Sala Militar</option>
                                <option value="Todas">Todas</option>
                            </select>
                        </div>
                    </div>

                    {{-- :::: HORA DE INICIO :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="start_time" class="form-label">{{ __('Hora de inicio:') }} <span class="text-danger">*</span></label>
                            <select class="form-select @error('start_time') is-invalid @enderror" id="start_time" name="start_time" required>
                                <option value="">Seleccionar Hora</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                            </select>
                            <div id="timeLoader" class="spinner-border spinner-border-sm ms-2 d-none" role="status" style="vertical-align: middle;">
                                <span class="visually-hidden">Cargando...</span>
                            </div>
                            @error('start_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- :::: DIRECCION :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="direccion" class="form-label">{{ __('Dirección del interesado:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="direccion" name="direccion" placeholder="Dirección de la institución">
                        </div>
                    </div>

                    {{-- :::: LOCOMOCION :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="locomocion" class="form-label">{{ __('Locomoción:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="locomocion" name="locomocion" placeholder="Locomoción del interesado">
                        </div>
                    </div>

                    <p style="color: #767676; font-size: 18px; font-weight:600; margin-top: 1rem;">Datos de personas:</p>

                    {{-- :::: REQUISITOS ESPECIALES :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="requerimientos" class="form-label">{{ __('Requerimientos Especiales:') }}</label>
                            <input type="text" class="form-control " id="requerimientos" name="requerimientos" placeholder="Requerimientos especiales del interesado">
                        </div>
                    </div>

                    {{-- :::: TOTAL NIÑOS :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="total_ninios" class="form-label">{{ __('Total Niños:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="total_ninios" name="total_ninios" placeholder="Total de niños">
                        </div>
                    </div>

                    {{-- :::: TOTAL ADULTOS :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="total_adultos" class="form-label">{{ __('Total Adultos:') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="total_adultos" name="total_adultos" placeholder="Total de adultos">
                        </div>
                    </div>

                    {{-- :::: EDADES :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="edad" class="form-label">{{ __('Edades:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="edad" name="edad" placeholder="Ej: Entre 12 y 15 años">
                        </div>
                    </div>

                    {{-- :::: EXTRANJEROS :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="extranjero" class="form-label">{{ __('¿Son extranjeros?:') }} <span class="text-danger">*</span></label>
                            <select class="form-select" id="extranjero" name="extranjero" required>
                                <option value="">Seleccionar opcion</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    {{-- :::: OBS :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="obs" class="form-label">{{ __('Observaciones:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="obs" name="obs" placeholder="Observaciones">
                        </div>
                    </div>

                    {{-- :::: ESTADO DE LA RESERVA :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <input type="hidden" name="reservation_status" value="pendiente">
                        </div>
                    </div>

                    {{-- --- BOTON CANCELAR -- --}}
                    <div class="col-xxl-12 col-md-6 mt-3 d-flex justify-content-start align-items-end">
                        <div>
                            <br>
                            <a href="{{ route('reservations.index') }}" class="btn btn-danger"> {{ __('Cancelar')}} </a>
                            <button id="submitBtn" type="submit" class="btn btn-success">{{ __('Guardar Reserva')}}</button>
                            <div id="formLoader" class="spinner-border spinner-border-sm ms-2 d-none" role="status" style="vertical-align: middle;">
                                <span class="visually-hidden">Cargando...</span>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Inicializamos la tabla solo una vez
        $('#reservationsTable').DataTable();
    });
</script>

<script>
    // Obtener fecha mínima (hoy + 10 días)
    const today = new Date();
    const minDate = new Date();
    minDate.setDate(today.getDate() + 9);

    // Formatear YYYY-MM-DD
    const formatDate = (date) => {
        return date.toISOString().split('T')[0];
    };

    const input = document.getElementById('reservation_date');
    input.setAttribute('min', formatDate(minDate));

    // Validar cuando el usuario cambie la fecha
    input.addEventListener('change', function () {
        const selected = new Date(this.value);
        const day = selected.getDay(); // 0 = Domingo, 6 = Sábado

        // 1. Verificar si es antes del mínimo
        if (selected < minDate) {
            Swal.fire({
                icon: 'warning',
                title: 'Fecha inválida',
                text: `Debes elegir una fecha a partir del ${formatDate(minDate)}`,
                showClass: { popup: 'animate__animated animate__fadeInDown' },
                hideClass: { popup: 'animate__animated animate__fadeOutUp' }
            });
            this.value = "";
            return;
        }

        // 2. Bloquear sábados y domingos
        if (day === 6 || day === 0) {
            Swal.fire({
                icon: 'warning',
                title: 'Día inválido',
                text: 'No se permiten reservas los fines de semana.',
                showClass: { popup: 'animate__animated animate__shakeX' },
                hideClass: { popup: 'animate__animated animate__fadeOutUp' }
            });
            this.value = "";
            return;
        }

        // 3. Consultar disponibilidad por fecha y deshabilitar horas llenas
        fetch(`{{ route('reservations.availability') }}?reservation_date=${this.value}`, {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.json())
        .then(data => {
            const select = document.getElementById('start_time');
            let allDisabled = true;

            Array.from(select.options).forEach(function(opt){
                if(opt.value === '') return;
                const cnt = data[opt.value] ?? 0;
                if(cnt >= 2){
                    // set attribute to ensure disabled for all browsers
                    opt.setAttribute('disabled','disabled');
                    opt.disabled = true;

                    // Añadir texto indicando que está completo
                    opt.text = opt.value + ' (completo)';

                    // añadir estilo para dejar en rojo claro y marcar visualmente
                    opt.classList.add('full-slot');
                    opt.style.backgroundColor = '#f8d7da';
                    opt.style.color = '#721c24';

                    // accesibilidad y tooltip
                    opt.title = 'Horario completo';
                    opt.setAttribute('aria-disabled','true');

                    // si la opción estaba seleccionada, limpiar selección y notificar
                    if(select.value === opt.value){
                        select.value = '';
                        Swal.fire({
                            icon: 'info',
                            title: 'Horario no disponible',
                            text: 'La hora seleccionada ya no está disponible. Por favor selecciona otra hora.',
                            showClass: { popup: 'animate__animated animate__fadeInDown' },
                            hideClass: { popup: 'animate__animated animate__fadeOutUp' }
                        });
                    }
                } else {
                    opt.removeAttribute('disabled');
                    opt.disabled = false;
                    opt.text = opt.value;
                    // remover estilos si estaba marcado
                    opt.classList.remove('full-slot');
                    opt.style.backgroundColor = '';
                    opt.style.color = '';
                    opt.title = '';
                    opt.removeAttribute('aria-disabled');
                    allDisabled = false;
                }
            });

            // prevenir selección de opciones deshabilitadas (algunos navegadores permiten seleccionarlas por teclado)
            const startSelect = document.getElementById('start_time');
            if(startSelect){
                startSelect.addEventListener('change', function(){
                    const selOpt = this.options[this.selectedIndex];
                    if(selOpt && selOpt.disabled){
                        Swal.fire({
                            icon: 'warning',
                            title: 'Horario no válido',
                            text: 'No puedes seleccionar un horario completo. Por favor elige otro.',
                            showClass: { popup: 'animate__animated animate__shakeX' },
                            hideClass: { popup: 'animate__animated animate__fadeOutUp' }
                        });
                        this.value = '';
                    }
                });
            }

            if(allDisabled){
                Swal.fire({
                    icon: 'info',
                    title: 'Día completo',
                    text: 'El día seleccionado está completo. Por favor elige otra fecha.',
                    showClass: { popup: 'animate__animated animate__zoomIn' },
                    hideClass: { popup: 'animate__animated animate__zoomOut' }
                });
                input.value = '';
            } else {
                // limpiar selección previa de hora
                document.getElementById('start_time').value = '';
            }
        })

    .catch(err => {
            console.error('Error obteniendo disponibilidad', err);
        });
    });

    // Si hay una fecha cargada (por old() o recarga), actualizar la disponibilidad inmediatamente
    if (input.value) {
        input.dispatchEvent(new Event('change'));
    }

    // añadir estilo global para opciones completas en caso que el navegador lo soporte
    (function(){
        const style = document.createElement('style');
        style.innerHTML = `
            option.full-slot { background-color: #f8d7da; color: #721c24; }
        `;
        document.head.appendChild(style);
    })();

    // mostrar loader en submit y prevenir envíos dobles
    (function(){
        const form = document.getElementById('reservationForm');
        const submitBtn = document.getElementById('submitBtn');
        const formLoader = document.getElementById('formLoader');
        if(!form) return;
        form.addEventListener('submit', function () {
            if(submitBtn) { submitBtn.disabled = true; submitBtn.classList.add('disabled'); }
            if(formLoader) formLoader.classList.remove('d-none');
        });
    })();
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const dateInput   = document.getElementById('reservation_date');
    const timeSelect  = document.getElementById('start_time');
    const submitBtn   = document.getElementById('submitBtn');
    const loader      = document.getElementById('formLoader');

    // --- CONFIG ---
    const MAX_PER_SLOT = 2;

    // --- FECHA MÍNIMA (HOY + 9) ---
    const today = new Date();
    const minDate = new Date();
    minDate.setDate(today.getDate() + 9);

    const formatDate = d => d.toISOString().split('T')[0];
    dateInput.min = formatDate(minDate);

    // --- DESHABILITAR SUBMIT POR DEFECTO ---
    submitBtn.disabled = true;

    // --- CUANDO CAMBIA LA FECHA ---
    dateInput.addEventListener('change', async function () {

        submitBtn.disabled = true;
        timeSelect.value = '';

        const selected = new Date(this.value);
        const day = selected.getDay(); // 0 dom - 6 sab

        // ❌ fecha inválida
        if (selected < minDate) {
            Swal.fire('Fecha inválida', 'Elegí una fecha válida', 'warning');
            this.value = '';
            return;
        }

        // ❌ fines de semana (sábado/domingo)
        if (day === 0 || day === 6) {
            Swal.fire('Día no disponible', 'No se permiten reservas fines de semana', 'warning');
            this.value = '';
            return;
        }

        // 🔄 loader
        timeSelect.disabled = true;

        try {
            const res = await fetch(`{{ route('reservations.availability') }}?reservation_date=${this.value}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });

            const data = await res.json();
            let allFull = true;

            [...timeSelect.options].forEach(opt => {
                if (!opt.value) return;

                const count = data[opt.value] ?? 0;

                if (count >= MAX_PER_SLOT) {
                    opt.disabled = true;
                    opt.text = `${opt.value} (completo)`;
                    opt.classList.add('full-slot');
                } else {
                    opt.disabled = false;
                    opt.text = opt.value;
                    opt.classList.remove('full-slot');
                    allFull = false;
                }
            });

            if (allFull) {
                Swal.fire('Día completo', 'No hay horarios disponibles', 'info');
                dateInput.value = '';
            }

        } catch (e) {
            console.error(e);
            Swal.fire('Error', 'No se pudo validar disponibilidad', 'error');
        }

        timeSelect.disabled = false;
    });

    // --- CUANDO CAMBIA LA HORA ---
    timeSelect.addEventListener('change', function () {
        const opt = this.options[this.selectedIndex];

        if (!opt || opt.disabled) {
            submitBtn.disabled = true;
            return;
        }

        submitBtn.disabled = false;
    });

    // --- SUBMIT ---
    document.getElementById('reservationForm').addEventListener('submit', () => {
        submitBtn.disabled = true;
        loader.classList.remove('d-none');
    });

});
</script>

<style>
option.full-slot {
    background-color: #f8d7da;
    color: #721c24;
}
</style>
@endpush
