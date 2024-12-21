@include('header')

<div class="container text-center">
    <div class="row">
        <!-- Contenedor de Filtros -->
        <div class="col-12 col-md-2 d-flex flex-column gap-3 filtro">
            <h2 class="fw-bold border-bottom">Filtrar por:</h2>
            <form action="">
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="regalos-empresariales">
                    <span class="form-check-label">REGALOS EMPRESARIALES</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="camping">
                    <span class="form-check-label">CAMPING</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="jardin">
                    <span class="form-check-label">JARDÍN</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="accesorios-bicicletas">
                    <span class="form-check-label">ACCESORIOS PARA BICICLETAS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="electrohogar">
                    <span class="form-check-label">ELECTROHOGAR</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="accesorios-vehiculos">
                    <span class="form-check-label">ACCESORIOS PARA VEHÍCULOS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="herramientas">
                    <span class="form-check-label">HERRAMIENTAS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="matafuegos">
                    <span class="form-check-label">MATAFUEGOS</span>
                </label>
                <button type="submit" class="btn btn-primary mt-4">Aplicar Filtros</button>
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
                            <div class="d-flex justify-content-evenly align-items-center">
                                <div class="botonMeGusta">
                                    <form method="POST" action="{{ route('me-gusta.toggle', ['producto_id' => $producto->id_producto]) }}">
                                        @csrf
                                        <button type="submit" class="btn_meGusta d-flex justify-content-center align-items-center {{ $producto->meGustas->contains('usuario_id', auth()->id()) ? 'active' : '' }}">
                                            <i class="fa-solid fa-heart "></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="container_btn_tarjeta">
                                    <a href="#" class="btn_comprar">Comprar</a>
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