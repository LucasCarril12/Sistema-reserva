@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Nuevo Usuario</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Usuarios</a></li>
                    <li class="breadcrumb-item active">Nuevo Usuario</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Nuevo Usuario</h4>
                </div>
            </div>
            <div class="card-body">
                <form class="row gy-1" method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">

                    @csrf

                    {{-- --IMPUT NOMBRE-- --}}

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="nombres" class="form-label">{{ __('Nombre:') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres" name="nombres" value="{{ old('nombres') }}" required autofocus>

                            @error('nombres')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- -- IMPUT APELLIDO -- --}}

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="apellidos" class="form-label">{{ __('Apellido:') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" required>

                            @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- -- INPUT TELÉFONO -- --}}

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="teléfono" class="form-label">{{ __('Teléfono:') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('teléfono') is-invalid @enderror" id="teléfono" name="teléfono" value="{{ old('teléfono') }}" required>

                            @error('teléfono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- -- IMPUT ROL -- --}}

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="rol_id" class="form-label">{{ __('Rol:') }} <span class="text-danger">*</span></label>
                            <select class="form-select @error('rol_id') is-invalid @enderror" id="rol_id" name="rol_id" required>
                                @foreach ($roles->reverse() as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->name }}</option> {{-- Muestra las opciones del los roles con el nombre --}}
                                @endforeach
                            </select>
                            @error('rol_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- -- IMPUT CORREO -- --}}

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="email" class="form-label">{{ __('Correo Electrónico:') }} <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    {{-- -- IMPUT CONTRASEÑA -- --}}

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="password" class="form-label">{{ __('Contraseña:') }}</label>
                            <input type="text" class="form-control " id="password" value="12345678" readonly>
                        </div>
                    </div>

                    {{-- --- FOTO --- --}}

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="foto" class="form-label">{{ __('Foto de perfil (Opcional):') }}</label> {{-- jpg,jpeg,png --}}
                            <input type="file" class="form-control pe-5 @error('foto') is-invalid @enderror" id="foto" placeholder="Adjunte una foto de perfil" name="foto" autocomplete="foto" >
                            <span class="text-danger">.jpg, .jpeg o .png</span>
                            @error('foto')
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
                            <a href="{{ route('usuarios.index') }}" class="btn btn-danger"> {{ __('Cancelar')}} </a>
                            <button type="submit" class="btn btn-success">{{ __('Guardar Registro')}}</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

@endsection
