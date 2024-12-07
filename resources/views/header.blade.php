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
    <link rel="stylesheet" href="css/footer-style.css">
    <link rel="stylesheet" href="css/header-style.css">
    <!-- Fuente de Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>

    <!-- /////////////////////////////////////////
        //               NAVBAR                 //
        /////////////////////////////////////////-->

        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container d-flex align-items-center justify-content-between p-0">
                <!-- Logo -->
                <a class="navbar-brand logo" href="#">
                    <img src="images/logo-recortado.JPG" alt="Logo" class="d-inline-block align-text-top" style="max-height: 50px;">
                </a>
                
                <!-- Contenido del navbar -->
                <div class="d-flex align-items-center gap-3 flex-grow-1 justify-content-end">
                    <!-- Barra de búsqueda visible solo en pantallas grandes -->
                    <div class="input-group d-none d-md-flex">
                        <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar">
                        <button class="btn btn-primary" type="button">Buscar</button>
                    </div>
                    <!-- Botón Iniciar Sesión -->
                    <button class="btn btn-primary" style="white-space: nowrap;">Iniciar Sesión</button>
                </div>
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
                        <ul class="container navbar-nav d-flex flex-column flex-md-row align-items-center justify-content-center">
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
        
