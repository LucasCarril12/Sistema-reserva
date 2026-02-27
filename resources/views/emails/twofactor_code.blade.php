<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Código de verificación</title>
</head>
<body>
    <p>Hola!👋🏼 {{ $user->nombres ?? $user->name ?? 'usuario' }},</p>
    <p>Hemos recibido una solicitud para continuar con tu acceso al sistema.</p>

    <p><strong>Tu código de verificación es:</strong></p>
    <p style="font-size:1.5em;letter-spacing:2px;"><strong>{{ $code }}</strong></p>

    <p>Este código expira en 10 minutos.</p>

    <p><em>Importante:</em> No compartas este código con nadie.</p>

    <p>Si no fuiste tú quien realizó esta solicitud, puedes ignorar este correo.</p>

    <br>
    <p>Saludos,<br>Museo Aeronáutico</p>
</body>
</html>
