<?php
include_once('../clases/Ventas.php');

        $ventas = new Ventas();

        $ventas->asignarNombre($_POST['txtNombre']);
        $ventas->apellido = $_POST['txtApellido'];
        $ventas->telefono = $_POST['txtTelefono'];
        $ventas->direccion = $_POST['txtDireccion'];
        $ventas->codigo = $_POST['txtCodigo'];
        $ventas->nivelAcademico = $_POST['txtNivelAcademico'];
        $ventas->sueldoBase = $_POST['txtSueldoBase'];
        $ventas->bonificacion = 250;
        $ventas->tipoContratacion = $_POST['txtTipoContratacion'];
        $ventas->comisionVenta = $_POST['txtComisionVenta'];

        echo "<br>Sueldo líquido: " . $ventas->calcularSueldoLiquido();
        echo $ventas->verDatos();
  
?>
