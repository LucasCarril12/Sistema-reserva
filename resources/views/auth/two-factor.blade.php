<!-- auth page content -->
@extends('layouts.guest')

@section('content')

<div class="auth-page-content ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-sm-5 mb-4 text-white-50">
                    <div>
                        <a href="{{ route('welcome') }}" class="d-inline-block auth-logo">
                            <img src="assets/images/logoMuseo.png" alt="" height="150">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <div class="avatar-lg mx-auto">
                                <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                    <i class="ri-mail-line"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h4 class="mb-3">Verifica tu Email</h4>
                            <p class="text-muted">
                                Por favor ingrese el código que se le envió a:
                                <br>
                                <span class="fw-semibold">{{ $user->email }}</span>
                            </p>

                            <!-- FORM CONFIRMAR CÓDIGO -->
                            <form method="POST" action="{{ route('2fa.store') }}" class="mt-4">
                                @csrf

                                <div class="mb-3">
                                    <input
                                        type="text"
                                        name="code"
                                        maxlength="6"
                                        class="form-control form-control-lg text-center"
                                        placeholder="Ingrese el código de 6 dígitos"
                                        required
                                    >
                                </div>

                                @error('code')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <button type="submit" class="btn btn-success w-100 mb-3">
                                    Confirmar
                                </button>
                            </form>

                            <!-- FORM REENVIAR -->
                            <form method="POST" action="{{ route('2fa.resend') }}">
                                @csrf
                                <p class="mb-1">¿No se envió el código?</p>
                                <button type="submit" class="btn btn-link p-0">
                                    Reenviar código
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePasswordButton = document.querySelector('#tooglePassword');
            const passwordInput = document.querySelector('#password');

            togglePasswordButton.addEventListener('click', function () {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
            });
        });
    </script>
@endpush

@endsection
