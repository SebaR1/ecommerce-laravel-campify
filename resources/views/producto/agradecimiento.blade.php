@include ('header');

<div class="container-gral-resumen-compra">
    <h1>Resumen de tu compra</h1>

    <div class="container-datos-gral">
        <div class="container-datos-cliente">
            <h3>Datos de la compra:</h3>
            <p><strong>Nombre:</strong> {{ $datosComprador['nombre_factura'] }}</p>
            <p><strong>Apellido:</strong> {{ $datosComprador['apellido_factura'] }}</p>
            <p><strong>Email:</strong> {{ $datosComprador['email_factura'] }}</p>
            <p><strong>Teléfono:</strong> {{ $datosComprador['telefono_factura'] }}</p>
            <p><strong>Dirección:</strong> {{ $datosComprador['direccion_factura'] }}</p>
        </div>
    
        <div class="container-datos-carrito">
            <h3>Productos en el carrito:</h3>
            @foreach($productosEnCarrito as $item)
                <div>
                    <p><strong>Producto:</strong> {{ $item['producto']->nombre_producto }}</p>
                    <p><strong>Cantidad:</strong> {{ $item['cantidad'] }}</p>
                    <p><strong>Precio:</strong> ${{ $item['producto']->precio_producto }}</p>
                </div>
            @endforeach
        </div>
    </div>
    
</div>
    

    



@include('footer');