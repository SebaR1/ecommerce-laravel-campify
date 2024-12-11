@include('header')

<!-- Contenedor general -->
<div class="container d-flex justify-content-center aligns-items-center margenes gap-3">
        <!-- Contenedor de images ilustrativas -->
        <div class="col-6 d-flex flex-column justify-content-center aligns-items-center gap-3">
            <!-- Imagen -->
            <div class="imagen-principal">
                <img src="images/aguera.jpg" alt="" class="img-fluid">
            </div> 
            <!-- Sub imagenes -->
            <div class="d-flex justify-content-center aligns-items-center imagenes-chicas gap-3">
                <img src="images/ferrari.jpg" alt="" class="img-fluid">
                <img src="images/ferrari.jpg" alt="" class="img-fluid">
                <img src="images/ferrari.jpg" alt="" class="img-fluid">
                <img src="images/ferrari.jpg" alt="" class="img-fluid">
                <img src="images/ferrari.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <!-- Contenedor de datos de compra -->
        <div class="col-6 d-flex flex-column justify-content-center aligns-items-center datos p-5 border rounded bg-light">
            <!-- Nombre y Precio-->
            <div class="">
                <h1 class="fw-bold h1">Nombre producto</h1>
                <h2 class="display-6">Precio</h2>
            </div>
            
            <!-- Formas de pago -->
            <div class="mb-4 mt-4">
                <h3 class="fs-6">Nuestras promociones bancarias</h3>
                <h4 class="fs-6 color-cuotas">12 Cuotas sin interes de $...</h4>
                <!-- Tarjetas en miniatura -->
                <div class="tarjetas-chicas d-flex justify-content-start aligns-items-center gap-1">
                    <img src="images/gtr.jpg" alt="" class="img-fluid">
                    <img src="images/gtr.jpg" alt="" class="img-fluid">
                    <img src="images/gtr.jpg" alt="" class="img-fluid">
                    <img src="images/gtr.jpg" alt="" class="img-fluid">
                    <img src="images/gtr.jpg" alt="" class="img-fluid">
                    <img src="images/gtr.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <hr>

            <!-- Cosas de envio -->
            <div class="envios mt-1 mb-3">
                <div class="d-flex justify-content-start align-items-center gap-2">
                    <i class="fa-solid fa-truck fa-lg text-secondary"></i>
                    <p>Envio gratis a ...</p>
                </div>
                <div class="d-flex justify-content-start align-items-center gap-2">
                    <i class="fa-solid fa-box fa-lg text-secondary"></i>
                    <div class="d-flex flex-column justify-content-center align-items-start m-0">
                        <p class="m-0 p-0">Retiro GRATIS por sucursal</p>
                        <a href="#">Ver sucursales</a>
                    </div>
                </div>
            </div>
            <button class="btn mt-2">Comprar</button>
        </div>
</div>

@include('footer')