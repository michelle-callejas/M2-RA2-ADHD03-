<?php
include_once('../clases/Cobros.php');

$cobros = new Cobros();

        $cobros->asignarNombre($_POST['txtNombre']);
        $cobros->apellido = $_POST['txtApellido'];
        $cobros->telefono = $_POST['txtTelefono'];
        $cobros->direccion = $_POST['txtDireccion'];
        $cobros->codigo = $_POST['txtCodigo'];
        $cobros->sueldoBase = $_POST['txtSueldo'];
        $cobros->nivelAcademico = $_POST['txtNivel'];
        $cobros->bonificacion = 250;
        $cobros->comisionCobros = $_POST['txtComision'];
        
        echo "<strong> <br> Sueldo Líquido: </strong>" . $cobros->calcularSueldoLiquido();
        echo "<strong> <br> Comisiones Cobros: </strong>" . $cobros->comisionCobros;
        

?>
