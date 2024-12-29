<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            margin: 10px 0;
            color: #555;
        }
        .highlight {
            color: #0056b3;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>Un nuevo candidato ha enviado su CV para el puesto de <span class="highlight">{{ $puesto }}</span>.</p>
        <p><strong>Detalles del candidato:</strong></p>
        <ul>
            <li><strong>Nombre:</strong> {{ $nombre }} {{ $apellido }}</li>
            <li><strong>Email:</strong> {{ $email }}</li>
            <li><strong>Teléfono:</strong> {{ $telefono }}</li>
        </ul>
        <p>El CV del candidato está adjunto para su revisión.</p>
        <p>¡Esperamos que esta información sea de utilidad!</p>
        <div class="footer">
            Este mensaje fue enviado automáticamente desde el sistema de gestión de candidatos.
        </div>
    </div>
</body>
</html>
