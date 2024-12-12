@include('header')

<!-- subtitulo -->
<div class="container d-flex justify-content-start align-items-center gap-1 subtitulo-catalogo">
    <h1>Categoria: </h1>
    <h2>(nombre de la categoria)</h2>
</div>

<!-- Vista de los productos -->
<div class="container d-flex flex-column justify-content-center align-items-center gap-3 mt-3 mb-5">
    <!-- fila de 4 items -->
    <div class="d-flex justify-content-center align-items-center gap-3">
        <!-- Tarjeta -->
        <a href="#" class="tarjeta-link">
            <div class="container d-flex flex-column justify-content-center align-items-center gap-3 border tarjeta-producto">
                <img src="images/gtr.jpg" alt="Imagen del producto" class="img-fluid">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <h3>Nombre del producto</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus odit aliquid vero 
                        tenetur ab natus repudiandae quod minus suscipit, ex reprehenderit, voluptas sit tempore. 
                        Voluptas nihil eaque fuga vel excepturi!
                    </p>
                </div>
            </div>
        </a>

        <!-- Tarjeta -->
        <a href="#" class="tarjeta-link">
            <div class="container d-flex flex-column justify-content-center align-items-center gap-3 border tarjeta-producto">
                <img src="images/gtr.jpg" alt="Imagen del producto" class="img-fluid">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <h3>Nombre del producto</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus odit aliquid vero 
                        tenetur ab natus repudiandae quod minus suscipit, ex reprehenderit, voluptas sit tempore. 
                        Voluptas nihil eaque fuga vel excepturi!
                    </p>
                </div>
            </div>
        </a>

        <!-- Tarjeta -->
        <a href="#" class="tarjeta-link">
            <div class="container d-flex flex-column justify-content-center align-items-center gap-3 border tarjeta-producto">
                <img src="images/gtr.jpg" alt="Imagen del producto" class="img-fluid">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <h3>Nombre del producto</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus odit aliquid vero 
                        tenetur ab natus repudiandae quod minus suscipit, ex reprehenderit, voluptas sit tempore. 
                        Voluptas nihil eaque fuga vel excepturi!
                    </p>
                </div>
            </div>
        </a>

        <!-- Tarjeta -->
        <a href="#" class="tarjeta-link">
            <div class="container d-flex flex-column justify-content-center align-items-center gap-3 border tarjeta-producto">
                <img src="images/gtr.jpg" alt="Imagen del producto" class="img-fluid">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <h3>Nombre del producto</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus odit aliquid vero 
                        tenetur ab natus repudiandae quod minus suscipit, ex reprehenderit, voluptas sit tempore. 
                        Voluptas nihil eaque fuga vel excepturi!
                    </p>
                </div>
            </div>
        </a>

    </div>
</div>


@include('footer')