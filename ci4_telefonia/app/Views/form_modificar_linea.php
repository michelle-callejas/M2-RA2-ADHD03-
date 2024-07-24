<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar línea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success p-2 text-white bg-opacity-75">
    <div class="container">
        <h1>Modificar datos de la línea</h1>
        <br><br>
        <form action="<?= base_url('modificar_linea') ?>" method="post">
            <div class="mb-3">
                <br><label for="txtNumero" class="form-label">Número de teléfono</label>
                <br><input type="number" class="form-control" id="txtNumero" name="txtNumero" value="<?= $datos['no_telefono']; ?>"
                    readonly>
            </div>
            <div class="mb-3">
                <br><label for="txtFechaPago" class="form-label">Fecha de pago</label>
                <br><input type="text" class="form-control" id="txtFechaPago" name="txtFechaPago"
                    value="<?= $datos['fecha_pago']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtMesesAtraso" class="form-label">Meses de atraso</label>
                <br><input type="number" class="form-control" id="txtMesesAtraso" name="txtMesesAtraso"
                    value="<?= $datos['meses_atraso']; ?>">
            </div>
            <div class="mb-3">
                <br><label for="txtPlanId" class="form-label">Código del plan</label>
                <br><input type="number" class="form-control" id="txtPlanId" name="txtPlanId"
                    value="<?= $datos['plan_id']; ?>">
            </div>

            <div class="mb-3">
                <br><label for="txtClienteId" class="form-label">Código del cliente</label>
                <br><input type="number" class="form-control" id="txtClienteId" name="txtClienteId"
                    value="<?= $datos['cliente_id']; ?>">
            </div>

            <input type="submit" id="btnEnviar" name="btnEnviar" class="bbtn btn-secondary " value="Enviar">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>