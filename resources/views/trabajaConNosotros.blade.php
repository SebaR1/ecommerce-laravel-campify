@include('header')

@if (session('success'))
  <div class="container d-flex justify-content-center text-center"></div>
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  </div>
@endif

@if (session('error'))
  <div class="container d-flex justify-content-center text-center"></div>
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  </div>
@endif

<!-- Banner gigante -->
<div class = 'trabajaConNosotros mb-5'>
    <div class="filtroBorroso d-flex justify-content-evenly align-items-center">
            <div class="vectorIzq position-relative me-5 d-flex justify-content-center align-items-center">
                <img class="vecTam opacity-75 ms-2 position-absolute" src="images/sobreNosotros/vector1.png" alt="vector" />
                <img class="vecTam opacity-50 me-4 position-absolute" src="images/sobreNosotros/vector1.png" alt="vector" />    
            </div>
            <div class="vectorDer position-relative ms-5 d-flex justify-content-center align-items-center">
                <img class="vecTam opacity-75 ms-2 position-absolute" src="images/sobreNosotros/vector2.png" alt="vector" />
                <img class="vecTam opacity-50 me-4 position-absolute" src="images/sobreNosotros/vector2.png" alt="vector" />    
            </div>
       
        <h1 class="text-white fs-1 position-absolute text-shadow">Trabaja con Nosotros</h1> 
    </div>
</div>

<!-- Texto -->
<div class="container d-flex justify-content-center text-center mt-5">
    <p class="lead text-muted" style="font-family: 'Arial', sans-serif;">
        En Campify somos más que una empresa, somos una familia. Desde nuestros inicios, hace más de 10 años,
        hemos crecido y evolucionado gracias a la dedicación y pasión de nuestro equipo.
        <span class="font-weight-bold negrita">Dejanos tu CV y descubrí cómo podés contribuir al éxito de Campify, ¡Te esperamos!</span>
    </p>
</div>


<!-- FORM -->
<div class="container mt-5 mb-5">
    <form action="{{ route('enviar.formulario') }}" method="POST">
      @csrf
        <div class="row ">
          <div class="col-md-6">
            <label for="nombre" class="form-label text-white">Nombre</label>
            <input type="text" class="form-control color-fondo tamanio" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
          </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary boton-enviar">Enviar</button>
        </div>
    </form>
</div>
    
@include('footer')
