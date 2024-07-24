<?php
    include_once('../clases/Empleado.php');
    $emple = new Empleado();
    //atributos de la clase Empleado    
    $emple->codigo=$_POST['txtCodigo'];
    $emple->nivelAcademico=$_POST['txtNivel'];
    $emple->sueldoBase=$_POST['txtSueldo'];

    //atributos que hereda de la clase Persona
    $emple->apellido = $_POST['txtApellido'];
    $emple->nombre=$_POST['txtNombre'];
    $emple->telefono= $_POST['txtTelefono'];
    $emple->direccion=$_POST['txtDireccion'];

    echo "Sueldo liquido: ". $emple->calcularSueldoLiquido();
    echo $emple->verDatos();
    
?>