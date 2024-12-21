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

                        <img src="{{ asset('storage/' . $producto->imagen_producto) }}" alt="Imagen del producto">

                        <!--     <img src="images/gtr.jpg" alt="Imagen del producto" class="img-fluid">    -->     <!-- Esto esta de momento para visualizar la foto -->
                        <div class="container_datos_tarjeta">
                            <h3>{{$producto->nombre_producto}}</h3>
                            <p>{{$producto->categoria->nombre_categoria}}</p>
                            <p>{{$producto->descripcion_producto}}</p>
                            <p>
                                ${{$producto->precio_producto}}
                            </p>
                            <div class="d-flex justify-content-evenly align-items-center">
                                <div class="botonMeGusta">
                                    <form method="POST" action="{{ route('me-gusta.toggle', ['producto_id' => $producto->id_producto]) }}">
                                        @csrf
                                        <button type="submit" class="btn_meGusta d-flex justify-content-center align-items-center {{ $producto->meGustas->contains('usuario_id', auth()->id()) ? 'active' : '' }}">
                                            <i class="fa-solid fa-heart "></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="container_btn_tarjeta">
                                    <a href="#" class="btn_comprar">Comprar</a>
                                </div>
                                <div class="botonMeGusta">
                                        <button type="submit" class="btn_meGusta d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                </div>
                            </div> 
                        </div>
                        
                        
                    </div>
                    
              
     
            @endforeach
            
            
        </div>
    </div>
    
</body>



@include('footer')