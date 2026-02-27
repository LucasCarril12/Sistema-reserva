<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gracias por tu visita</title>
</head>
<body>
    <p>Hola {{ $userName ?? 'Visitante' }},</p>

    <p>Esperamos que hayas disfrutado de tu visita el <strong>{{ $reservationDate }}</strong> a las <strong>{{ $start_time }}</strong>.</p>

    <p>Nos encantaría conocer tu opinión para mejorar nuestro museo. Por favor, déjanos tus comentarios en el siguiente enlace:</p>
    <p><a href="{{ $feedbackLink }}" target="_blank">Enviar feedback / Ver en el mapa</a></p>

    <p>Si necesitas volver a ver nuestra ubicación, aquí tienes el mapa de Google:</p>
    <p><a href="{{ $feedbackLink }}" target="_blank">Abrir mapa</a></p>

    <br>
    <p>Saludos,<br>Museo Aeronáutico</p>
</body>
</html>
