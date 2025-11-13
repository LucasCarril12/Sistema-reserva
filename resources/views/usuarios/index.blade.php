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
                <a href="{{ route('usuarios.create') }}" class="btn btn-primary waves-effect waves-light">Nuevo Registro</a>
                <br><br> {{-- Le damos un espacio --}}
                <table id="usuariosTable" class="table table-bordered dt-responsive nowrap table-striped align-middle " style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
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
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->teléfono }}</td>
                            <td>{{ $usuario->role->name }}</td>
                            <td>
                                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                {{-- -- boton eliminar -- --}}
                                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
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
<script>
    $(document).ready(function() {
        // --- llamamos a la tabla que le pusimos id usuarioTable ---
        $('#usuariosTable').DataTable({

        });
    });
</script>
@endpush
