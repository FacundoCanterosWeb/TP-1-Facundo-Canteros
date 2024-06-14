<?php
// Clase Diseniador
class Diseniador extends Empleado {
    private $herramientas;

    // Constructor
    public function __construct($nombre, $salario, $herramientas) {
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->herramientas = $herramientas;
    }

    // Método para acceder a las herramientas del diseniador
    public function getHerramientas() {
        return $this->herramientas;
    }

    public function getNombre() {
        return $this->nombre;
    }


    // Método para calcular el salario neto con un descuento adicional del 5%
    public function calcularSalarioNeto() {
        $salarioConDescuentoBase = $this->salario * 0.90; // 10% de descuento inicial
        return $salarioConDescuentoBase * 0.95; // 5% de descuento adicional
    }
}