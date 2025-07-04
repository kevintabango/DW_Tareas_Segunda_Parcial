<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catálogo de Productos</title>

    <!-- Enlace a Bootstrap desde CDN -->
    <link rel="stylesheet" href="<?= base_url('public/css/estilos.css') ?>">
<!--link de bostrap offline css-->
<link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
<!--link de bostrap offline js-->
<script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body>

  <!-- header de la pagina -->
  <header id="main-header" class="bg-primary text-white p-4">
    <div class="container">
        <!-- Título del catálogo -->
        <h1 class="display-4 text-center">Catálogo de Productos</h1>
    </div>
  </header>

  <!-- Sección de categorías -->
  <section class="container mt-5">
    <h2 class="text-center mb-4">Elige una Categoría</h2>
    <div class="row">

        <!-- Zapatos -->
        <div class="col-md-4 mb-4">
            <div class="card">
       <!-- imagen de la categoria -->
            <img src="<?= base_url('public/img/variedad.jpg') ?>" class="card-img-top" alt="Zapatos">
                <div class="card-body">
                    <!--nombre de la catergoria-->
                    <h5 class="card-title">Zapatos</h5>
                    <p class="card-text">Elige entre varias opciones de zapatos deportivos, casuales y más.</p>
                      <!--link a la categoria de zapatos-->
                    <a href="http://localhost/projectCatalogos//Zapatos/Z1" class="btn btn-primary">Ver Zapatos</a>
                </div>
            </div>
        </div>

        <!-- Vestidos -->
        <div class="col-md-4 mb-4">
            <div class="card">
                       <!-- imagen de la categoria -->
            <img src="<?= base_url('public/img/vestidos.jpg') ?>" class="card-img-top" alt="Vestidos">
                <div class="card-body">
                        <!--nombre de la catergoria-->
                    <h5 class="card-title">Vestidos</h5>
                    <p class="card-text">Elige entre vestidos de fiesta, formales y mucho más.</p>
                    <!--link a la categoria de vestidos-->
                    <a href="http://localhost/projectCatalogos//Vestidos/V1" class="btn btn-primary">Ver Vestidos</a>
                </div>
            </div>
        </div>

        <!-- Carteras -->
        <div class="col-md-4 mb-4">
            <div class="card">
                    <!-- imagen de la categoria -->
            <img src="<?= base_url('public/img/carteras.jpg') ?>" class="card-img-top" alt="Carteras">
                <div class="card-body">
                        <!--nombre de la catergoria-->
                    <h5 class="card-title">Carteras</h5>
                    <p class="card-text">Encuentra carteras para todos los estilos y ocasiones.</p>
                      <!--link a la categoria de carteras-->
                    <a href="http://localhost/projectCatalogos//Carteras/C1" class="btn btn-primary">Ver Carteras</a>
                </div>
            </div>
        </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center p-3 mt-5">
    <p>&copy; 2025 Tienda Online - Todos los derechos reservados.</p>
  </footer>



</body>
</html>
