@include('header')

<div class="container">
    <h1>Carrito de Compras</h1>

    @if($productosEnCarrito->isEmpty())
        <p>No hay productos en el carrito.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productosEnCarrito as $item)
                    <tr id="producto-{{ $item['producto']->id_producto }}">
                        <td>{{ $item['producto']->nombre_producto }}</td>
                        <td>{{ $item['cantidad'] }}</td>
                        <td>${{ $item['producto']->precio_producto }}</td>
                        <td>${{ $item['producto']->precio_producto * $item['cantidad'] }}</td>
                        <td>
                            <button class="btn btn-danger btn-eliminar" data-producto-id="{{ $item['producto']->id_producto }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@include('footer')
