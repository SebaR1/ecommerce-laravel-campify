@include('header')

    <!-- /////////////////////////////////////////
        //               OFERTAS               //
        /////////////////////////////////////////-->
        <!--<div class="container ofertas p-0">
            <a href="#" target="_blank" class="promo-link"></a>
        </div>-->

        <section class="container-banner">
            <div class="container-banner-txt ">
                <h2>NUEVO INGRESO</h2>
                <h3>¡Mochila expansible a CARRY ON para viajar!</h3>
                <h2>20% OFF</h2>
            </div>

            <div class="container-banner-img">
               <img src="images/banner-mochila.png" alt="">
            </div>

        </section>
        

    <!-- /////////////////////////////////////////
        //               CARRUSEL               //
        /////////////////////////////////////////-->
    <div id="carouselExampleIndicators" class="container carousel slide custom-carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="" target="_blank">
                    <img src="images/stock/silla1.svg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="" target="_blank">
                    <img src="images/stock/congeladora1.svg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="" target="_blank">
                    <img src="images/stock/sombrilla1.svg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="" target="_blank">
                    <img src="images/stock/silla2.svg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="" target="_blank">
                    <img src="images/stock/bolsa_de_dormir1.svg" class="d-block w-100" alt="...">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- /////////////////////////////////////////
        //          BANNER LLAMATIVO           //
        /////////////////////////////////////////-->
    <section class="container-banner-llamativo">
        <div class="container-banner-llamativo-txt ">
            <h2>ESPIRITU EXPLORADOR</h2>
            <h3>PRODUCTOS DE CAMPIFY</h3>
        </div>
    </section>

    <!-- /////////////////////////////////////////
        //          DETALLES DEL ENVIO          //
        /////////////////////////////////////////-->
    <!-- DETALLES DE ENVIO -->
    <div class="container-cartas-detalle-envio">
        <!-- CARTA 1 -->
        <div class="container-carta">
            <!-- IMAGEN -->
            <div class="img-carta">
                <img src="/images/ws_logo.png" alt="Logo de WhatsApp">
            </div>
            <!-- INFO -->
            <div class="info-carta">
                <h5>Para consultas, cambios o devoluciones</h5>
                <p>Escribinos en nuestro whatsapp</p>
            </div>
        </div>

        <!-- CARTA 2 -->
        <div class="container-carta">
            <!-- IMAGEN -->
            <div class="img-carta">
                <img src="/images/tarjeta.png" alt="Logo de WhatsApp">
            </div>
            <!-- INFO -->
            <div class="info-carta">
                <h5>Paga con tarjeta y efectivo</h5>
                <p>Oferta en 3, 6 y 12 cuotas</p>
            </div>
        </div>

        <!-- CARTA 3 -->
        <div class="container-carta">
            <!-- IMAGEN -->
            <div class=" img-carta">
                <img src="/images/camion.png" alt="Logo de WhatsApp">
            </div>
            <!-- INFO -->
            <div class="info-carta">
                <h5>Envios a todo el país</h5>
                <p>Elegi la forma de entregar que quieras, ¡Y Listo!</p>
            </div>
        </div>
    </div>


    <!-- /////////////////////////////////////////
        //           MEDIOS DE PAGO            //
        /////////////////////////////////////////-->
       

        <div class="container-medios-pago">
            <h2 class="titulo-container-tarjetas-blanco">MEDIOS DE PAGO</h2>
            <h3 class="subtitulo-blanco">Todas las facilidades de pago, Elegí la que más te convenga</h3>

            <div class="container-cartas-medios-pago">

           
                <!-- CARTA 1 -->
                <div class="container-carta">
                    <!-- IMAGEN -->
                    <div class="img-carta">
                        <img src="/images/tarjeta-credito-gris.png" alt="Logo de WhatsApp">
                    </div>
                    <!-- INFO -->
                    <div class="info-carta">
                        <h5>Tarjeta de crédito</h5>
                        <p>Acreditación instantánea</p>
                    </div>
                </div>
    
                <!-- CARTA 2 -->
                <div class="container-carta">
                    <!-- IMAGEN -->
                    <div class="img-carta">
                        <img src="/images/tarjeta-debito-gris.png" alt="Logo de WhatsApp">
                    </div>
                    <!-- INFO -->
                    <div class="info-carta">
                        <h5>Tarjeta de débito</h5>
                        <p>Acreditación instantánea</p>
                    </div>
                </div>
    
                <!-- CARTA 3 -->
                <div class="container-carta">
                    <!-- IMAGEN -->
                    <div class=" img-carta">
                        <img src="/images/efectivo-gris.png" alt="Logo de WhatsApp">
                    </div>
                    <!-- INFO -->
                    <div class="info-carta">
                        <h5>Efectivo</h5>
                        <p>Acreditación instantánea</p>
                    </div>
                </div>
            </div>
        
    </div>



    


    <!-- /////////////////////////////////////////
        //          CONTACTO        //
        /////////////////////////////////////////-->
        <div class="container-contacto">
            <h2 class="titulo-container-tarjetas">CONTACTO</h2>
            
            <h3 class="subtitulo-gris">¿Querés hacer una compra?<br> Te asesoramos
                Llamanos ó escribinos, estamos para ayudarte</h3>
            <div class="container-cartas-detalle-envio">
                <!-- CARTA 1 -->
                <div class="container-carta">
                    <!-- IMAGEN -->
                    <div class="img-carta">
                        <img src="/images/ws_logo.png" alt="Logo de WhatsApp">
                    </div>
                    <!-- INFO -->
                    <div class="info-carta">
                        <h5>Venta telefónica</h5>
                        <p>De lunes a viernes de 9 a 18hs</p>
                        <p>Sábados de 9 a 13hs</p>

                    </div>
                </div>
        
                <!-- CARTA 2 -->
                <div class="container-carta">
                    <!-- IMAGEN -->
                    <div class="img-carta">
                        <img src="/images/tarjeta.png" alt="Logo de WhatsApp">
                    </div>
                    <!-- INFO -->
                    <div class="info-carta">
                        <h5>WhatsApp</h5>
                        <p>De lunes a viernes de 9 a 18hs</p>
                        <p>Sábados de 9 a 13hs</p>
                    </div>
                </div>
        
                <!-- CARTA 3 -->
                <div class="container-carta">
                    <!-- IMAGEN -->
                    <div class=" img-carta">
                        <img src="/images/camion.png" alt="Logo de WhatsApp">
                    </div>
                    <!-- INFO -->
                    <div class="info-carta">
                        <h5>Venta mayorista</h5>
                        <p>De lunes a viernes de 9 a 18hs</p>
                        <p>Sábados de 9 a 13hs</p>
                    </div>
                </div>
            </div>

        </div>
        
    
  
    
    
@include('footer')
