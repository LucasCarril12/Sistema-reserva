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
    let calendar;
    if (!calendarEl) return;
    // =========================
    // INICIALIZAR CALENDARIO (MÍNIMO - evitar DOM mutations en eventDidMount)
    // =========================
    // Calcular ventana deshabilitada: desde hoy hasta 10 días después (inclusive)
    const today = new Date();
    today.setHours(0,0,0,0);
    const disabledWindowEnd = new Date(today);
    disabledWindowEnd.setDate(disabledWindowEnd.getDate() + 10);
    disabledWindowEnd.setHours(23,59,59,999);

    calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        buttonText: {
            prev: '<',
            next: '>',
            today: 'Hoy',
            month: 'Mes',
            week: 'Semana',
            day: 'Día'
        },
        events: '{{ route("administrador.fullcalendar") }}',

        eventDidMount: function(info) {
            if (info.event.backgroundColor) {
                info.el.style.backgroundColor = info.event.backgroundColor;
            }
            if (info.event.borderColor) {
                info.el.style.borderColor = info.event.borderColor;
            }

            // botón + para ver detalles
            var plusBtn = document.createElement('button');
            plusBtn.type = 'button';
            plusBtn.className = 'btn btn-sm btn-light fc-plus-btn';
            plusBtn.innerText = '+';
            plusBtn.style.marginLeft = '6px';
            plusBtn.addEventListener('click', function(e){
                e.stopPropagation();
                showReservationDetails(info.event);
            });
            info.el.appendChild(plusBtn);
        },

        eventClick: function(info){
            showReservationDetails(info.event);
        },

        selectable: true,
        // Visual cues para fines de semana y la ventana deshabilitada
        dayCellClassNames: function(arg){
            const classes = [];
            const dow = arg.date.getDay(); // 0 Domingo, 6 Sábado
            const d = new Date(arg.date);
            d.setHours(0,0,0,0);
            if (dow === 0 || dow === 6) classes.push('fc-weekend-disabled');
            if (d >= today && d <= disabledWindowEnd) classes.push('fc-disabled-window');
            return classes;
        },

        dateClick: function(info){
            const clicked = new Date(info.date);
            clicked.setHours(0,0,0,0);

            // No permitir fines de semana
            const dow = clicked.getDay();
            if (dow === 0 || dow === 6){
                showAlert('No se permiten sábados ni domingos para reservas.', 'danger');
                return;
            }

            // No permitir fechas entre hoy y +10 días
            if (clicked >= today && clicked <= disabledWindowEnd){
                showAlert('Las fechas desde hoy y los próximos 10 días están deshabilitadas.', 'danger');
                return;
            }

            // Fecha válida -> redirigir al formulario de reserva con query param
            const dateStr = clicked.toISOString().split('T')[0];
            window.location.href = '{{ route("cliente.reserva") }}?date=' + dateStr;
        }
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

    // Agregar estilos para las celdas deshabilitadas
    const style = document.createElement('style');
    style.innerHTML = `
        .fc-weekend-disabled {
            background-color: rgba(220,53,69,0.07) !important;
        }
        .fc-disabled-window {
            background-color: rgba(108,117,125,0.08) !important;
        }
        .calendar-alert {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1100;
            width: auto;
            max-width: 80%;
        }
    `;
    document.head.appendChild(style);

    // Función para mostrar alertas temporales dentro del contenedor del calendario
    function showAlert(message, type = 'info'){
        // Remover alertas previas
        const existing = document.querySelector('.calendar-alert');
        if (existing) existing.remove();

        const alert = document.createElement('div');
        alert.className = 'alert alert-' + type + ' calendar-alert';
        alert.role = 'alert';
        alert.innerText = message;

        const container = calendarEl.closest('.card-body') || document.body;
        container.appendChild(alert);

        setTimeout(()=>{ alert.classList.add('fade'); alert.remove(); }, 3500);
    }


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
            <p><strong>Motivo de cancelación:</strong> ${props.cancellation_reason || '—'}</p>
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
