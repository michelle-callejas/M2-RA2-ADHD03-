<?php
    include_once('Empleado.php');
    class Cobros extends Empleado{
        public $comisionCobro=0;
        public $bonificacion=0;

        public function calcularSueldoLiquido(){
            $sueldoLiquido = parent::calcularSueldoLiquido() + $this->comisionCobro+ $this->bonificacion;
            return $sueldoLiquido;
        }
        public function verDatos(){
            return parent::verDatos()
                ."<br>bonificacion: ". $this->bonificacion
                ."<br>comisión por Cobro: ". $this->comisionCobro;
        }
    }
?>