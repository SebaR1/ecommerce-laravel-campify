<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Añadir Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fuente de Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>

    <!-- /////////////////////////////////////////
        //               NAVBAR                 //
        /////////////////////////////////////////-->

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand logo" href="#">
                <img src="images/logo-recortado.JPG" alt="Logo" class="d-inline-block align-text-top">
            </a>
        
            <!-- Contenido del navbar -->
                <!-- Botones de acción -->
                <ul class="navbar-nav ms-auto d-flex align-items-center gap-3">
                    <button class="btn btn-primary">Iniciar Sesion</button>
                </ul>
        </div>
    </nav>

    <!-- /////////////////////////////////////////
        //    ARTUCLOS CON MENU DESPLEGABLE     //
        /////////////////////////////////////////-->
    
    <div class="container d-flex flex-column align-items-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Botón de colapso para mobile -->
                <button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#menuArticulos" aria-controls="menuArticulos" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Contenido del menú -->
                <div class="collapse navbar-collapse" id="menuArticulos">
                    <ul class="container navbar-nav d-flex flex-column align-items-center">
                        <li class="nav-item"><a class="nav-link" href="">OFERTAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="">REGALOS EMPRESARIALES</a></li>
                        <li class="nav-item"><a class="nav-link" href="">CAMPING</a></li>
                        <li class="nav-item"><a class="nav-link" href="">JARDIN</a></li>
                        <li class="nav-item"><a class="nav-link" href="">ACCESORIOS PARA BICICLETAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="">ELECTROHOGAR</a></li>
                        <li class="nav-item"><a class="nav-link" href="">ACCESORIOS PARA VEHICULOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="">HERRAMIENTAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="">MATAFUEGOS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!-- /////////////////////////////////////////
        //               OFERTAS               //
        /////////////////////////////////////////-->
    <div class="container ofertas p-0">
        <a href="#" target="_blank">
            <img src="images/promo.JPG" class="img-fluid" alt="oferta">
        </a>
    </div>

    <!-- /////////////////////////////////////////
        //               CARRUSEL               //
        /////////////////////////////////////////-->
    <div id="carouselExampleIndicators" class="container carousel slide">
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
    <div class="container d-flex flex-column justify-content-center align-items-center banner">
        <!-- Texto -->
        <div class="container d-flex flex-column align-items-center justify-content-center text-center">
            <h1 class="text-sahdow">Espiritu Explorador</h1>
            <h2 class="text-sahdow fs-4">Productos de Campfy en accion</h2>
        </div>
        <button class="btn btn-primary mt-3">Catalogo</button>
        <!-- Imagen -->
        <img src="images/carpa.svg" alt="carpa">
    </div>

    <!-- /////////////////////////////////////////
        //          DETALLES DEL ENVIO          //
        /////////////////////////////////////////-->
    <!-- DETALLES DE ENVIO -->
    <div class="container d-flex flex-column flex-md-row gap-3 mt-5">
        <!-- CARTA 1 -->
        <div class="container carta d-flex flex-column align-items-center text-center">
            <!-- IMAGEN -->
            <div class="container imagen-carta">
                <i class="fab fa-whatsapp fa-4x text-success"></i>
            </div>
            <!-- INFO -->
            <div class="container">
                <h5>Para consultas, cambios o devoluciones</h5>
                <p>Escribinos en nuestro whatsapp</p>
            </div>
        </div>

        <!-- CARTA 2 -->
        <div class="container carta d-flex flex-column align-items-center text-center">
            <!-- IMAGEN -->
            <div class="container imagen-carta">
                <i class="fas fa-credit-card fa-4x text-primary"></i>
            </div>
            <!-- INFO -->
            <div class="container">
                <h5>Paga con tarjeta y efectivo</h5>
                <p>Oferta en 3, 6 y 12 cuotas</p>
            </div>
        </div>

        <!-- CARTA 3 -->
        <div class="container carta d-flex flex-column align-items-center text-center">
            <!-- IMAGEN -->
            <div class="container imagen-carta">
                <i class="fas fa-truck fa-4x text-secondary"></i>
            </div>
            <!-- INFO -->
            <div class="container">
                <h5>Envios a todo el país</h5>
                <p>Elegi la forma de entregar que quieras, ¡Y Listo!</p>
            </div>
        </div>
    </div>


    <!-- /////////////////////////////////////////
        //           MEDIOS DE PAGO            //
        /////////////////////////////////////////-->
    <div class="container medios-de-pago d-flex flex-column justify-content-center align-items-center text-center py-5 d-none d-md-flex">
        <h2 class="mb-3 text-success fw-bold">MEDIOS DE PAGO</h2>
        <h3 class="mb-5 text-secondary">Todas las facilidades de pago, Elegí la que más te convenga</h3>

        <div class="container d-flex flex-column flex-md-row gap-4 justify-content-center">
            <!-- CARTA 1 -->
            <div class="carta d-flex flex-column align-items-center text-center p-4 shadow rounded">
                <!-- IMAGEN -->
                <div class="imagen-carta mb-3">
                    <i class="fas fa-credit-card fa-4x text-success"></i>
                </div>
                <!-- INFO -->
                <h5 class="text-primary fw-bold">Tarjeta de Crédito</h5>
                <p class="text-muted">Acreditación instantánea</p>
            </div>

            <!-- CARTA 2 -->
            <div class="carta d-flex flex-column align-items-center text-center p-4 shadow rounded">
                <!-- IMAGEN -->
                <div class="imagen-carta mb-3">
                    <i class="fas fa-credit-card fa-4x text-warning"></i>
                </div>
                <!-- INFO -->
                <h5 class="text-primary fw-bold">Tarjeta de Débito</h5>
                <p class="text-muted">Acreditación instantánea</p>
            </div>

            <!-- CARTA 3 -->
            <div class="carta d-flex flex-column align-items-center text-center p-4 shadow rounded">
                <!-- IMAGEN -->
                <div class="imagen-carta mb-3">
                    <i class="fas fa-wallet fa-4x text-dark"></i>
                </div>
                <!-- INFO -->
                <h5 class="text-primary fw-bold">Efectivo</h5>
                <p class="text-muted">Acreditación instantánea</p>
            </div>
        </div>
    </div>



    <!-- /////////////////////////////////////////
        //           MEDIOS DE ENVIO           //
        /////////////////////////////////////////-->
    <div class="container medios-de-envio d-flex flex-column align-items-center text-center py-5 d-none d-md-flex">
        <h2 class="mb-3 text-primary fw-bold">MEDIOS DE ENVÍO</h2>
    <h3 class="mb-2 text-secondary">Elegí la forma que más te convenga</h3>
    <h4 class="mb-5 text-muted">Compralo desde tu casa, nosotros te lo llevamos</h4>

    <!-- Cartas -->
    <div class="container d-flex flex-column flex-md-row gap-4 justify-content-center">
            <!-- CARTA 1 -->
            <div class="carta d-flex flex-column align-items-center text-center p-4 shadow rounded">
                <!-- IMAGEN -->
                <div class="imagen-carta mb-3">
                    <i class="fas fa-motorcycle fa-4x text-warning"></i>
                </div>
                <!-- INFO -->
                <h5 class="text-primary fw-bold">Moto en el día</h5>
                <p class="text-muted">CABA y GBA</p>
                <p class="text-muted">Lunes a Sábados</p>
                <p class="text-success fw-bold">¡Llega hoy!</p>
            </div>

            <!-- CARTA 2 -->
            <div class="carta d-flex flex-column align-items-center text-center p-4 shadow rounded">
                <!-- IMAGEN -->
                <div class="imagen-carta mb-3">
                    <i class="fas fa-truck fa-4x text-danger"></i>
                </div>
                <!-- INFO -->
                <h5 class="text-primary fw-bold">Entrega normal</h5>
                <p class="text-muted">CABA y GBA</p>
                <p class="text-muted">Envíos por OCA y Andreani</p>
            </div>

            <!-- CARTA 3 -->
            <div class="carta d-flex flex-column align-items-center text-center p-4 shadow rounded">
                <!-- IMAGEN -->
                <div class="imagen-carta mb-3">
                    <i class="fas fa-store fa-4x text-success"></i>
                </div>
                <!-- INFO -->
                <h5 class="text-primary fw-bold">Retiro en sucursal</h5>
                <p class="text-muted">Lunes a Viernes de 9 a 18hs</p>
                <p class="text-muted">Sábados de 9 a 13hs</p>
            </div>
        </div>

        <!-- Información adicional -->
        <div class="container text-center mt-5">
            <h3 class="text-secondary">¡Tu envío está asegurado!</h3>
            <h4 class="text-muted">No importa dónde estés, llegamos a vos</h4>
            <p class="mt-3 text-success fw-bold">Envío gratis en casi todos nuestros productos</p>
            <p class="text-muted">Todos nuestros envíos cuentan con seguro total</p>
        </div>
    </div>



    <!-- /////////////////////////////////////////
        //               CONTACTO              //
        /////////////////////////////////////////-->
    <div class="container d-flex flex-column align-items-center text-center contacto py-5 d-none d-md-flex">
        <h2 class="text-primary fw-bold mb-3">CONTACTO</h2>
        <h3 class="text-secondary mb-2">¿Querés hacer una compra? Te asesoramos</h3>
        <h4 class="text-muted mb-4">Llamanos o escribinos, estamos para ayudarte</h4>
    
        <!-- Primera fila de cartas -->
        <div class="container d-flex flex-column flex-md-row gap-4 justify-content-center">
            <!-- CARTA 1 -->
            <div class="carta p-4 shadow rounded text-center d-flex flex-column align-items-center">
                <i class="fas fa-phone fa-4x text-warning mb-3"></i>
                <h5 class="text-primary fw-bold">Venta Telefónica</h5>
                <p class="text-muted">De lunes a viernes de 9 a 18hs</p>
                <p class="text-muted">Sábados de 9 a 13hs</p>
                <button class="btn btn-outline-primary mt-3">Llamar Ahora</button>
            </div>
    
            <!-- CARTA 2 -->
            <div class="carta p-4 shadow rounded text-center d-flex flex-column align-items-center">
                <i class="fab fa-whatsapp fa-4x text-success mb-3"></i>
                <h5 class="text-primary fw-bold">Whatsapp</h5>
                <p class="text-muted">De lunes a viernes de 9 a 18hs</p>
                <p class="text-muted">Sábados de 9 a 13hs</p>
                <button class="btn btn-outline-success mt-3">Escribir Ahora</button>
            </div>
    
            <!-- CARTA 3 -->
            <div class="carta p-4 shadow rounded text-center d-flex flex-column align-items-center">
                <i class="fas fa-table fa-4x text-danger mb-3"></i>
                <h5 class="text-primary fw-bold">Venta Mayorista</h5>
                <p class="text-muted">De lunes a viernes de 9 a 18hs</p>
                <p class="text-muted">Sábados de 9 a 13hs</p>
                <button class="btn btn-outline-danger mt-3">Consultar</button>
            </div>
        </div>
    
        <!-- Segunda fila de cartas -->
        <div class="container text-center mt-5">
            <h3 class="text-secondary mb-2">¿Compraste? Te ayudamos con tu consulta</h3>
            <h4 class="text-muted mb-4">Elegí el área con la que deseas hablar</h4>
    
            <div class="d-flex flex-column flex-md-row gap-4 justify-content-center">
                <!-- CARTA 1 -->
                <div class="carta p-4 shadow rounded text-center d-flex flex-column align-items-center">
                    <i class="fas fa-shopping-cart fa-4x text-primary mb-3"></i>
                    <h5 class="text-primary fw-bold">Por una compra ya realizada</h5>
                    <button class="btn btn-outline-primary mt-3">Consultar</button>
                </div>
    
                <!-- CARTA 2 -->
                <div class="carta p-4 shadow rounded text-center d-flex flex-column align-items-center">
                    <i class="fas fa-box fa-4x text-warning mb-3"></i>
                    <h5 class="text-primary fw-bold">Relacionada con tu envío</h5>
                    <button class="btn btn-outline-warning mt-3">Rastrear Envío</button>
                </div>
    
                <!-- CARTA 3 -->
                <div class="carta p-4 shadow rounded text-center d-flex flex-column align-items-center">
                    <i class="fas fa-headset fa-4x text-success mb-3"></i>
                    <h5 class="text-primary fw-bold">Técnica o de funcionamiento</h5>
                    <button class="btn btn-outline-success mt-3">Soporte Técnico</button>
                </div>
            </div>
        </div>

    </div>

    <!-- /////////////////////////////////////////
        //              CONFIANZA              //
        /////////////////////////////////////////-->
    <div class="d-block d-md-none d-flex flex-column align-items-center text-center p-4 border rounded shadow-lg">
        <!-- Título llamativo -->
        <h3 class="fw-bold text-success mb-3">Tu compra está protegida</h3>
        <h4 class="text-dark mb-4">Nos hacemos cargo si tenés un problema</h4>
    
        <!-- Información con destacados -->
        <p class="mb-2">
            <i class="fas fa-shield-alt text-success me-2"></i> 
            <strong>Sitio Web seguro</strong> certificado por <span class="text-primary fw-semibold">Mercado Pago</span>
        </p>
        <p class="mb-2">
            <i class="fas fa-history text-warning me-2"></i> 
            <strong>30 días de prueba:</strong> Si no es lo que esperabas, <span class="text-danger fw-semibold">te devolvemos tu dinero</span>
        </p>
        <p class="mb-0">
            <i class="fas fa-tools text-secondary me-2"></i> 
            <strong>Garantía oficial de fábrica:</strong> Gestionada directamente por nosotros
        </p>
    </div>
    
    

    <!-- /////////////////////////////////////////
         //               FOOTER               //
        /////////////////////////////////////////-->    
    <footer class="footer py-4">
        <div class="container text-center">
            <!-- Redes Sociales -->
            <div class="social-icons mb-3">
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            </div>

            <!-- Enlaces Rápidos -->
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="#">Términos y Condiciones</a> | 
                    <a href="#">Política de Privacidad</a> | 
                    <a href="#">Ayuda</a>
                </div>
            </div>

            <!-- Información de Contacto -->
            <div class="row">
                <div class="col-12">
                    <p class="mb-1">Tel: <a href="tel:+123456789">+1 234 567 89</a></p>
                    <p>Email: <a href="mailto:contacto@ejemplo.com">contacto@ejemplo.com</a></p>
                    <p>&copy; 2024 Campify. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
