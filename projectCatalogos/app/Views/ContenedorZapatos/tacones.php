<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatos Deportivos</title>
    <!-- Enlace al archivo CSS de Bootstrap Offline -->
   <!--link de bostrap offline-->
   <link rel="stylesheet" href="<?= base_url('public/css/estilos.css') ?>">

  <link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
  <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body>
 
    <!-- seccion hero de la pagina -->
    <section class="hero">
        <div class="hero-content">
            <!-- titulo de la pagina -->
            <h1><span class="">Catalogo  Tacones Mujer</span></h1>
            <!-- subtitulo de la pagina -->
    
        </div>
    </section>
    <div class="container mt-4">
    <h2>Tacones</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- imagen del zapato tacones -->
            <img src="<?= base_url('public/img/imgTacones/tacon1.jpg') ?>" class="card-img-top" alt="Zapato Tacones 1">
                <div class="card-body">
                    <h5 class="card-title">Tacon Bajo de Fiesta</h5>
                    <p class="card-text">Precio: $45.99</p>
                        <!-- boton para agregar al carrito -->
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- imagen del zapato tacones -->
            <img src="<?= base_url('public/img/imgTacones/tacon2.jpg') ?>" class="card-img-top" alt="Zapato Tacones 1">
                <div class="card-body">
                    <!-- asignamos un nombre al productos-->
                    <h5 class="card-title">Tacones Rosa</h5>
                    <p class="card-text">Precio: $55.99</p>
                        <!-- boton para agregar al carrito -->
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- imagen del zapato tacones -->
            <img src="<?= base_url('public/img/imgTacones/tacon3.jpg') ?>" class="card-img-top" alt="Zapato Tacones 1">
                <div class="card-body">
                         <!-- asignamos un nombre al productos-->
                    <h5 class="card-title">Tacon Alto </h5>
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
        <p> todos los derechos  2025.</p>
    </section>
</body>
</html>
