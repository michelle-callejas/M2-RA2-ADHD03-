<?php
$valor1=$_GET['txtValor1'];
$valor2=$_GET['txtValor2'];
echo "<br> Valor 1:" . $valor1;
echo "<br> Valor 2:" . $valor2;
echo "Calculadora básica";
echo "<br> Valor 1:" . $valor1;
echo "<br> Valor 2:" . $valor2;

if (isset($_GET['btnSuma'])){
    $operacion=$valor1+$valor2;
    echo "<br> la suma es:".$operacion;
}

if (isset($_GET['btnMenos'])){
    $operacion=$valor1-$valor2;
    echo "<br> la resta es:".$operacion;

}


if (isset($_GET['btnMulti'])){
    $operacion=$valor1*$valor2;
    echo "<br> la multiplicacion es:".$operacion;
}

if (isset($_GET['btnDivi'])){
    $operacion=$valor1*$valor2;
    echo "<br> la división es:".$operacion;
}
?>