@include('header')

<div class="container text-center">
    <div class="row">
        <!-- Contenedor de Filtros -->
        <div class="col-12 col-md-2 d-flex flex-column gap-3 filtro">
            <h2 class="fw-bold border-bottom">Filtrar por:</h2>
            <form action="{{ route('catalogo') }}" method="GET"">
                @csrf
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Camping"
                           {{ in_array('Camping', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">CAMPING</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Accesorios para bicicletas"
                           {{ in_array('Accesorios para bicicletas', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">ACCESORIOS PARA BICICLETAS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Jardin"
                           {{ in_array('Jardin', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">JARDIN</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Accesorios para vehiculos"
                           {{ in_array('Accesorios para vehiculos', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">ACCESORIOS PARA VEHICULOS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Herramientas"
                           {{ in_array('Herramientas', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">HERRAMIENTAS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Electrohogar"
                           {{ in_array('Electrohogar', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">ELECTROHOGAR</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Matafuegos"
                           {{ in_array('Matafuegos', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">MATAFUEGOS</span>
                </label>

                <button type="submit" class="btn btn-primary mt-4 boton-filtros">Aplicar Filtros</button>
            </form>
        </div>

        <!-- Contenedor de Productos -->
        <div class="col-12 col-md-10 productos-container d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-uppercase fw-bold my-4 border-bottom pb-2">Productos</h1>
            <!-- Fila de Tarjetas -->
            <div class="row container_tarjetas">
                @foreach ($productos as $producto)
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    
                        <div class="tarjeta-producto">
                            <img src="{{ asset('storage/' . $producto->imagen_producto) }}" alt="Imagen del producto">
                            <div class="container_datos_tarjeta">
                                <h3>{{$producto->nombre_producto}}</h3>
                                <p>{{$producto->categoria->nombre_categoria}}</p>
                                <p>{{$producto->descripcion_producto}}</p>
                                <p>
                                    ${{$producto->precio_producto}}
                                </p>
                                <div class="d-flex justify-content-evenly align-items-center gap-3">
                                    <div class="botonMeGusta">
                                        <form method="POST" action="{{ route('me-gusta.toggle', ['producto_id' => $producto->id_producto]) }}">
                                            @csrf
                                            <button type="submit" class="btn_meGusta d-flex justify-content-center align-items-center {{ $producto->meGustas->contains('usuario_id', auth()->id()) ? 'active' : '' }}">
                                                <i class="fa-solid fa-heart "></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="container_btn_tarjeta">
                                        <a href="{{route('producto.vistaProducto',$producto->id_producto)}}" class="btn_comprar">Ver</a>
                                    </div>
                                    <div class="botonMeGusta">
                                            <button type="submit" class="btn_meGusta d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                    </div>
                                </div> 
                            </div>
                        </div>

                    
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('footer')