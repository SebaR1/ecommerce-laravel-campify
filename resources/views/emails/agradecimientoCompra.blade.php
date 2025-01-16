<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <h1>¡Muchas gracias por su compra!</h1>        
        <p><strong>Detalles del comprador:</strong></p>
        <ul>
            <li><strong>Nombre:</strong> {{ $nombre }} {{ $apellido }}</li>
            <li><strong>Email:</strong> {{ $email }}</li>
            <li><strong>Teléfono:</strong> {{ $telefono }}</li>
        </ul>
        <p><strong>Productos comprados:</strong></p>
        <ul>
            @foreach($productos as $producto)
                <li>{{ $producto['nombre'] }} - Cantidad: {{ $producto['cantidad'] }} - Precio: ${{ $producto['precio'] }}</li>
            @endforeach
            <li> Total general: ${{$totalGeneral}}</li>
        </ul>
        <p>¡Esperamos que haya disfrutado el servicio de Campify!</p>
        <div>
            Este mensaje fue enviado automáticamente desde el sistema de compras.
        </div>
    </div>
</body>
</html>
