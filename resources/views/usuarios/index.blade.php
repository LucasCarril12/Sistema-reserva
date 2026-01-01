@extends('layouts.app')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Mantenimiento de Usuario</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Usuarios</a></li>
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
                <h5 class="card-title mb-0">Listado Usuarios</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('usuarios.create') }}" class="btn btn-primary waves-effect waves-light">Nuevo Usuario</a>
                <br><br> {{-- Le damos un espacio --}}
                <table id="usuariosTable" class="table table-bordered dt-responsive nowrap table-striped align-middle " style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>C.I</th>
                            <th>Correo electrónico</th>
                            <th>teléfono</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    {{-- -- se muestra la informacion de los usuarios -- --}}
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->nombres }}</td>
                            <td>{{ $usuario->apellidos }}</td>
                            <td>{{ $usuario->ci }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->role->name }}</td>
                            <td>
                                {{-- -- boton editar -- --}}
                                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                {{-- -- boton eliminar -- --}}
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmarEliminacion({{ $usuario->id }})">Eliminar</button>
                                <form id="delete-form-{{ $usuario->id }}" action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST" style="display: none;">
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

<!-- end page title -->
@endsection


@push('scripts')
{{-- --- llamamos a datatables --- --}}
<script>
    $(document).ready(function() {
        // --- llamamos a la tabla que le pusimos id usuarioTable ---
        $('#usuariosTable').DataTable();
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

{{-- ---- Registro exitoso ---- --}}

@if(session('success_create')) {{-- en usercontroller tenemos el return de editar con "success_create" --}}
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


{{---- confirmar eliminacion --- --}}
<script>
    function confirmarEliminacion(usuarioId) {
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
                document.getElementById('delete-form-' + usuarioId).submit();
            }
        });
    }
</script>





@endpush
