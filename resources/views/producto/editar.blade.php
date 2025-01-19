@include('header')

<div class="container_form_agregar_producto">
    <h2 class="titulo_form text-center">MODIFICA TU PRODUCTO</h2>
    <h3 class="titulo_form pb-4 text-center"></h3>

    <form class="form_agregar_producto" action="{{route('catalogo.modificar', $producto->id_producto)}}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        @csrf
        <div class="mb-3">

          <label for="nombre_producto" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="{{$producto->nombre_producto}}">

        </div>

        <div class="mb-3">

            <label for="precio_producto" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio_producto" name="precio_producto" value="{{$producto->precio_producto}}">

        </div>

        <div class="mb-3">

            <label for="stock_producto" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock_producto" name="stock_producto" value="{{$producto->stock_producto}}">

            
        </div>
        <div class="mb-3">

            <label for="descripcion_producto" class="form-label">Descripcion</label>
            <textarea name="descripcion_producto" id="descripcion_producto" cols="30" rows="10" class="form-control">{{$producto->descripcion_producto}}
            </textarea>

        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Selecciona una opción:</label>
            <select id="categoria_id" name="categoria_id" class="form-control">
                <option value="">--Seleccionar una opcion--</option>
                <option value="1" {{ $producto->categoria_id == 1 ? 'selected' : '' }}>Campamento</option>
                <option value="2" {{ $producto->categoria_id == 2 ? 'selected' : '' }}>Reposeras y sombrillas</option>
                <option value="3" {{ $producto->categoria_id == 3 ? 'selected' : '' }}>Accesorios para bicicletas</option>
                <option value="4" {{ $producto->categoria_id == 4 ? 'selected' : '' }}>Travel</option>
                <option value="5" {{ $producto->categoria_id == 5 ? 'selected' : '' }}>Accesorios para vehiculos</option>
                <option value="6" {{ $producto->categoria_id == 6 ? 'selected' : '' }}>Hogar y herramientas</option>
            </select>
        </div>
        
        
        <div class="mb-3">
            <label for="imagen_producto" class="form-label">Imagen Principal</label>
            
            <!-- Mostrar la imagen actual -->
            @if($producto->imagen_producto)
                <div class="mb-2 d-flex justify-content-center align-items-center">
                    <img src="data:image/jpeg;base64,{{ $producto->imagen_producto }}" alt="Imagen Actual" style="max-width: 200px; max-height: 200px;">
                </div>
            @endif
        
            <!-- Input para subir una nueva imagen -->
            <input type="file" class="form-control" id="imagen_producto" name="imagen_producto">
        </div>
        
        <button type="submit" class="btn btn-primary btn_form">Modificar Producto</button>
      </form>
</div>

@include('footer')