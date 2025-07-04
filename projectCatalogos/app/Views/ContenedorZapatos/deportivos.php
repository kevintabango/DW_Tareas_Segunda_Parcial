<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatos Deportivos</title>
    <!-- Enlace al archivo CSS de Bootstrap Offline -->
   <!--link de bostrap offline-->
   <link rel="stylesheet" href="<?= base_url('public/css/estilos.css') ?>">
<!--link de bostrap css-->
  <link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--link de bostrap js-->
  <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body>
 
    <!-- seccion hero de la pagina -->
    <section class="hero">
        <div class="hero-content">
            <!-- titulo de la pagina -->
            <h1><span class="">Catalogo Zapatos Deportivos Hombre</span></h1>
            <!-- subtitulo de la pagina -->
          
        </div>
    </section>
    <div class="container mt-4">
    <h2>Zapatos Deportivos </h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                 <!-- imagen del zapato deportivo -->
            <img src="<?= base_url('public/img/zapato1.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 1">
                <div class="card-body">
                         <!-- asignamos un nombre al productos-->
                    <h5 class="card-title">Tenis Blancos</h5>
                    <!-- asignamos un precio al producto -->
                    <p class="card-text">Precio: $45.99</p>
                    <!-- boton para agregar al carrito -->
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                               <!-- imagen del zapato deportivo -->
            <img src="<?= base_url('public/img/zapato2.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 1">
                <div class="card-body">
           <!-- asignamos un nombre al productos-->
                    <h5 class="card-title">Zapato Concur</h5>
                    <p class="card-text">Precio: $55.99</p>
                      <!-- boton para agregar al carrito -->
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                   <!-- imagen del zapato deportivo -->
            <img src="<?= base_url('public/img/zapato3.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 1">
                <div class="card-body">
                       <!-- asignamos un nombre al productos-->
                    <h5 class="card-title">Zapato Deportivo Z</h5>
                    <p class="card-text">Precio: $49.99</p>
                      <!-- boton para agregar al carrito -->
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <h2>Zapatos Deportivos</h2>
    <div class="row">
        <!-- Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                   <!-- imagen del zapato deportivo -->
            <img src="<?= base_url('public/img/zapato4.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 1">
                <div class="card-body">
                       <!-- asignamos un nombre al productos-->
                    <h5 class="card-title">Zapato Deportivo X</h5>
                    <p class="card-text">Precio: $45.99</p>
                      <!-- boton para agregar al carrito -->
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                   <!-- imagen del zapato deportivo -->
            <img src="<?= base_url('public/img/zapato5.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 1">
                <div class="card-body">
                       <!-- asignamos un nombre al productos-->
                    <h5 class="card-title">Zapato Deportivo Y</h5>
                    <p class="card-text">Precio: $55.99</p>
                      <!-- boton para agregar al carrito -->
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- imagen del zapato deportivo -->
            <img src="<?= base_url('public/img/zapato6.jpg') ?>" class="card-img-top" alt="Zapato Deportivo 1">
                <div class="card-body">
                <!-- asignamos un nombre al productos-->
                    <h5 class="card-title">Zapato Deportivo Z</h5>
                    <p class="card-text">Precio: $49.99</p>
                      <!-- boton para agregar al carrito -->
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!-- footer de la pagina -->
<section class="footer">
        <h2><span class="">Catalogo</span> 2025</h2>
        <!-- derechos reservados -->
        <p> todos los derechos reservados 2025.</p>
    </section>
</body>
</html>
