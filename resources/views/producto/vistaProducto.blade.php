@include('header')
<!-- Contenedor general -->

    <div class=" contenedor-contenedor-gral  ">
        <!-- Contenedor de imágenes ilustrativas -->
        <div class="contenedor-imagenes">
            <!-- Imagen -->
            <div class="contenedor-imagen-principal">
                <img src={{ asset('storage/' . $producto->imagen_producto) }} alt="" class="img-fluid">
            </div> 
            <!-- Sub imágenes -->
            <div class="">
                <img src="images/gtr.JPG" alt="" class="">
                <img src="images/gtr.JPG" alt="" class="">
                <img src="images/gtr.JPG" alt="" class="">
                <img src="images/gtr.JPG" alt="" class="">
                <img src="images/gtr.JPG" alt="" class="">
                <img src="images/gtr.JPG" alt="" class="">
            </div>
        </div>
    
        <!-- Contenedor de datos de compra -->
        <div class="contenedor-datos">
            <!-- Nombre y Precio-->
            <div class="">
                <h3 class=" txt-categoria">{{$producto->categoria->nombre_categoria}}</h3>
                <h1 class="txt-titulo">{{$producto->nombre_producto}}</h1>
                <h2 class="txt-precio">$ {{$producto->precio_producto}}</h2>
            </div>
            
            <!-- Formas de pago -->
            <div class="mb-4 mt-4">
                <h3 class="fs-6">Nuestras promociones bancarias</h3>
                <h4 class="fs-6 color-cuotas">12 Cuotas sin interés de $...</h4>
                <!-- Tarjetas en miniatura -->
                <div class="tarjetas-chicas d-flex justify-content-start align-items-center gap-1">
                    <img src="images/tarjetas/american-express.JPG" alt="" class="img-fluid">
                    <img src="images/tarjetas/bbva.JPG" alt="" class="img-fluid">
                    <img src="images/tarjetas/cabal.JPG" alt="" class="img-fluid">
                    <img src="images/tarjetas/mastercard.jpg" alt="" class="img-fluid">
                    <img src="images/tarjetas/naranja.jpg" alt="" class="img-fluid">
                    <img src="images/tarjetas/visa.jpg" alt="" class="img-fluid">
                </div>
            </div>
    
            <div class="linea-divisoria my-4"></div>
    
            <!-- Cosas de envío -->
            <div class="envios mt-1 mb-3">
                <div class="d-flex justify-content-start align-items-center gap-2">
                    <i class="fa-solid fa-truck fa-lg text-secondary"></i>
                    <p>Envío gratis a ...</p>
                </div>
                <div class="d-flex justify-content-start align-items-center gap-2">
                    <i class="fa-solid fa-box fa-lg text-secondary"></i>
                    <div class="d-flex flex-column justify-content-center align-items-start m-0">
                        <p class="m-0 p-0">Retiro GRATIS por sucursal</p>
                        <a href="#">Ver sucursales</a>
                    </div>
                </div>
            </div>
            <div class="contenedor-btn-comprar">
                <button class="btn-comprar btn ">Comprar</button>
            </div>
            
        </div>
    </div>
    <div class="container contenedor-descripcion">
        <h1>Descripcion:</h1>
        <p>{{$producto->descripcion_producto}}</p>
    </div>
    
    


@include('footer')
