<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success p-2 text-white bg-opacity-75">
    <div class="container">
        <h1>Modificar datos del plan</h1>
        <br><br>
        <form action="<?= base_url('modificar_plan') ?>" method="post">
            <div class="mb-3">
                <br><label for="txtPlanId" class="form-label">Código del plan</label>
                <br><input type="number" class="form-control" id="txtPlanId" name="txtPlanId" value="<?= $datos['plan_id']; ?>"
                    readonly>
            </div>
            <div class="mb-3">
                <br><label for="txtNombre" class="form-label">Nombre del plan</label>
                <br><input type="text" class="form-control" id="txtNombre" name="txtNombre"
                    value="<?= $datos['nombre']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtPagoMensual" class="form-label">Pago mensual</label>
                <br><input type="number" class="form-control" id="txtPagoMensual" name="txtPagoMensual"
                    value="<?= $datos['pago_mensual']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtCantidadMinutos" class="form-label">Cantidad de minutos</label>
                <br><input type="number" class="form-control" id="txtCantidadMinutos" name="txtCantidadMinutos"
                    value="<?= $datos['cantidad_minutos']; ?>">
            </div>

            <div class="mb-3">
                <br><label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes</label>
                <br><input type="number" class="form-control" id="txtCantidadMensajes" name="txtCantidadMensajes"
                    value="<?= $datos['cantidad_mensajes']; ?>">
            </div>

            <input type="submit" id="btnEnviar" name="btnEnviar" class="bbtn btn-secondary btn-outline-primary" value="Enviar">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>