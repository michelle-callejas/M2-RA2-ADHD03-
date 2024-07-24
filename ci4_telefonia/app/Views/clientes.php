<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-warning-subtle">

  <div class="container">



    <div class="jumbotron jumbotron-fluid animate__animated animate__wobble">
      <div class="container">
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
                  <a class="nav-link" href="<?php echo base_url('ver_clientes'); ?>">Clientes</a>
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
        </nav><br><br>
        <div class="mb-5">
          <a href="nuevo_cliente" class="btn btn-dark">Nuevo Cliente</a>
        </div>
        <h1>Clientes</h1><br>
        <table class="table table-border table-striped table-light">
          <thead>
            <tr>
              <th>Código Cliente</th>
              <th>Apellido</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Calle o Avenida</th>
              <th>No de casa</th>
              <th>Zona</th>
              <th>Opciones</th>

            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($datos as $cliente):
              ?>
              <tr>
                <td> <?php echo $cliente['cliente_id']; ?></td>
                <td> <?php echo $cliente['apellido']; ?></td>
                <td><?php echo $cliente['nombre']; ?></td>
                <td> <?php echo $cliente['correo_electronico']; ?></td>
                <td> <?php echo $cliente['calle_avenida']; ?></td>
                <td><?php echo $cliente['no_casa']; ?></td>
                <td> <?php echo $cliente['zona']; ?></td>
                <td>
                  <a href="<?= base_url('buscar_cliente/') . $cliente['cliente_id'] ?>" class="btn btn-success "> <i
                      class="bi bi-pencil-square">Actualizar</i></a>
                  <a href="<?= base_url('eliminar_cliente/').$cliente['cliente_id']?>" class="btn btn-danger ">
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