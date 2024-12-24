<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Añadir Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS  -->
    
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/footer-style.css') }}>
    <link rel="stylesheet" href={{ asset('css/header-style.css') }}>
    <link rel="stylesheet" href={{ asset('css/sobreNosotros.css') }}>
    <link rel="stylesheet" href={{ asset('css/trabajaConNosotros.css') }}>
    <link rel="stylesheet" href={{ asset('css/inicioSesion.css') }}>
    <link rel="stylesheet" href={{ asset('css/producto/vistaProducto.css') }}>
    <link rel="stylesheet" href={{ asset('css/catalogo2.css') }}>
   

    
    <!-- Fuente de Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


</head>
<body>

    <!-- /////////////////////////////////////////
        //               NAVBAR                 //
        /////////////////////////////////////////-->

        <nav class="navbar navbar-expand-md bg-body-tertiary p-ajuste-navbar">
            <div class="container-fluid">
                <a class="navbar-brand p-ajuste-logo" href="{{route('/')}}">
                    <img src={{ asset('images/logosinbg.png') }} alt="Logo" class="m-ajuste-logo logo">
                </a>
                <button class="navbar-toggler m-ajuste-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars colorhamburger"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul id="linksAdicionales" class="navbar-nav me-auto mb-2 mb-lg-0 border-top-ajuste">
                        <li class="nav-item ajuste-item-nav-md">
                            <a class="nav-link" aria-current="page" href="{{ route('/') }}">Home</a>
                        </li>
                        <li class="nav-item ajuste-item-nav-md">
                            <a class="nav-link" href="{{ route('sobreNosotros') }}">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item ajuste-item-nav-md">
                            <a class="nav-link" href="{{ route('trabajaConNosotros') }}">Trabaja con nosotros</a>
                        </li>
                        <li class="nav-item ajuste-item-nav-md">
                            <a class="nav-link" href="#">Catalogo</a>
                        </li>
                        <li class="nav-item dropdown ajuste-item-nav-md">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Regalos empresariales</a></li>
                                <li><a class="dropdown-item" href="#">Camping</a></li>
                                <li><a class="dropdown-item" href="#">Jardin</a></li>
                                <li><a class="dropdown-item" href="#">Accesorios para bicicletas</a></li>
                                <li><a class="dropdown-item" href="#">Electrohogar</a></li>
                                <li><a class="dropdown-item" href="#">Accesorios para vehiculos</a></li>
                                <li><a class="dropdown-item" href="#">Herramientas</a></li>
                                <li><a class="dropdown-item" href="#">Matafuegos</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav mb-lg-0 order-md-3 d-flex border-top-ajuste m-ajuste-sesion">
                    @auth
                            <li class="nav-item ajuste-item-nav-md">
                                <a class="nav-link active colorLetras" href=" {{ route('/') }} ">Carrito</a>
                            </li>
                            <li class="nav-item ajuste-item-nav-md">
                                    <a class="nav-link active colorLetras" href=" {{ route('meGustas') }} ">Me gustas</a>
                            </li>
                            <li>
                                <form action="/logout" method="POST" class="nav-item ajuste-item-nav-md">
                                    @csrf
                                    <button class="nav-link active colorLetras" type="submit">Salir</button>
                                </form>
                            </li>
                    @else
                            <li class="nav-item ajuste-item-nav-md">
                                <a class="nav-link active colorLetras" href=" {{ route('crearCuenta') }} ">Crear Cuenta</a>
                            </li>
                            <li class="nav-item ajuste-item-nav-md">
                                <a class="nav-link active colorLetras" href=" {{ route('inicioSesion') }} ">Iniciar Sesion</a>
                            </li>
                    @endauth
                    </ul>
                    <form class="d-flex justify-content-center align-items-center mx-auto m-ajuste-form correccion w-ajuste" role="search">
                        <input class="form-control me-2 correccion" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit" style="border: 2px solid #a6c4f7; background-color: white; color: #a6c4f7;">
                            <i class="fa-solid fa-magnifying-glass" style="color: #a6c4f7;"></i>
                        </button>                   
                    </form>             
                </div>
            </div>
        </nav>

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
                            <li class="nav-item"><a class="nav-link" href="{{ route('trabajaConNosotros') }}">Trabaja con nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Catalogo</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        
