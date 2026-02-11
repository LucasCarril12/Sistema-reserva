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
                    <h4 class="card-title mb-0 flex-grow-1">Calendario de Reservas</h4>
                </div>
            </div>
            <div class="card-body position-relative">
                <div id="calendar"></div>
                <div id="calendarLoader" class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(255,255,255,0.8); z-index:1000; display:none;">
                    <div class="spinner-border" role="status"><span class="visually-hidden">Cargando...</span></div>
                </div>

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
                                <a href="#" class="btn btn-primary" id="openReservationEdit" target="_blank">Editar</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <style>
                #calendar {
                    min-height: 700px;
                }

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
document.addEventListener('DOMContentLoaded', function () {

    const calendarEl = document.getElementById('calendar');
    const loader = document.getElementById('calendarLoader');

    // Helper para controlar loading desde nuestro código
    function setLoading(val){
        if (loader) loader.style.display = val ? 'flex' : 'none';
        try {
            if (calendar && typeof calendar.setLoading === 'function') calendar.setLoading(val);
        } catch(e){}
    }

    if (!calendarEl) return;
    // =========================
    // INICIALIZAR CALENDARIO (MÍNIMO - evitar DOM mutations en eventDidMount)
    // =========================
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        events: '{{ route("administrador.fullcalendar") }}',
    });

    // Nota: los bloques que manipulaban el DOM en eventDidMount y manejaban eventClick
    // provocaban renderizados recursivos y múltiples mutaciones. Se comentan abajo
    // para referencia, pero no se ejecutan.
    /*
    eventDidMount: function (info) {
        // TODO: Este bloque estaba agregando botones al DOM por cada evento y
        // era re-ejecutado en cada re-render. Dejado comentado para evitar loops.
    },

    eventClick: function (info) {
        // showReservationDetails(info.event);
    }
    */

    // Renderizar
    calendar.render();


    // =========================
    // CARGAR DÍAS COMPLETOS (NO BLOQUEANTE)
    // =========================
    fetch('{{ route("reservations.fully_booked") }}', {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.ok ? res.json() : [])
    .then(dates => {
        if (!Array.isArray(dates)) return;

        dates.forEach(date => {
            calendar.addEvent({
                start: date,
                allDay: true,
                display: 'background',
                backgroundColor: '#6c757d',
                borderColor: '#6c757d',
                title: 'Completo'
            });
        });
    })
    .catch(err => {
        console.warn('No se pudieron cargar los días completos', err);
    });

    // =========================
    // MODAL
    // =========================
    function showReservationDetails(event) {
        const props = event.extendedProps || {};
        const detail = props.detail || {};
        const modalEl = document.getElementById('reservationModal');

        modalEl.querySelector('.modal-title').innerText =
            props.institucion || event.title;

        modalEl.querySelector('.modal-body').innerHTML = `
            <p><strong>Fecha:</strong> ${props.reservation_date || ''} ${props.start_time || ''}</p>
            <p><strong>Estado:</strong> ${props.reservation_status || ''}</p>
            <hr>
            <p><strong>Responsable:</strong> ${detail.nombre_responsable || '—'}</p>
            <p><strong>C.I:</strong> ${detail.ci || '—'}</p>
            <p><strong>Email:</strong> ${detail.email || '—'}</p>
            <p><strong>Teléfono:</strong> ${detail.telefono || '—'}</p>
            <p><strong>Teléfono 2:</strong> ${detail.telefono2 || '—'}</p>
            <p><strong>Sala:</strong> ${detail.sala || '—'}</p>
            <p><strong>Total adultos:</strong> ${detail.total_adultos ?? '—'}</p>
            <p><strong>Total niños:</strong> ${detail.total_ninios ?? '—'}</p>
            <p><strong>Dirección:</strong> ${detail.direccion || '—'}</p>
            <p><strong>Observaciones:</strong> ${detail.obs || '—'}</p>
        `;

        const editLink = modalEl.querySelector('#openReservationEdit');
        if (editLink) {
            editLink.href = '/reservations/' + event.id + '/edit';
        }

        new bootstrap.Modal(modalEl).show();
    }

});
</script>
@endpush
