<!-- auth page content -->
@extends('layouts.guest')

@section('content')

<div class="auth-page-content ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-sm-5 mb-4 text-white-50">
                    <div>
                        <a href="index.html" class="d-inline-block auth-logo">
                            <img src="assets/images/logoMuseo.png" alt="" height="150">
                        </a>
                    </div>
                    {{-- <p class="mt-3 fs-15 fw-medium">Museo Aeronáutico || Acceso Reservas</p> --}}
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4">

                    {{-- --- TEXTO PARA REGISTRARTE --- -- --}}

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">¡Crear nueva cuenta!</h5>
                            <p class="text-muted">Registrese para continuar con la reserva.</p>
                        </div>
                        <div class="p-2 mt-4">
                            <form class="needs-validation" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                {{-- ---NOMBRES-- --}}

                                <div class="mb-3">
                                    <label for="nombres" class="form-label">{{ __('Nombres:') }} <span class="text-danger">*</span></label> {{-- El span me sirve para poner el * en rojo para hacer entender que es obligatorio --}}
                                    <input type="text" class="form-control pe-5 @error('nombres') is-invalid @enderror" id="nombres" placeholder="Ingrese nombre completo:" name="nombres" value="{{ old('nombres') }}" required autocomplete="nombres" autofocus>
                                    @error('nombres')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- --- APELLIDOS --- --}}

                                <div class="mb-3">
                                    <label for="apellidos" class="form-label">{{ __('Apellidos:') }} <span class="text-danger">*</span></label> {{-- El span me sirve para poner el * en rojo para hacer entender que es obligatorio --}}
                                    <input type="text" class="form-control pe-5 @error('apellidos') is-invalid @enderror" id="apellidos" placeholder="Ingrese apellido completo:" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" >
                                    @error('apellidos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- --- TELEFONO --- --}}

                                <div class="mb-3">
                                    <label for="teléfono" class="form-label">{{ __('Teléfono:') }} <span class="text-danger">*</span></label> {{-- El span me sirve para poner el * en rojo para hacer entender que es obligatorio --}}
                                    <input type="tel" class="form-control pe-5 @error('teléfono') is-invalid @enderror" id="telefono" placeholder="Ingrese numero de telefono: ej: 091123456" name="teléfono" value="{{ old('teléfono') }}" required autocomplete="teléfono" pattern="^(\+598)?\s?\d{9}$" title="Ingrese un número de teléfono válido. Ej: 091123456">
                                    @error('teléfono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                {{-- ---EMAIL-- --}}

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Correo Electronico:') }} <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control pe-5 @error('email') is-invalid @enderror" id="email" placeholder="Ingrese Correo Electronico" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- --- FOTO --- --}}

                                <div class="mb-3">
                                    <label for="foto" class="form-label">{{ __('Foto de perfil (Opcional):') }}</label>
                                    <input type="file" class="form-control pe-5 @error('foto') is-invalid @enderror" id="foto" placeholder="Adjunte una foto de perfil" name="foto" autocomplete="foto" >
                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- --- CONTRASEÑA --- --}}

                                <div class="mb-3">
                                    <label class="form-label" for="password">{{ __('Contraseña:') }} <span class="text-danger">*</span></label>
                                    <input type="password" id="password" name="password" class="form-control pe-5 @error('password') is-invalid @enderror" placeholder="Ingrese contraseña" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- --- CONFIRMAR CONTRASEÑA --- --}}

                                <div class="mb-3">
                                    <label class="form-label" for="password-confirm">{{ __('Confirmar contraseña:') }} <span class="text-danger">*</span></label>
                                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirme la contraseña" required>
                                </div>

                                {{--TODO: Agregar campo de "¿Cómo nos conociste?" en la BD --}}
                                {{-- <div class="mb-3">
                                    <label class="form-label" for="password-confirm">{{ __('¿Como nos conocistes?:') }}</label>
                                    <input type="text" id="how_did_you_know" name="how_did_you_know" class="form-control" placeholder="Ingrese cómo nos conociste" >
                                </div> --}}

                                {{-- --- BOTON --- --}}

                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit">{{ __('Registrame') }}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="mt-4 text-center">
                    <p class="mb-0">¿Ya tienes cuenta? <a href="{{ route('login')}}" class="fw-semibold text-primary text-decoration-underline"> Iniciar Sesión </a> </p>
                </div>

            </div>
        </div>
        <!-- end row -->
        <!-- end container -->
    </div>
</div>

@endsection





