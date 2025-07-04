<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteras Cuero</title>
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
            <h1><span class="">Catalogo carteras </span></h1>
            <!-- subtitulo de la pagina -->
          
        </div>
    </section>
    <div class="container mt-4">
    <h2>Carteras Cuero </h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
            <img src="<?= base_url('public/img/imgCarteras/cartera1.jpg') ?>" class="card-img-top" alt="cartera-1">
                <div class="card-body">
                    <h5 class="card-title">Cartera Cuero | Haku </h5>
                    <p class="card-text">Precio: $45.99</p>
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
            <img src="<?= base_url('public/img/imgCarteras/cartera2.jpg') ?>" class="card-img-top" alt="cartera-2">
                <div class="card-body">
                    <h5 class="card-title">Cartera Paula 100% cuero legitimo</h5>
                    <p class="card-text">Precio: $55.99</p>
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
            <img src="<?= base_url('public/img/imgCarteras/cartera3.jpg') ?>" class="card-img-top" alt="cartera-3">
                <div class="card-body">
                    <h5 class="card-title">Cartera Mujer | El boyero</h5>
                    <p class="card-text">Precio: $49.99</p>
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
