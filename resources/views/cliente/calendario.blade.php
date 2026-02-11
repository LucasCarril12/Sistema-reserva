@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Calendario de Reservas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrador</a></li>
                    <li class="breadcrumb-item active">Calendario de Reservas</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">👋🏼¡Hola {{ Auth::user()->nombres }}!, aquí puedes ver tus reservas:</h4>
                </div>
            </div>
            <div class="card-body">
                <div id="calendar"></div>

                <!-- Modal para detalles de reserva -->
                <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="reservationModalLabel">Detalles de la reserva</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- contenido dinámico -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <style>
                .fc-plus-btn{
                    position: relative;
                    top: -4px;
                    padding: 0 6px;
                    line-height: 18px;
                    border-radius: 3px;
                    font-weight: 600;
                    cursor: pointer;
                }
            </style>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            buttonText: {
                today: 'Hoy',
                month: 'Mes',
                week: 'Semana',
                day: 'Día'
            },
            events: '{{ route("cliente.fullcalendar") }}',

            eventDidMount: function(info) {
                if(info.event.backgroundColor) {
                    info.el.style.backgroundColor = info.event.backgroundColor;
                }
                if(info.event.borderColor) {
                    info.el.style.borderColor = info.event.borderColor;
                }

                // Agregar botón + dentro del evento
                var plusBtn = document.createElement('button');
                plusBtn.type = 'button';
                plusBtn.className = 'btn btn-sm btn-light fc-plus-btn';
                plusBtn.innerText = '+';
                plusBtn.style.marginLeft = '6px';
                plusBtn.addEventListener('click', function(e){
                    e.stopPropagation(); // evitar que dispare eventClick del calendario
                    showReservationDetails(info.event);
                });

                // insertar el botón al final del elemento de evento
                // FullCalendar estructura el contenido dentro de info.el
                info.el.appendChild(plusBtn);
            },

            eventClick: function(info){
                // También abrir modal si se hace click en el evento
                showReservationDetails(info.event);
            }

        });

        calendar.render();

        // Función para popular y mostrar modal con detalles
        function showReservationDetails(event){
            var props = event.extendedProps || {};
            var detail = props.detail || {};
            var modalEl = document.getElementById('reservationModal');
            modalEl.querySelector('.modal-title').innerText = props.institucion || event.title;
            var body = modalEl.querySelector('.modal-body');
            body.innerHTML = `
                <p><strong>Fecha:</strong> ${props.reservation_date || ''} ${props.start_time || ''}</p>
                <p><strong>Estado:</strong> ${props.reservation_status || ''}</p>
                <hr>
                <p><strong>Responsable:</strong> ${detail.nombre_responsable || '—'}</p>
                <p><strong>C.I:</strong> ${detail.ci || '—'}</p>
                <p><strong>Email:</strong> ${props.user?.email || detail.email || '—'}</p>
                <p><strong>Teléfono:</strong> ${detail.telefono || '—'}</p>
                <p><strong>Teléfono 2:</strong> ${detail.telefono2 || '—'}</p>
                <p><strong>Sala:</strong> ${detail.sala || '—'}</p>
                <p><strong>Total adultos:</strong> ${detail.total_adultos ?? '—'}</p>
                <p><strong>Total niños:</strong> ${detail.total_ninios ?? '—'}</p>
                <p><strong>Dirección:</strong> ${detail.direccion || '—'}</p>
                <p><strong>Observaciones:</strong> ${detail.obs || '—'}</p>
                <p><strong>Motivo de cancelación:</strong> ${props.cancellation_reason || '—'}</p>
            `;
            var editLink = modalEl.querySelector('#openReservationEdit');
            if(editLink){
                editLink.href = '/reservations/' + event.id + '/edit';
            }
            var bsModal = new bootstrap.Modal(modalEl);
            bsModal.show();
        }

    });
</script>
@endpush
