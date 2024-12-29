@include('header')

<div class="container text-center">
    <div class="row">
        <!-- Contenedor de Filtros -->
        <div class="col-12 col-md-2 d-flex flex-column gap-3 filtro">
            <h2 class="fw-bold border-bottom">Filtrar por:</h2>
            <form action="{{ route('catalogo') }}" method="GET"">
                @csrf
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Campamentos"
                           {{ in_array('Campamento', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">CAMPAMENTOS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Accesorios para bicicletas"
                           {{ in_array('Accesorios para bicicletas', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">ACCESORIOS PARA BICICLETAS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Reposeras y sombrillas"
                           {{ in_array('Reposeras y sombrillas', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">REPOSERAS Y SOMBRILLAS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Accesorios para vehiculos"
                           {{ in_array('Accesorios para vehiculos', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">ACCESORIOS PARA VEHICULOS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Hogar y Herramientas"
                           {{ in_array('Hogar y Herramientas', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">HOGAR Y HERRAMIENTAS</span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="Travel"
                           {{ in_array('Travel', request()->input('categorias', [])) ? 'checked' : '' }}>
                    <span class="form-check-label">TRAVEL</span>
                </label>
                

                <button type="submit" class="btn btn-primary mt-4 boton-filtros">Aplicar Filtros</button>
            </form>
        </div>

        <!-- Contenedor de Productos -->
        <div class="col-12 col-md-10 productos-container d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-uppercase fw-bold my-4 border-bottom pb-2 productos-titulo"></h1>
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
                                        <button data-producto-id="{{ $producto->id_producto }}" 
                                                class="btn_meGusta d-flex justify-content-center align-items-center {{ $producto->meGustas->contains('usuario_id', auth()->id()) ? 'active' : '' }}">
                                            <i class="fa-solid fa-heart"></i>
                                        </button>
                                    </div>                                    
                                    <div class="container_btn_tarjeta">
                                        <a href="{{route('producto.vistaProducto', $producto->id_producto)}}" class="btn_comprar">Ver</a>
                                    </div>
                                    <div class="botonMeGusta">
                                        <form class="formAgregarProducto" method="POST" action="{{route('carrito.agregar', $producto->id_producto)}}">
                                            @csrf
                                            <input type="text" name="id_producto" id="{{$producto->id_producto}}" style="display: none">
                                            <button
                                                type="submit"
                                                data-producto-id="{{ $producto->id_producto }}"
                                                class="btn_Carrito d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </button>
                                        </form>
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

<script>
    // Hace aparecer el titulo "Productos" de a una letra a la vez
    document.addEventListener('DOMContentLoaded', function () {
    const text = "Productos";
    const target = document.querySelector('.productos-titulo');
    let index = 0;

    function typeWriter() {
        if (index < text.length) {
            target.textContent += text.charAt(index);
            index++;
            setTimeout(typeWriter, 100);
        }
    }

    typeWriter();
});

    // Hace el efecto de carga en el boton
    document.addEventListener("DOMContentLoaded", () => {
        const botonFiltros = document.querySelector(".boton-filtros");

        if (botonFiltros) {
            botonFiltros.addEventListener("click", (e) => {
                // Mostrar el spinner y deshabilitar el botón
                botonFiltros.innerHTML = `
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Aplicando...
                `;
                botonFiltros.disabled = true;

                // Espera un tiempo breve antes de enviar el formulario
                setTimeout(() => {
                    // Enviar el formulario
                    botonFiltros.closest("form").submit();
                }, 500); // 500ms para mostrar el spinner (ajusta según necesidad)
            });
        }
    });

</script>


@include('footer')