<?php

// Clase Empleado
 abstract class Empleado implements IEmpleado {
    private $nombre;
   private $apellido;
    private $salario;

    // Constructor
    public function __construct($nombre, $apellido, $salario) {
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
    public function SalarioNeto() {
        return $this->salario * 0.90; // 10% de descuento
    }
abstract public function PuestoTrabajo();
abstract public function tarea();
abstract public function calcularSalarioNeto();

}




// Paso parametros a Empleado
//$empleado = new Empleado("Juan", 50000, "Canteros");



// Imprimo por pantalla los parametros de Empleado
//echo "El empleado esta trabajando " . "<br>" . $empleado->Nombre() ." "  . $empleado->Apellido().  " tiene un salario neto de: $" . $empleado->calcularSalarioNeto() . "<br>";

?>