<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="../ts/main4.js"></script>
</head>

<body class="container">
    <header>
    <nav>
            <ul>
                <li class="animate__animated animate__bounceIn  animate__repeat-3 animate__slower" id="inicio">PHP</li>
               <li class="animate__animated animate__bounceIn animate__repeat-3 animate__slower"><a href="../paginas/index.html">Inicio</a></li>
               <li class="animate__animated animate__bounceIn animate__repeat-3 animate__slower"><a href="../paginas/frm_persona.php">Persona</a></li>
               <li class="animate__animated animate__bounceIn animate__repeat-3 animate__slower"><a href="../paginas/frm_empleado.php">Empleado</a></li>
               <li class="animate__animated animate__bounceIn animate__repeat-3 animate__slower"><a href="../paginas/frm_cliente.php">Cliente</a></li>
               <li class="animate__animated animate__bounceIn animate__repeat-3 animate__slower"><a href="../paginas/frm_administracion.php">Administración</a></li>
               <li class="animate__animated animate__bounceIn animate__repeat-3 animate__slower"><a href="../paginas/frm_ventas.php">Ventas</a></li>
               <li class="animate__animated animate__bounceIn animate__repeat-3 animate__slower"><a href="../paginas/frm_cobros.php">Cobros</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Ventas</h1>
        <div class="contenido">
            <form action="../objetos/objeto_ventas.php" method="post">

                <label for="txtNombre" class="form-label">Nombre</label> <br>
                <input type="text" id="txtNombre" name="txtNombre" placeholder="Ingrese su nombre" class="text">
                
                <label for="txtApellido" class="form-label">Apellido</label> <br>
                <input type="text" id="txtApellido" name="txtApellido" placeholder="Ingrese su apellido" class="text"> 
                
                <label for="txtTelefono" class="form-label">Telefono</label> <br>
                <input type="number" id="txtTelefono" name="txtTelefono" placeholder="Ingrese su Telefono" class="text">
                
                <label for="txtDireccion" class="form-label">Direccion</label> <br>
                <input type="text" id="txtDireccion" name="txtDireccion" placeholder="Ingrese su Direccion" class="text">
                
                <label for="txtCodigo" class="form-label">Código</label> <br>
                <input type="number" id="txtCodigo" name="txtCodigo" placeholder="Ingrese su código" class="text">
                
                <label for="txtNivelAcademico" class="form-label">Nivel Académico</label> <br>
                <input type="text" id="txtNivelAcademico" name="txtNivelAcademico" placeholder="Ingrese su Nivel Académico" class="text">
                
                <label for="txtSueldoBase" class="form-label">Sueldo Base</label> <br>
                <input type="number" id="txtSueldoBase" name="txtSueldoBase" placeholder="Ingrese su Sueldo Base" class="text">
                
                <label for="txtBonificacion" class="form-label">Bonificación</label> <br>
                <input type="number" id="txtBonificacion" name="txtBonificacion" class="text" placeholder="250" readonly>
                
                <label for="txtTipoContratacion" class="form-label">Tipo de contratación</label> <br>
                <input type="text" id="txtTipoContratacion" name="txtTipoContratacion" placeholder="Ingrese su Tipo de contratación" class="text">
                
                <label for="txtComisionVenta" class="form-label">Comision por Venta</label> <br>
                <input type="number" id="txtComisionVenta" name="txtComisionVenta" placeholder="Ingrese su Comision por Venta" class="text">

                <button class="boton" id="ordenarNumeros" type="submit" value="Enviar" name="btnEnviar">Enviar</button>
            </form>
        </div>
        <div id="cuadro">
            <p id="resultado"></p>
        </div>
    </main>
</body>

</html>
