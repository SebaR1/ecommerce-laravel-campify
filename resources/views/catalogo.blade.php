@include('header')


<body>

    <div class="container-gral">
        <h1 class="subtitulo-catalogo">Productos </h1>
        <div >
            
            
        </div>
        <!-- fila de 4 items -->
        <div class="container_tarjetas">
            
            <!-- Tarjeta -->
    
            @foreach ($productos as $producto)
    
                
                    <div class="tarjeta-producto">
                        <img src="images/gtr.jpg" alt="Imagen del producto" class="img-fluid">
                        <div class="container_datos_tarjeta">
                            <h3>{{$producto->nombre_producto}}</h3>
                            <p>{{$producto->categoria->nombre_categoria}}</p>
                            <p>
                                ${{$producto->precio_producto}}
                            </p>
                            
                            <div class="container_btn_tarjeta">
                                <a href="#" class="btn_comprar">Comprar</a>
                            </div>
                        </div>
                        
                        
                    </div>
                    
              
     
            @endforeach
            
            
        </div>
    </div>
    
</body>



@include('footer')