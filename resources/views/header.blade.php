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
    <link rel="stylesheet" href="css/sobreNosotros.css">
    <!-- Fuente de Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>

    <!-- /////////////////////////////////////////
        //               NAVBAR                 //
        /////////////////////////////////////////-->

        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul id="linksAdicionales" class="navbar-nav me-auto mb-2 mb-lg-0 order-md-1 order 1">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mx-auto order-2 order-md-1 order-3 order-md-2" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 order-2 order-md-3 d-flex">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Iniciar Sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Crear Cuenta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        

        <!--

        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="linksAdicionales" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    
                    </li>
                </ul>
                <form class="d-flex mx-auto order-2 order-md-1" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 order-1 order-md-2 d-flex">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Iniciar Sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Crear Cuenta</a>
                    </li>
                </ul>
                
                
              </div>
            </div>
          </nav>

        -->

        <!--

        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container d-flex align-items-center justify-content-between p-0">
                // Logo 
                <a class="navbar-brand align-items-center justify-content-center d-flex" href="{{ route('/') }}">
                    <img src="images/logosinbg.png" alt="Logo" class=" logo">
                </a>
                
                // Contenido del navbar
                <div class="d-flex align-items-center gap-3 flex-grow-1 justify-content-end">
                    // Barra de búsqueda visible solo en pantallas grandes
                    <div class="input-group d-none d-md-flex">
                        <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar">
                        <button class="btn btn-primary" type="button">Buscar</button>
                    </div>
                    //Botón Iniciar Sesión
                    <button class="btn btn-primary" style="white-space: nowrap;">Iniciar Sesión</button>
                </div>
            </div>

            
        </nav>
        -->
        

            <!-- /////////////////////////////////////////
        //    ARTUCLOS CON MENU DESPLEGABLE     //
        /////////////////////////////////////////-->
    
        <div id="menuArticulos" class="d-flex flex-column align-items-center bg-nav2 nav-sm">
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                    <!-- Botón de colapso para mobile -->
                    <button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#menuArticulos" aria-controls="menuArticulos" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <!-- Contenido del menú -->
                    <div class="collapse navbar-collapse" >
                        <ul class="navbar-nav d-flex align-items-center justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="">OFERTAS</a></li>
                            <li class="nav-item dropdown bg-nav2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Categorias
                                </a>
                                <ul class="dropdown-menu bg-nav2">
                                  <li><a class="dropdown-item" href="#">REGALOS EMPRESARIALES</a></li>
                                  <li><a class="dropdown-item" href="#">CAMPING</a></li>
                                  <li><a class="dropdown-item" href="#">JARDIN</a></li>
                                  <li><a class="dropdown-item" href="#">ACCESORIOS PARA BICICLETAS</a></li>
                                  <li><a class="dropdown-item" href="#">ELECTROHOGAR</a></li>
                                  <li><a class="dropdown-item" href="#">ACCESORIOS PARA VEHICULOS</a></li>
                                  <li><a class="dropdown-item" href="#">HERRAMIENTAS</a></li>
                                  <li><a class="dropdown-item" href="#">MATAFUEGOS</a></li>
                                </ul>
                              </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('sobreNosotros') }}">Sobre nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Trabaja con nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Catalogo</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        
