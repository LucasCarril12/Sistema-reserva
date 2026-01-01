@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Editar reserva</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reservas</a></li>
                    <li class="breadcrumb-item active">Editar reserva</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Editar reserva</h4>
                </div>
            </div>
            <div class="card-body">
                <form class="row gy-1" id="reservationForm" method="POST" action="{{ route('reservations.update', $reservation->id) }}">
                    @csrf
                    @method('PUT')
                    <p style="color: #767676; font-size: 18px; font-weight:600;">Datos personales:</p>

                    {{-- :::: NOMBRE DEL RESPONSABLE :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="nombre_responsable" class="form-label">{{ __('Nombre del responsable:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="nombre_responsable" name="nombre_responsable" placeholder="{{ $reservation->detail->nombre_responsable }}" value="{{ old('nombre_responsable', $reservation->detail->nombre_responsable) }}">
                        </div>
                    </div>

                    {{-- :::: CI :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="ci" class="form-label">{{ __('C.I del responsable:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="ci" name="ci" placeholder="{{ $reservation->detail->ci }}" value="{{ old('ci', $reservation->detail->ci) }}">
                        </div>
                    </div>

                    {{-- :::: CORREO ELECTRONICO :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="email" class="form-label">{{ __('Correo Electrónico:') }}<span class="text-danger">*</span></label>
                            <input type="email" class="form-control " id="email" name="email" placeholder="{{ $reservation->detail->email }}" value="{{ old('email', $reservation->detail->email) }}">
                        </div>
                    </div>

                    {{-- :::: TELEFONO DE CONTACTO :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="telefono" class="form-label">{{ __('Teléfono de contacto:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="telefono" name="telefono" placeholder="{{ $reservation->detail->telefono }}" value="{{ old('telefono', $reservation->detail->telefono) }}">
                        </div>
                    </div>

                    {{-- :::: TELEFONO RESPALDO :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="telefono2" class="form-label">{{ __('Teléfono de respaldo:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="telefono2" name="telefono2" placeholder="{{ $reservation->detail->telefono2 }}" value="{{ old('telefono2', $reservation->detail->telefono2) }}">
                        </div>
                    </div>

                    <p style="color: #767676; font-size: 18px; font-weight:600; margin-top: 1rem;">Datos Institución:</p>

                    {{-- :::: NOMBRE INSTITUCION :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="institucion" class="form-label">{{ __('Institución:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="institucion" name="institucion" placeholder="{{ $reservation->institucion }}" value="{{ old('institucion', $reservation->institucion) }}">
                        </div>
                    </div>

                    {{-- :::: FECHA RESERVA :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="reservation_date" class="form-label">{{ __('Fecha de Reserva:') }} <span class="text-danger">*</span></label>
                            <input type="date" class="form-control @error('reservation_date') is-invalid @enderror" id="reservation_date" name="reservation_date" value="{{ old('reservation_date', $reservation->reservation_date) }}" required>

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
                                <option value="Hangar" {{ old('sala', $reservation->detail->sala) == 'Hangar' ? 'selected' : '' }}>Hangar</option>
                                <option value="Sala Civil" {{ old('sala', $reservation->detail->sala) == 'Sala Civil' ? 'selected' : '' }}>Sala Civil</option>
                                <option value="Sala Militar" {{ old('sala', $reservation->detail->sala) == 'Sala Militar' ? 'selected' : '' }}>Sala Militar</option>
                                <option value="Hangar + Sala Civil" {{ old('sala', $reservation->detail->sala) == 'Hangar + Sala Civil' ? 'selected' : '' }}>Hangar + Sala Civil</option>
                                <option value="Hangar + Sala Militar" {{ old('sala', $reservation->detail->sala) == 'Hangar + Sala Militar' ? 'selected' : '' }}>Hangar + Sala Militar</option>
                                <option value="Sala Civil + Sala Militar" {{ old('sala', $reservation->detail->sala) == 'Sala Civil + Sala Militar' ? 'selected' : '' }}>Sala Civil + Sala Militar</option>
                                <option value="Todas" {{ old('sala', $reservation->detail->sala) == 'Todas' ? 'selected' : '' }}>Todas</option>
                            </select>

                        </div>
                    </div>

                    {{-- :::: HORA DE INICIO :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="start_time" class="form-label">{{ __('Hora de inicio:') }} <span class="text-danger">*</span></label>
                            <select class="form-select @error('start_time') is-invalid @enderror" id="start_time" name="start_time" required>
                                <option value="">{{ $reservation->detail->start_time }}</option>
                                <option value="08:00" {{ $reservation->start_time == '08:00' ? 'selected' : '' }}>08:00</option>
                                <option value="09:00" {{ $reservation->start_time == '09:00' ? 'selected' : '' }}>09:00</option>
                                <option value="10:00" {{ $reservation->start_time == '10:00' ? 'selected' : '' }}>10:00</option>
                                <option value="11:00" {{ $reservation->start_time == '11:00' ? 'selected' : '' }}>11:00</option>
                                <option value="12:00" {{ $reservation->start_time == '12:00' ? 'selected' : '' }}>12:00</option>
                                <option value="13:00" {{ $reservation->start_time == '13:00' ? 'selected' : '' }}>13:00</option>
                                <option value="14:00" {{ $reservation->start_time == '14:00' ? 'selected' : '' }}>14:00</option>
                                <option value="15:00" {{ $reservation->start_time == '15:00' ? 'selected' : '' }}>15:00</option>
                                <option value="16:00" {{ $reservation->start_time == '16:00' ? 'selected' : '' }}>16:00</option>
                            </select>
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
                            <input type="text" class="form-control " id="direccion" name="direccion" placeholder="{{ $reservation->detail->direccion }}" value="{{ old('direccion', $reservation->detail->direccion) }}">
                        </div>
                    </div>

                    {{-- :::: LOCOMOCION :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="locomocion" class="form-label">{{ __('Locomoción:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="locomocion" name="locomocion" value="{{ old('locomocion', $reservation->detail->locomocion) }}">
                        </div>
                    </div>

                    <p style="color: #767676; font-size: 18px; font-weight:600; margin-top: 1rem;">Datos de personas:</p>

                    {{-- :::: REQUISITOS ESPECIALES :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="requerimientos" class="form-label">{{ __('Requerimientos Especiales:') }}</label>
                            <input type="text" class="form-control " id="requerimientos" name="requerimientos" placeholder="{{ $reservation->detail->requerimientos }}" value="{{ old('requerimientos', $reservation->detail->requerimientos) }}">
                        </div>
                    </div>

                    {{-- :::: TOTAL NIÑOS :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="total_ninios" class="form-label">{{ __('Total Niños:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="total_ninios" name="total_ninios" placeholder="{{ $reservation->detail->total_ninios }}" value="{{ old('total_ninios', $reservation->detail->total_ninios) }}">
                        </div>
                    </div>

                    {{-- :::: TOTAL ADULTOS :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="total_adultos" class="form-label">{{ __('Total Adultos:') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="total_adultos" name="total_adultos" placeholder="{{ $reservation->detail->total_adultos }} " value="{{ old('total_adultos', $reservation->detail->total_adultos) }}">
                        </div>
                    </div>

                    {{-- :::: EDADES :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="edad" class="form-label">{{ __('Edades:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="edad" name="edad" placeholder="{{ $reservation->detail->edad }} " value="{{ old('edad', $reservation->detail->edad) }}">
                        </div>
                    </div>

                    {{-- :::: EXTRANJEROS :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="extranjero" class="form-label">{{ __('¿Son extranjeros?:') }} <span class="text-danger">*</span></label>
                            <select class="form-select" id="extranjero" name="extranjero" required>
                                <option value="">{{ $reservation->detail->extranjero }}</option>
                                <option value="Si"{{ $reservation->detail->extranjero == 'Si' ? 'selected' : '' }}>Si</option>
                                <option value="No"{{ $reservation->detail->extranjero == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                    </div>

                    {{-- :::: OBS :::: --}}

                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="obs" class="form-label">{{ __('Observaciones:') }}<span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="obs" name="obs" placeholder="{{ $reservation->detail->obs }}" value="{{ old('obs', $reservation->detail->obs) }}">
                        </div>
                    </div>

                    {{-- :::: CANCELACION DE RESERVA :::: --}}
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <div>
                            <label for="cancellation_reason" class="form-label">{{ __('Razón de cancelación:') }}</label>
                            <textarea class="form-control" id="cancellation_reason" name="cancellation_reason" placeholder="{{ $reservation->cancellation_reason }}">{{ old('cancellation_reason', $reservation->cancellation_reason) }}</textarea>
                        </div>
                    </div>

                    {{-- :::: ESTADO DE LA RESERVA :::: --}}
                    <div class="col-xxl-3 col-md-6 mt-3">
                        <div>
                            <label for="reservation_status" class="form-label">{{ __('Estado de la reserva:') }} <span class="text-danger">*</span></label>
                            <select class="form-select @error('reservation_status') is-invalid @enderror" id="reservation_status" name="reservation_status" required>
                                <option value="pendiente" {{ $reservation->reservation_status == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="confirmada" {{ $reservation->reservation_status == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                                <option value="realizada" {{ $reservation->reservation_status == 'realizada' ? 'selected' : '' }}>Realizada</option>
                                <option value="cancelada" {{ $reservation->reservation_status == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
                            </select>
                            @error('reservation_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- --- BOTONES -- --}}
                    <div class="col-xxl-12 col-md-6 mt-3 d-flex justify-content-start align-items-end">
                        <div>
                            <br>
                            <a href="{{ route('reservations.index') }}" class="btn btn-danger"> {{ __('Cancelar')}} </a>
                            <button type="submit" class="btn btn-success">{{ __('Guardar Cambios')}}</button>
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
    // Obtener fecha mínima (hoy + 10 días)
    //const today = new Date();
    //const minDate = new Date();
    //minDate.setDate(today.getDate() + 10);

    // Formatear YYYY-MM-DD
    // const formatDate = (date) => {
    //     return date.toISOString().split('T')[0];
    // };

    // const input = document.getElementById('reservation_date');
    // input.setAttribute('min', formatDate(minDate));

    // Validar cuando el usuario cambie la fecha
    // input.addEventListener('change', function () {
    //     const selected = new Date(this.value);
    //     const day = selected.getDay();
    // 0 = Domingo, 6 = Sábado

        // 1. Verificar si es antes del mínimo
        // if (selected < minDate) {
        //     alert(`Debes elegir una fecha a partir del ${formatDate(minDate)}`);
        //     this.value = "";
        //     return;
        // }

        // 2. Bloquear sábados y domingos
        // if (day === 5 || day === 6) {
        //     alert("No se permiten reservas los fines de semana.");
        //     this.value = "";
        //     return;
        // }
    // });
</script>

{{-- :::: MENSAJE DE EXITO :::: --}}
@if(session('success_reservation')) {{-- en usercontroller tenemos el return de editar con "success" --}}
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
    });
    Toast.fire({
    icon: "success",
    title: "¡Reserva realizada con éxito!"
    });

</script>
@endif

@endpush
