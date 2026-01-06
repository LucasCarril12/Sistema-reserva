@extends('layouts.app')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Mantenimiento de Eventos</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Eventos</a></li>
                    <li class="breadcrumb-item active">Mantenimiento</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Listado Eventos</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('events.create') }}" class="btn btn-primary waves-effect waves-light">Agregar Evento</a>
                <br><br>
                <table id="eventsTable" class="table table-bordered dt-responsive nowrap table-striped align-middle " style="width:100%">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Subtítulo</th>
                            <th>Creado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->subtitle }}</td>
                            <td>{{ $event->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmarEliminacionEvento({{ $event->id }})">Eliminar</button>

                                <form id="delete-form-{{ $event->id }}" action="{{ route('events.destroy',$event->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection


@push('scripts')
<script>
    $(document).ready(function() {
        $('#eventsTable').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            }
        });
    });
</script>

{{-- Mensajes --}}

@if(session('success_delete'))
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

@if(session('success_create'))
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
    title: "¡Registro creado con éxito!"
    });

</script>
@endif



<script>
    function confirmarEliminacionEvento(eventoId) {
        Swal.fire({
            title: "¿Estas seguro?",
            text: "¡Esta acción NO se puede revertir!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, Eliminar!",
            cancelButtonText: "Cancelar"
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + eventoId).submit();
            }
        });
    }
</script>

@endpush
