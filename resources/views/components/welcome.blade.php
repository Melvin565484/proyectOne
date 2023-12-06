<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="bg-white ">
        <div class="row">
            <div class="col-md-6">
                <!-- Contenido a la izquierda (carrusel) -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <!-- código del carruse-->
                    <div class="bg-white-500 p-4\">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <div style="display: flex; justify-content: center; align-items: center; height: 50vh;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-width: 700px; max-height: 700px; margin: 20px;">

    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/b3.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
        <h5>Descubre</h5>
        <p></p>
      </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/R.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
        <h5 style="color: #16242c;"></h5>
        <p style="color: #16242c;"></p>
      </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/epecial ofert.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
        <h5 style="color: #16242c;"></h5>
        <p style="color: #16242c;"></p>
      </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    </div>
    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Contenido a la derecha (etiquetas u otros componentes) -->
                <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Nuevo
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Accesorios
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Movil
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
  <div class="card">
  <h5 class="card-header"></h5>
  <div class="card-body">
    <h5 class="card-title">Ofertas especiales</h5>
    <p class="card-text">Descubre los nuevos productos disponibles para ti.</p>
    <a href="#" class="btn btn-primary">catalogo</a>
  </div>
</div>
</ul>
                <!-- Puedes agregar aquí tus etiquetas o cualquier otro contenido -->
            </div>
        </div>
    </div>

    <div class="bg-white ">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl  sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
        <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Bienvenido<br></h2>
            <p class="mt-6 text-lg leading-8 text-gray-300">Una forma de administrar tus productos de manera eficiente y efectiva. Nuestra plataforma está diseñada para simplificar tus procesos de gestión de productos, desde la adición y actualización hasta el seguimiento y análisis de tus inventarios. Ya sea que dirijas un pequeño negocio o una empresa en crecimiento, este proyecto está aquí para respaldarte en todas las etapas.</p>
            <a href="{{ route('productos.index') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white ">Acerca del proyecto</a>
            <a href="{{ route('productos.index') }}" class="text-sm font-semibold leading-6 text-white">Leer mas... <span aria-hidden="true">→</span></a>
            
        </div>
        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start col-md-6">
        <img class="imagen-saltarina" src="/images/2.svg" style="width: 200px; height: 200px;" >
        </div>
    </div> 
    </div>

    </div>
    </div>

</body>
</html>



    



    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</div>



