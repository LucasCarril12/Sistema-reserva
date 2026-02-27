<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reserva cancelada</title>
</head>
<body>
    <p>Hola {{ $userName }},</p>

    <p>Te informamos que tu visita programada el <strong>{{ $reservationDate }}</strong> a las <strong>{{ $start_time }}</strong> ha sido <strong>cancelada</strong>.</p>

    <p><strong>Motivo:</strong> {{ $reason }}</p>

    <p>Si necesitas asistencia o deseas reprogramar, puedes completar nuevamente el formulario de reserva en nuestro sitio web.</p>

    <br>
    <p>Saludos,<br>Museo Aeronáutico</p>
</body>
</html>
