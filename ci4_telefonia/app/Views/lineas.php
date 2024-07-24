<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Líneas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-warning-subtle">

  <div class="container">



    <div class="jumbotron jumbotron-fluid animate__animated animate__wobble">
      <div class="container">
        <h1>ADHD 02 parte 2</h1> <br><br>
        <nav class="navbar navbar-expand-lg bg-body-tertiary border  border-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Telefonía</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('ver_clientes'); ?>
                  ">Clientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('ver_lineas'); ?>">Líneas telefónicas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('ver_planes'); ?>">Planes</a>
                </li>
              </ul>
            </div>
          </div>
        </nav> <br><br>
        <div class="mb-5">
          <a href="nueva_linea" class="btn btn-dark">Nueva Linea</a>
        </div>

        <table class="table table-border table-striped table-light">
          <thead>
            <tr>
              <th>No de teléfono</th>
              <th>Fecha de pago</th>
              <th>Meses de atraso</th>
              <th>Id de plan</th>
              <th>ID de cliente</th>
              <th>Opciones</th>

            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($datos as $linea):
              ?>
              <tr>
                <td> <?php echo $linea['no_telefono']; ?></td>
                <td><?php echo $linea['fecha_pago']; ?></td>
                <td> <?php echo $linea['meses_atraso']; ?></td>
                <td> <?php echo $linea['plan_id']; ?></td>
                <td> <?php echo $linea['cliente_id']; ?></td>
                <td>
                  <a href="<?= base_url('buscar_linea/') . $linea['no_telefono'] ?>" class="btn btn-success "> <i
                      class="bi bi-pencil-square">Actualizar</i></a>
                  <a href="<?= base_url('eliminar_linea/') . $linea['no_telefono'] ?>" class="btn btn-danger ">
                    <i class="bi bi-trash">Eliminar</i></a>
                </td>
              </tr>
              <?php
            endforeach
            ?>
          </tbody>
        </table>

      </div>
    </div>



  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>