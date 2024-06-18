<?php

// Clase Diseniador
class Diseniador extends Empleado {
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



    // Método para calcular el salario neto con un descuento adicional del 5%
    public function calcularSalarioNeto() {
        $salarioConDescuentoBase = $this->salario * 0.90; // 10% de descuento inicial
        return " El salario neto es $ " . $salarioConDescuentoBase * 0.95; // 5% de descuento adicional
    }
}

//Paso los parametros a Diseniador

$diseniador = new Diseniador("María", "Gomez" ,55000, "Adobe Illustrator");
//Imprimo por pantalla los parametros de Diseniador
//Tambien se aplica el polimorfismo ya que Nombre, Apellido, calcularSalarioNeto son heredadas de la clase empleado y son sobrescritos por los nuevos valores
echo "El diseniador " . $diseniador->Nombre() . " ".$diseniador->Apellido()." ". $diseniador->Herramientas() . "<br>" . $diseniador->calcularSalarioNeto(). "<br>";
?>