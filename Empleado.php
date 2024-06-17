<?php

// Clase Empleado
class Empleado {
    private $nombre;
   private $apellido;
    private $salario;

    // Constructor
    public function __construct($nombre, $salario, $apellido) {
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->apellido = $apellido;
    }

    // Accediendo a las propiedades
    public function Nombre() {
        
        return $this->nombre;  // Devuelve el valor nombre
    }

    public function Apellido(){
        return $this->apellido;
    }

    public function Salario() {
        return $this->salario; // Devuelve el valor salario
    }

    // Método para calcular el salario neto con un descuento fijo del 10%
    public function calcularSalarioNeto() {
        return $this->salario * 0.90; // 10% de descuento
    }
}




// Paso parametros a Empleado
$empleado = new Empleado("Juan", 50000, "Canteros");



// Imprimo por pantalla los parametros de Empleado
echo "El empleado esta trabajando " . "<br>" . $empleado->Nombre() ." "  . $empleado->Apellido().  " tiene un salario neto de: $" . $empleado->calcularSalarioNeto() . "<br>";

?>