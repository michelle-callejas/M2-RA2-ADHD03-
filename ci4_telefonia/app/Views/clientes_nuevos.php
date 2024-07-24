<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clientes nuevos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
    

        <h1>Nuevos clientes</h1><br>
        <form action="agregar_cliente" method="post">
            <div class="mb-8">
                <label for="txtId" class="form-label">ID</label>
                <input type="text" id="txtId" class="form-control" name="txtId" placeholder="Ingrese ID">

                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" class="form-control" name="txtNombre" placeholder="Ingrese su nombre">

                <label for="txtApellido" class="form-label">Apellido</label>
                <input type="text" id="txtApellido" class="form-control" name="txtApellido" placeholder=" Ingrese su apellido">

                <label for="txtCorreo" class="form-label">Correo</label>
                <input type="text" id="txtCorreo" class="form-control" name="txtCorreo" placeholder="Ingrese su correo">

                <label for="txtCalleAvenida" class="form-label">Calle o Avenida</label>
                <input type="text" id="txtCalleAvenida" class="form-control" name="txtCalleAvenida" placeholder="Ingrese su calle o avenida">

                <label for="txtNoCasa" class="form-label">Número de casa</label>
                <input type="text" id="txtNoCasa" class="form-control" name="txtNoCasa" placeholder="Ingrese su número de casa">

                <label for="txtZona" class="form-label">Zona</label>
                <input type="text" id="txtZona" class="form-control" name="txtZona" placeholder="Ingrese su zona">
                <div class="mb-8"> <br><br><br>
                    <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar" class="btn btn-dark ">
                </div>
            </div>

        </form>
      </div>
    </div>



  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>