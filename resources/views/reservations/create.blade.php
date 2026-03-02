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
                <div class="card-header align-items-center d-flex border-bottom-0">
                    <h4 class="card-title mb-0 flex-grow-1">Crear nueva reserva</h4>
                </div>
            </div>
            <div class="card-body">
                <form class="row gy-1" id="reservationForm" method="POST" action="{{ route('reservations.store') }}">
                    @csrf

                    <p style="color: #767676; font-size: 18px; font-weight:600;">Datos personales:</p>

                    {{-- :::: SELECCIONAR USUARIO :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3" style="width:50%;">
                        <div>
                            @php $selectedUser = $users->firstWhere('id', old('user_id')); @endphp
                            <label class="form-label">Seleccionar Usuario:</label>

                            <input type="text"
                                class="form-control"
                                id="user_search"
                                name="user_search"
                                placeholder="Buscar usuario..."
                                list="users_list"
                                autocomplete="off"
                                value="{{ old('user_search', $selectedUser ? $selectedUser->name.' - '.$selectedUser->email : '') }}">

                            <datalist id="users_list">
                                @foreach($users as $user)
                                    <option value="{{ $user->name }} - {{ $user->email }}"
                                            data-id="{{ $user->id }}" data-email="{{ $user->email }}">
                                    </option>
                                @endforeach
                            </datalist>

                            <input type="hidden" name="user_id" id="user_id" value="{{ old('user_id') }}">

                            @error('user_id')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    {{-- :::: NOMBRE DEL RESPONSABLE :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="nombre_responsable" class="form-label">{{ __('Nombre del responsable:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="nombre_responsable" name="nombre_responsable" placeholder="Nombre del responsable">
                        </div>
                    </div>

                    {{-- :::: CI :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="ci" class="form-label">{{ __('C.I del responsable:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="ci" name="ci" placeholder="C.I del responsable">
                        </div>
                    </div>

                    {{-- :::: CORREO ELECTRONICO :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="email" class="form-label">{{ __('Correo Electrónico:') }}</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" value="{{ old('email', optional($users->firstWhere('id', old('user_id')))->email) }}" @if(old('user_id')) readonly @endif>
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            </select>
                            <p id="timeMessage" class="text-danger mt-1"></p>
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
                            <label for="reservation_status" class="form-label">{{ __('Estado de la reserva:') }} <span class="text-danger">*</span></label>
                            <select class="form-select @error('reservation_status') is-invalid @enderror" id="reservation_status" name="reservation_status" required>
                                <option value="">Seleccionar Estado</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="confirmada">Confirmada</option>
                                <option value="realizada">Realizada</option>
                                <option value="cancelada">Cancelada</option>
                            </select>
                            @error('reservation_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

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
    document.addEventListener('DOMContentLoaded', function () {

        const dateInput   = document.getElementById('reservation_date');
        const timeSelect  = document.getElementById('start_time');
        const submitBtn   = document.getElementById('submitBtn');
        const timeLoader  = document.getElementById('timeLoader');
        const form        = document.getElementById('reservationForm');
        const formLoader  = document.getElementById('formLoader');

        // ===== FECHA MÍNIMA (HOY + 10 DÍAS) =====
        const today = new Date();
        today.setHours(0,0,0,0);

        const minDate = new Date(today);
        minDate.setDate(today.getDate() + 10);

        dateInput.min = minDate.toISOString().split('T')[0];

        // ===== CAMBIO DE FECHA =====
        dateInput.addEventListener('change', async function () {

            if (!this.value) return;

            // Crear fecha LOCAL correctamente
            const [y, m, d] = this.value.split('-').map(Number);
            const selectedDate = new Date(y, m - 1, d);
            selectedDate.setHours(0,0,0,0);

            const day = selectedDate.getDay();

            // 🚫 FINES DE SEMANA
            if (day === 0 || day === 6) {
                Swal.fire('Día inválido', 'No se permiten reservas los fines de semana.', 'warning');
                this.value = '';
                return;
            }

            // 🚫 MENOS DE 10 DÍAS
            if (selectedDate < minDate) {
                Swal.fire('Fecha inválida', 'Debe reservar con al menos 10 días de anticipación.', 'warning');
                this.value = '';
                return;
            }

            // ✅ SI TODO ES VÁLIDO → CONSULTAR DISPONIBILIDAD
            try {

                timeLoader.classList.remove('d-none');

                const response = await fetch(`/reservations/availability?reservation_date=${this.value}`);

                if (!response.ok) {
                    console.error("Error servidor:", response.status);
                    return;
                }

                const data = await response.json();
                console.log("Disponibilidad:", data);

                // 👉 Acá luego podés deshabilitar horarios

            } catch (error) {
                console.error(error);
            } finally {
                timeLoader.classList.add('d-none');
            }

        });

        // ===== CAMBIO DE HORA =====
        timeSelect.addEventListener('change', function () {

            const opt = this.options[this.selectedIndex];

            if (opt && opt.disabled) {
                submitBtn.disabled = true;
                this.value = '';
            } else if (this.value !== '') {
                submitBtn.disabled = false;
            }
        });

        // ===== PREVENIR ENVÍO DOBLE =====
        form.addEventListener('submit', function () {
            submitBtn.disabled = true;
            formLoader.classList.remove('d-none');
        });



    });
</script>



<script>
    (function(){
        const userSearch = document.getElementById('user_search');
        const userIdInput = document.getElementById('user_id');
        const emailInput = document.getElementById('email');

        if(!userSearch) return;

        const sync = function(){
            const val = userSearch.value;
            const options = document.querySelectorAll('#users_list option');
            let found = false;

            options.forEach(function(opt){
                if(opt.value === val){
                    userIdInput.value = opt.dataset.id || '';
                    if(emailInput){
                        emailInput.value = opt.dataset.email || '';
                        emailInput.readOnly = true;
                    }
                    found = true;
                }
            });

            if(!found){
                userIdInput.value = '';
                if(emailInput){
                    // keep whatever value user typed/wants, but allow editing
                    emailInput.readOnly = false;
                }
            }
        };

        userSearch.addEventListener('input', sync);
        userSearch.addEventListener('blur', sync);

        // Sync on page load in case of validation errors (old values)
        window.addEventListener('DOMContentLoaded', function(){
            sync();
        });
    })();
</script>

<script>
(function(){
    const form = document.getElementById('reservationForm');
    const userSearch = document.getElementById('user_search');
    const userIdInput = document.getElementById('user_id');
    const emailInput = document.getElementById('email');

    if(!form || !userSearch) return;

    form.addEventListener('submit', function () {
        const val = userSearch.value;
        const options = document.querySelectorAll('#users_list option');
        let found = false;

        options.forEach(opt => {
            if (opt.value === val) {
                userIdInput.value = opt.dataset.id || '';
                if(emailInput){
                    emailInput.value = opt.dataset.email || '';
                    emailInput.readOnly = true;
                }
                found = true;
            }
        });

        if(!found){
            userIdInput.value = '';
            if(emailInput){
                emailInput.readOnly = false;
            }
        }
    });
})();
</script>

@endpush
