@extends('layouts.app')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Listado de Reservas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reservas</a></li>
                    <li class="breadcrumb-item active">Lista de Reservas</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Listado Reserva</h5>
            </div>
            <div class="card-body table-responsive">
                <a href="{{ route('reservations.create') }}" class="btn btn-primary waves-effect waves-light">Nueva Reserva</a>
                <br><br> {{-- Le damos un espacio --}}
                <table id="reservationsTable" class="table table-bordered dt-responsive nowrap table-striped align-middle " style="width:100%">
                    <thead>
                        <tr>
                            {{-- -- Encabezados de la tabla -- --}}
                            <th>Acciones</th>
                            <th>Estado de visita</th>
                            <th>Institución</th>
                            <th>C.I</th>
                            {{-- <th>Instituto</th> --}}
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Total personas</th>
                            <th>Dirección</th>
                            <th>Edades</th>
                            <th>Total de niños</th>
                            <th>Total de adultos</th>
                            <th>Teléfono 1</th>
                            <th>Teléfono 2</th>
                            <th>Correo</th>
                            <th>Obs.</th>
                            <th>Requerimientos</th>
                            <th>Locomoción</th>
                            <th>¿Extranjeros?</th>
                        </tr>
                    </thead>
                    {{-- -- se muestra la informacion de los usuarios -- --}}
                    <tbody>
                        @foreach ($reservations as $reservation)
                        <tr>

                            {{-- --- Acciones --- --}}
                            <td>
                                {{-- -- boton editar -- --}}
                                <a href="#" class="btn btn-sm btn-primary">Editar</a>
                                {{-- -- boton cancelar -- --}}
                                <button type="button" class="btn btn-sm btn-danger">Cancelar</button>

                            </td>

                            {{-- ---Estado de visita--- --}}
                            {{-- <td>{{ $reservation->reservation_status }}</td>todo: AJUSTAR --}}

                            {{-- --- Institución --- --}}
                            {{-- <td>{{ $reservation->user->nombres }} {{ $reservation->user->apellidos }}</td> --}}

                            {{-- --- C.I --- --}}
                            {{-- <td>{{ $reservation->user->ci }}</td> todo: AJUSTAR --}}

                            {{-- --- Fecha Solicitada --- --}}
                            <td>{{ $reservation->reservation_date }}</td>

                            {{-- --- Hora solicitada --- --}}
                            <td>{{ $reservation->start_time }}</td>

                            {{-- <td>{{ $reservation->end_time }}</td> --}}
                            {{-- <td>{{ $reservation->payment_status }}</td> --}}

                            {{-- --- Estado de la reserva --- --}}
                            <td>{{ $reservation->reservation_status }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- end page title -->
@endsection


@push('scripts')
{{-- --- llamamos a datatables --- --}}
<script>
    $(document).ready(function() {
        // --- llamamos a la tabla que le pusimos id usuarioTable ---
        $('#reservationsTable').DataTable();
    });
</script>

{{-- -- ::::::::::: MENSAJES :::::::::: -- --}}

{{-- mensaje eliminado con exito --}}

@if(session('success_delete'))
{{--en usercontroller tenemos el return de eliminar con "success_delete"  --}}
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
    title: "¡Registro eliminado con éxito!"
    });

</script>
@endif


{{-- mensaje editado con exito --}}

@if(session('success')) {{-- en usercontroller tenemos el return de editar con "success" --}}

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
    title: "¡Cambio realizado con éxito!"
    });

</script>
@endif

@endpush
