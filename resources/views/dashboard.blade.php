@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Bienvenido/a al Museo Aeronáutico</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex ">
                <div class="card-header align-items-center d-flex border-bottom-0">
                    <h4 class="card-title mb-0 flex-grow-1">👋🏼¡Hola {{ Auth::user()->nombres }}, Nos alegramos de tenerte aquí!</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="row h-100">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="row align-items-center">
                                        <div class="col-sm-8">
                                            <div class="p-3">
                                                <h5 class="fs-16">Con nuestro sistema de reserva podras:</h5>
                                                <p class="fs-16 lh-base w-80">
                                                    <i class='bx  bx-calendar-event m-2' style="color: #fff;background-color:darkblue;padding:10px;border-radius:100%;"></i> Agendar visitas de forma sencilla y rapida<br>

                                                    <i class='bx  bx-tickets m-2' style="color: #fff;background-color:darkblue;padding:10px;border-radius:100%;"></i> Elegir la fecha que mejor se adapte<br>

                                                    <i class='bx  bx-clock-3 m-2' style="color: #fff;background-color:darkblue;padding:10px;border-radius:100%;"></i> Seleccioná el horario que mejor se adapte<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="px-3">
                                                <img src="{{ asset('assets/images/dashbord/img_dashbord_airplane.svg')}}" class="img-fluid" alt="Imagen de bienvenida, avion antiguo">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
