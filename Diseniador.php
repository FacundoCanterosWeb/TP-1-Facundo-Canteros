<?php

// Clase Diseniador
class Diseniador extends Empleado implements IEmpleado {
    private $herramientas;
   

    // Constructor
    public function __construct($nombre, $apellido,$salario, $herramientas) {
        parent::__construct($nombre,$apellido,$salario);//Accedo a las propiedades de la clase padre Empleado
       $this->salario = $salario;
        $this->herramientas = $herramientas;
        $this->apellido = $apellido;
    }

    // Método para acceder a las herramientas del diseniador
    public function Herramientas() {
        return " Esta trabajando con la herramienta " . $this->herramientas;
    }



    

    public function PuestoTrabajo()
    {
        return "Diseniador";
    }

    public function Disenio()
    {
        return "Herramienta: Photoshop";
    }
//Metodo abstracto instanciado en Empleado
    public function tarea()
    {
        return "Tarea : "  ."El diseniador ". $this->Nombre() . " " . $this->Apellido() . $this->Herramientas();

    }
    //Metodo abstracto instanciado en Empleado
    // Método para calcular el salario neto con un descuento adicional del 5%
    public function calcularSalarioNeto() {
        $salarioConDescuentoBase = $this->salario * 0.90; // 10% de descuento inicial
        return " El salario neto es $ " . $salarioConDescuentoBase * 0.95; // 5% de descuento adicional
    }
}




?>