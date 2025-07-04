<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!-- Título del documento -->
  <title>Tabla de Multiplicar</title>

  <!-- Link de archivo Bootstrap CSS -->
  <link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Link de archivo Bootstrap JS -->
  <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body>

  <!-- Usamos una fila (row) para que las tarjetas estén una al lado de la otra -->
  <div class="row">
    <!-- Columna para la tabla de multiplicar -->
    <div class="col-md-6">
      <div class="card border-success">
        <h3 class="mb-3">Tabla de Multiplicar</h3>
        <input type="number" id="numero" class="form-control mb-3 text-center" placeholder="Escribe un número">
        <button id="btnGenerar" class="btn btn-outline-success mb-3">Generar Tabla</button>
        <div id="resultado" class="text-start bg-light p-3 rounded"></div>
      </div>
    </div>

    <!-- Columna para las potencias -->
    <div class="col-md-6">
      <div class="card border-primary">
        <h3 class="mb-3">Potencias</h3>
        <input type="number" id="base" class="form-control mb-3 text-center" placeholder="Escribe un número">
        <input type="number" id="exponente" class="form-control mb-3 text-center" placeholder="Escribe un número">
        <button id="btnPotencia" class="btn btn-outline-primary mb-3">Calcular</button>
        <div id="resultadoPotencia" class="text-start bg-light p-3 rounded"></div>
      </div>
    </div>
  </div>

</body>

<!-- Link a las funciones JS -->
<script src="<?= base_url('public/js/funciones.js') ?>"></script>

</html>
