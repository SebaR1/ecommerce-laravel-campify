@include('header')

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
    <form action="#" method="POST">
        <div class="row ">
          <div class="col-md-6">
            <label for="nombre" class="form-label text-white">Nombre</label>
            <input type="text" class="form-control color-fondo tamanio" id="nombre" placeholder="Ingresa tu nombre">
          </div>
          <div class="col-md-6 ">
            <label for="apellido" class="form-label text-white">Apellido</label>
            <input type="text" class="form-control color-fondo tamanio" id="apellido" placeholder="Ingresa tu apellido">
          </div>
        </div>

        <div class="row ">
          <div class="col-md-6 ">
            <label for="telefono" class="form-label text-white">Teléfono</label>
            <input type="tel" class="form-control color-fondo tamanio" id="telefono" placeholder="Ingresa tu teléfono">
          </div>
          <div class="col-md-6 ">
            <label for="localidad" class="form-label text-white">Localidad</label>
            <input type="text" class="form-control color-fondo tamanio" id="localidad" placeholder="Ingresa tu localidad">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="codigo_postal" class="form-label text-white">Código Postal</label>
            <input type="text" class="form-control color-fondo tamanio" id="codigo_postal" placeholder="Ingresa tu código postal">
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label text-white">Email</label>
            <input type="email" class="form-control color-fondo tamanio" id="email" placeholder="Ingresa tu email">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="fecha_nacimiento" class="form-label text-white">Fecha de Nacimiento</label>
            <input type="date" class="form-control color-fondo tamanio" id="fecha_nacimiento">
          </div>
          <div class="col-md-6">
            <label for="puesto_interes" class="form-label text-white">Puesto de Interés</label>
            <select class="form-select color-fondo tamanio" id="puesto_interes">
              <option selected>Selecciona un puesto</option>
              <option value="1">Puesto 1</option>
              <option value="2">Puesto 2</option>
              <option value="3">Puesto 3</option>
            </select>
          </div>
        </div>


        <!-- Subir CV -->
        <div class="container mt-2 mb-3">
          <button class="btn cv">
              <label for="">Subir CV</label>
              <input type="file">
          </button>
        </div>




        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary boton-enviar">Enviar</button>
        </div>
      </form>

</div>
    
@include('footer')
