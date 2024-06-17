<?php
// Clase Desarrollador
class Desarrollador extends Empleado {
    private $framework;
  

    // Constructor
    public function __construct($nombre, $apellido, $salario, $framework) {
        parent::__construct($nombre,$apellido,$salario); //Accedo a las propiedades de la clase padre Empleado
        $this->salario = $salario;
        $this->framework = $framework;
        $this->apellido = $apellido;
    }

    // Método para acceder al framework
    public function Framework() {
        return " Esta trabajando con el framework " . $this->framework;
    }


    // Método para calcular el salario neto (igual que en Empleado)
    public function calcularSalarioNeto() {
        return " El salario neto es $:" . $this->salario * 0.90; // 10% de descuento
    }

   
}
//Paso los parametros a Desarrollador
$desarrollador = new Desarrollador("Pedro","Nicolas", 60000, "Laravel");
//Imprimo por pantalla los parametros de Desarrollador
echo "El desarrollador " . $desarrollador->Nombre()  . "  ". $desarrollador->Apellido()  . "  " .   $desarrollador->Framework() . "<br>" . $desarrollador->calcularSalarioNeto() . "<br>";