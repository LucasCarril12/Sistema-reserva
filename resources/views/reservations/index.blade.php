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
                            <th></th>
                            <th>Acciones</th>
                            <th>Estado de visita</th>
                            <th>Institución</th>
                            <th>Responsable</th>
                            <th>C.I</th>
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
                            <th>Salas</th>
                            <th>Razón de cancelación</th>
                        </tr>
                    </thead>
                    {{-- -- se muestra la informacion de los usuarios -- --}}
                    <tbody>
                        @foreach ($reservations as $reservation)
                        <tr>
                            <td></td>
                            {{-- --- Acciones --- --}}
                            <td>

                                <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                @if($reservation->reservation_status == 'cancelada')
                                    <button class="btn btn-sm btn-danger btn-cancel" disabled>Cancelar</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-danger btn-cancel" data-id="{{ $reservation->id }}">Cancelar</button>
                                @endif

                                {{-- Botón Eliminar permanente --}}
                                <button type="button" class="btn btn-sm btn-outline-danger ms-1" onclick="confirmDelete({{ $reservation->id }})">Eliminar</button>
                                <form id="delete-reservation-{{ $reservation->id }}" action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                </form>



                            </td>
                            {{-- ---Estado de visita--- --}}
                            <td>
                                @if($reservation->reservation_status == 'cancelada')
                                    <span class="badge bg-danger">{{ $reservation->reservation_status }}</span>
                                @elseif($reservation->reservation_status == 'realizada')
                                    <span class="badge bg-success">{{ $reservation->reservation_status }}</span>
                                @elseif($reservation->reservation_status == 'confirmada')
                                    <span class="badge bg-primary">{{ $reservation->reservation_status }}</span>
                                @else
                                    <span class="badge bg-warning">{{ $reservation->reservation_status }}</span>
                                @endif
                            </td>
                            {{-- --- Institución --- --}}
                            <td>{{ $reservation->institucion }} </td>
                            {{-- --- RESPONSABLE DE LA RESERVA --- --}}
                            <td>{{ $reservation->detail->nombre_responsable ?? '—' }}</td>
                            {{-- --- C.I --- --}}
                            <td>{{ $reservation->detail->ci ?? '—' }}</td>
                            {{-- --- Fecha Solicitada --- --}}
                            <td>{{ $reservation->reservation_date }}</td>
                            {{-- --- Hora solicitada --- --}}
                            <td>{{ $reservation->start_time }}</td>
                            {{-- Total personas --}}
                            <td>{{ ($reservation->detail->total_adultos ?? 0) + ($reservation->detail->total_ninios ?? 0) }}</td>
                            {{-- Dirección --}}
                            <td>{{ $reservation->detail->direccion ?? '—' }}</td>
                            {{-- Edades --}}
                            <td>{{ $reservation->detail->edad ?? '—' }}</td>
                            {{-- Total de niños --}}
                            <td>{{ $reservation->detail->total_ninios ?? '—' }}</td>
                            {{-- Total de adultos --}}
                            <td>{{ $reservation->detail->total_adultos ?? '—' }}</td>
                            {{-- Telefono 1 --}}
                            <td>{{ $reservation->detail->telefono ?? '—' }}</td>
                            {{-- Telefono 2 --}}
                            <td>{{ $reservation->detail->telefono2 ?? '—' }}</td>
                            {{-- Correo --}}
                            <td>{{ $reservation->detail->email ?? '—' }}</td>
                            {{-- Obs. --}}
                            <td>{{ $reservation->detail->obs ?? '—' }}</td>
                            {{-- Requerimientos --}}
                            <td>{{ $reservation->detail->requerimientos ?? '—' }}</td>
                            {{-- Locomoción --}}
                            <td>{{ $reservation->detail->locomocion ?? '—' }}</td>
                            {{-- ¿Extranjeros? --}}
                            <td>{{$reservation->detail->extranjero ?? '—'}}</td>
                            {{-- Salas --}}
                            <td>{{ $reservation->detail->sala ?? '—' }}</td>
                            {{-- Razón de cancelación --}}
                            <td>{{ $reservation->cancellation_reason ?? '—' }}</td>
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
{{-- <script>
    $(document).ready(function() {

        $('#reservationsTable').DataTable();
    });
</script> --}}

{{-- ::::::::::: CANCELACION DE RESERVA ::::::::::: --}}
<script>
    $(document).ready(function() {
        // Manejo de botón cancelar
        $('.btn-cancel').on('click', function(e) {
            e.preventDefault();
            var reservationId = $(this).data('id');

            Swal.fire({
                title: '¿Estás seguro de cancelar esta reserva?',
                text: "Esta acción no se puede deshacer.",
                input: 'textarea',
                inputPlaceholder: 'Agrega un motivo de cancelación aquí',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, cancelar reserva',
                cancelButtonText: 'No, mantener reserva',
                preConfirm: (cancellationReason) => {
                    if (!cancellationReason) {
                        Swal.showValidationMessage('Por favor, ingresa un motivo de cancelación.');
                        return false;
                    }
                    // AJAX al backend
                    return $.ajax({
                        url: '{{ route("reservations.cancel") }}',
                        method: 'POST',
                        data: {
                            reservation_id: reservationId,
                            cancellation_reason: cancellationReason,
                            _token: '{{ csrf_token() }}'
                        }
                    }).done(function(response) {
                        if(response.success){
                            Swal.fire(
                                'Cancelada!',
                                response.message,
                                'success'
                            ).then(() => {
                                location.reload(); // recarga la página
                            });
                        } else {
                            Swal.fire(
                                'Error',
                                'No se pudo cancelar la reserva',
                                'error'
                            );
                        }
                    }).fail(function(){
                        Swal.fire(
                            'Error',
                            'Ocurrió un error inesperado',
                            'error'
                        );
                    });
                }
            });
        });
    });
</script>

{{-- :::::::::: FIN CANCELACION DE RESERVA :::::::::::: --}}
{{-- ::::::::::: MOSTRAR TABLAS EN MOBIL :::::::::: --}}
<script>
$(document).ready(function () {

    const isMobile = window.matchMedia("(max-width: 430px)").matches;

    $('#reservationsTable').DataTable({
        responsive: {
            details: {
                type: 'column',
                target: 0
            }
        },
        columnDefs: [
            {
                targets: 0,
                className: 'control',
                orderable: false,
                responsivePriority: 1
            },
            {
                targets: 3, // INSTITUCIÓN
                responsivePriority: 2
            },
            {
                targets: '_all',
                responsivePriority: 10000
            }
        ],
        order: [[3, 'asc']]
    });
});

// Confirmar eliminación permanente
function confirmDelete(reservationId) {
    Swal.fire({
        title: '¿Estás seguro de eliminar esta reserva?',
        text: "Esto eliminará permanentemente la reserva.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-reservation-' + reservationId).submit();
        }
    });
}
</script>

{{-- ::::::::::: FIN DE BLOQUE MOSTRAR EN MOBIL ::::::::::: --}}
{{-- -- ::::::::::: MENSAJES :::::::::: -- --}}

{{-- MSJ ELIMINADO CON EXITO --}}
@if(session('success_delete')) {{-- Recordatorio: este valor se maneja del controller  --}}
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

{{-- :::: MSJ VISITA AGREGADA CON EXITO :::: --}}
@if(session('success_reservation'))
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

{{-- MSJ EDITADO CON EXITO --}}
@if(session('success'))
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

{{-- ::::: FIN DE MSJ ::::: --}}

@endpush
