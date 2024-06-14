<?php
include 'Desarrollador.php';
include 'Diseniador.php';
// Clase Empleado
class Empleado {
    private $nombre;
    private $salario;

    // Constructor
    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    // Accediendo a las propiedades
    public function getNombre() {
        return $this->nombre;  // Devuelve el valor nombre
    }

    public function getSalario() {
        return $this->salario; // Devuelve el valor salario
    }

    // Método para calcular el salario neto con un descuento fijo del 10%
    public function calcularSalarioNeto() {
        return $this->salario * 0.90; // 10% de descuento
    }
}




// Crear instancias de Empleado, Desarrollador y Diseniador
$empleado = new Empleado("Juan", 50000);
$desarrollador = new Desarrollador("Pedro", 60000, "Laravel");
$diseniador = new Diseniador("María", 55000, "Adobe Illustrator");


// Mostrar nombre y salario neto de cada empleado
echo "<h1>PHP OO</h1>" ."<br>";
echo "El empleado esta trabajando " . "<br>" . $empleado->getNombre() . " tiene un salario neto de: $" . $empleado->calcularSalarioNeto() . "<br>";
echo "El desarrollador " . $desarrollador->getNombre() . " Esta trabajando con el framework " . $desarrollador->getFramework() . "<br>". " Salario neto de " .$desarrollador->getNombre() . " es de :$" . $desarrollador->calcularSalarioNeto() . "<br>";
echo "El diseniador " . $diseniador->getNombre() . " Esta trabajando con la herramienta " . $diseniador->getHerramientas() . "<br>". " Salario neto de " . $diseniador->getNombre() ." es de :$" . $diseniador->calcularSalarioNeto(). "<br>";
?>
