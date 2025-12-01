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

                    {{-- :::: ELEJIR USUARIO :::: --}}
                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="user_id" class="form-label">{{ __('Usuario:') }} <span class="text-danger">*</span></label>
                            <select class="form-select @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required>
                                <option value="">Seleccionar usuario</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->nombres }} {{ $user->apellidos }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- :::: FECHA RESERVA :::: --}}
                    <div class="col-xxl-3 col-md-6">
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

                    {{-- :::: HORA DE INICIO :::: --}}
                    <div class="col-xxl-3 col-md-6">
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
                            @error('start_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- :::: HORARIO DE FINALIZADO :::: --}}
                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="end_time" class="form-label">{{ __('Hora Fin:') }}</label>
                            <input type="text" class="form-control " id="end_time" name="end_time" readonly>
                        </div>
                    </div>

                    {{-- :::: ESTADO DE LA RESERVA :::: --}}
                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="reservation_status" class="form-label">{{ __('Estado de la reserva:') }} <span class="text-danger">*</span></label>
                            <select class="form-select @error('reservation_status') is-invalid @enderror" id="reservation_status" name="reservation_status" required>
                                <option value="">Seleccionar Estado</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="confirmada">Confirmada</option>
                            </select>
                            @error('reservation_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- --- BOTON CANCELAR -- --}}
                    <div class="col-xxl-12 col-md-6 d-flex justify-content-start align-items-end">
                        <div>
                            <br>
                            <a href="{{ route('reservations.index') }}" class="btn btn-danger"> {{ __('Cancelar')}} </a>
                            <button type="submit" class="btn btn-success">{{ __('Guardar Reserva')}}</button>
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
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('reservation_date').setAttribute('min', today);

</script>
@endpush


