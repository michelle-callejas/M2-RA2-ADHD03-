<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevas Líneas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-success">

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
    

        <h1>Nuevas líneas</h1><br>
        <form action="agregar_linea" method="post">
                    <div class="mb-8">
                        <label for="txtNumero" class="form-label">Número de teléfono</label>
                        <input type="text" id="txtNumero" name="txtNumero" class="form-control">
                    </div>
               
                    <div class="mb-8">
                        <label for="txtFechaPago" class="form-label">Fecha de pago</label>
                        <input type="text" id="txtFechaPago" name="txtFechaPago" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtMesesAtraso" class="form-label">Meses de atraso</label>
                        <input type="text" id="txtMesesAtraso" name="txtMesesAtraso" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtPlanId" class="form-label">ID del plan</label>
                        <input type="text" id="txtPlanId" name="txtPlanId" class="form-control">
                    </div>
                    <div class="mb-8">
                        <label for="txtClienteId" class="form-label">ID del cliente</label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control">
                    </div><br><br>
                    
                        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="btn btn-dark
                        " value="Guardar Plan">
                 
                </form>
      </div>
    </div>



  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>