<?php
// Clase Desarrollador
class Desarrollador extends Empleado {
    private $framework;

    // Constructor
    public function __construct($nombre, $salario, $framework) {
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->framework = $framework;
    }

    // Método para acceder al framework
    public function getFramework() {
        return $this->framework;
    }

    public function getNombre() {
        return $this->nombre;
    }

    // Método para calcular el salario neto (igual que en Empleado)
    public function calcularSalarioNeto() {
        return $this->salario * 0.90; // 10% de descuento
    }
}
