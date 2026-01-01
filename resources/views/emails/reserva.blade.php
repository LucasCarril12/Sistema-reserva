<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud enviada con éxito - Museo Aeronáutico</title>
</head>
<body>
    <h2>👋🏼¡Hola {{ $userName ?? 'No especificado' }}!</h2>
    <p>Gracias por enviar tu solicitud.<strong> <br>Nos pondremos en contacto contigo pronto.</strong></p>
    <p>Detalles de la visita:</p>
    <ul>
        <li><strong>Nombre del responsable:</strong> {{ $nombre_responsable ?? 'No especificado' }}</li>
        <li><strong>Telefono:</strong> {{ $telefono ?? 'No especificado' }}</li>
        <li><strong>Fecha de la visita:</strong> {{ $reservationDate ?? 'No especificado' }}</li>
        <li><strong>Hora de la visita:</strong> {{ $start_time ?? 'No especificado' }}</li>
        <li><strong>Número de adultos:</strong> {{ $total_adultos ?? 'No especificado' }}</li>
        <li><strong>Número de niños:</strong> {{ $total_ninios ?? 'No especificado' }}</li>
        <li><strong>Edades:</strong> {{ $edad ?? 'No especificado' }}</li>
        <li><strong>Salas:</strong> {{ $sala ?? 'No especificado' }}</li>
        <li><strong>Observaciones:</strong> {{ $observations ?? 'No especificado' }}</li>
    </ul>
    <p>Gracias por tu solicitud.</p>
    <p>Museo Aeronáutico.</p>
</body>
</html>
