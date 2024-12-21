@include('header')

<div class="container-fluid">
    <ul>

        <li class="d-flex justify-content-evenly border">
            <div class="px-2" >imagenproducto</div>
            <div class="px-2">nombre producto</div>
            <div class="px-2">categoria producto</div>
            <div class="px-2">descripcion producto</div>
            <div class="px-2">sacar me gusta</div>
        </li>
        @foreach ($productos as $meGusta)
        <li class="d-flex justify-content-evenly border">
            <img src="{{ asset('storage/' . $meGusta->producto->imagen_producto) }}" alt="Imagen del producto" style="width: 80px; height: 80px">
            <div class="px-2">{{ $meGusta->producto->nombre_producto}}</div>
            <div class="px-2">{{ $meGusta->producto->categoria->nombre_categoria}}</div>
            <div class="px-2">{{ $meGusta->producto->descripcion_producto}}</div>
            <div class="px-2">QUITAR ME GUSTA</div>
        </li>
        @endforeach
    </ul>
</div>

@include('footer')
