<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevos planes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-info">

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
    

        <h1>Nuevos planes</h1><br>
        <form action="agregar_plan" method="post">
                    <div class="mb-8">
                        <label for="txtId" class="form-label">Código:</label>
                        <input type="text" id="txtId" name="txtId" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtNombre" class="form-label">Nombre:</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtPagoMensual" class="form-label">Pago Mensual:</label>
                        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtCantidadMinutos" class="form-label">Cantidad de minutos:</label>
                        <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes:</label>
                        <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control">
                    </div>
                    <div class="mb-5">
                        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control" value="Guardar Plan">
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