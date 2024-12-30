@include ('header');

    <body>

        <div class="container">
            <div class="container-form-factura">
                <form class="form_agregar_producto" action="{{ route('enviar.formulario') }}" method="POST" enctype="multipart/form-data">
    
                    @csrf
                    <div class="mb-3">
                        
                      <label for="nombre_postulado" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nombre_postulado" name="nombre_postulado" value="{{old('nombre_postulado')}}">
                        @error('nombre_postulado')
                        <div class="error_form">{{$message}}</div>
                        @enderror
                    </div>
              
                    <div class="mb-3">
              
                        <label for="apellido_postulado" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido_postulado" name="apellido_postulado" value="{{old('apellido_postulado')}}">
                       
                        @error('apellido_postulado')
                        <div class="error_form">{{$message}}</div>
                        @enderror
                    </div>
              
                    <div class="mb-3">
              
                        <label for="email_postulado" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email_postulado" name="email_postulado" value="{{old('email_postulado')}}">
                        @error('email_postulado')
                        <div class="error_form">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
              
                        <label for="telefono_postulado" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="telefono_postulado" name="telefono_postulado" value="{{old('telefono_postulado')}}">
                        @error('telefono_postulado')
                        <div class="error_form">{{$message}}</div>
                        @enderror
                        
                    </div>
              
                      
                
                    
                    
                  </form>
    
                
            </div>
    
            <div class="container-tabla-carrito">
                
                    <div class="row border bg-light pt-2 pb-2">
                        <div class="col-3 px-2 text-center">Producto</div>
                        <div class="col-2 px-2 text-center">Cantidad</div>
                        <div class="col-2 px-2 text-center">Precio</div>
                        <div class="col-2 px-2 text-center">Total</div> 
                        <div class="col-3 px-2 text-center">Acciones</div>
                    </div>
                    @foreach($productosEnCarrito as $item)
                        <div class="row border align-items-center pt-2 pb-2" id="producto-{{ $item['producto']->id_producto }}">
                            <div class="col-3 text-center">{{ $item['producto']->nombre_producto }}</div>
                            <div class="col-2 text-center d-flex justify-content-center align-items-center gap-2">
                                <p style="width:10px; margin:0px;" class="">{{ $item['cantidad'] }}</p>
                                <button type="button" class="btn_disminuir" data-producto-id="{{ $item['producto']->id_producto }}">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </button> 
                            </div>
                            <div class="col-2 text-center precio-producto">${{ $item['producto']->precio_producto }}</div>
                            <div class="col-2 text-center total-producto">${{ $item['producto']->precio_producto * $item['cantidad'] }}</div>
                            <div class="col-3 text-center  d-flex justify-content-center align-items-center">
                                <button 
                                    type="button" 
                                    class="btn_meGusta btn-danger btn_eliminar  d-flex justify-content-center align-items-center" 
                                    data-producto-id="{{ $item['producto']->id_producto }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                            
                        </div>
                        
                    @endforeach

                    <div class="row border bg-light pt-2 pb-2" id="fila-total">
                        <div class="col-9 text-right font-weight-bold">Total General:</div>
                        <div class="col-2 text-center" id="total-general">$0</div>
                        <div class="col-1"></div>
                    </div>

                    <div class="container-btn-finalizar-compra">
                        <button type="submit" class="btn btn-primary btn_form boton-enviar">Finalizar compra</button>
                    </div>
                    
            </div>
            
            
        </div>
        



    </body>

@include('footer');