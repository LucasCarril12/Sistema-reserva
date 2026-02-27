<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recordatorio de la reserva</title>
</head>
<body>
    <p>Hola {{ $userName ?? 'Visitante' }},</p>

    <p>Te enviamos este recordatorio porque tu visita está programada para <strong>{{ $reservationDate }}</strong> a las <strong>{{ $start_time }}</strong>.</p>

    <p>Detalles de la reserva:</p>
    <ul>
        <li><strong>Nombre del responsable:</strong> {{ $nombre_responsable ?? 'No especificado' }}</li>
        <li><strong>Teléfono:</strong> {{ $telefono ?? 'No especificado' }}</li>
        <li><strong>Sala:</strong> {{ $sala ?? 'No especificado' }}</li>
        <li><strong>Observaciones:</strong> {{ $observations ?? 'Ninguna' }}</li>
    </ul>

    <p>Por favor, asegúrate de llegar a tiempo recuerde que nuestro tiempo de espera es de 15 minutos.</p>

    <br>
    <p>Saludos,<br>Museo Aeronáutico</p>
</body>
</html>
