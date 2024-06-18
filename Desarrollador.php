<?php
// Clase Desarrollador
class Desarrollador extends Empleado implements IEmpleado {
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


   
public function PuestoTrabajo()
{
    return 'Desarrollador';
}

public function Lenguaje()
{
    return "Lenguaje: PHP";
}

//Metodo abstracto instanciado en Empleado
public function tarea(){
return "El desarrollador " . $this->Nombre() . " " .  $this->Apellido() . $this->Framework();
}
//Metodo abstracto instanciado en Empleado
    // Método para calcular el salario neto (igual que en Empleado)
    public function calcularSalarioNeto() {
        return " El salario neto es $:" . $this->salario * 0.90; // 10% de descuento
    }
}

