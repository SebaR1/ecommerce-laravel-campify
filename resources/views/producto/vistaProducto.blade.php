@include('header')

<!-- Contenedor general -->
<div class="container-fluid d-flex flex-column flex-lg-row justify-content-center align-items-center margenes gap-3 espacio">
    <!-- Contenedor de imágenes ilustrativas -->
    <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center gap-3 order-1 order-md-1">
        <!-- Imagen -->
        <div class="imagen-principal">
            <img src="images/aguera.jpg" alt="" class="img-fluid">
        </div> 
        <!-- Sub imágenes -->
        <div class="d-flex justify-content-center align-items-center imagenes-chicas gap-3 overflow-auto">
            <img src="images/gtr.JPG" alt="" class="img-fluid">
            <img src="images/gtr.JPG" alt="" class="img-fluid">
            <img src="images/gtr.JPG" alt="" class="img-fluid">
            <img src="images/gtr.JPG" alt="" class="img-fluid">
            <img src="images/gtr.JPG" alt="" class="img-fluid">
            <img src="images/gtr.JPG" alt="" class="img-fluid">
        </div>
    </div>

    <!-- Contenedor de datos de compra -->
    <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-start datos p-5 border rounded bg-light order-2 order-md-2">
        <!-- Nombre y Precio-->
        <div class="">
            <h1 class="fw-bold h1">Nombre producto</h1>
            <h2 class="display-6">Precio</h2>
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
        <button class="btn mt-2 w-100">Comprar</button>
    </div>
</div>

@include('footer')
