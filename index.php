<?php
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

    // Método para calcular el salario neto (igual que en Empleado)
    public function calcularSalarioNeto() {
        return $this->salario * 0.90; // 10% de descuento
    }
}

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

    // Método para calcular el salario neto con un descuento adicional del 5%
    public function calcularSalarioNeto() {
        $salarioConDescuentoBase = $this->salario * 0.90; // 10% de descuento inicial
        return $salarioConDescuentoBase * 0.95; // 5% de descuento adicional
    }
}

// Crear instancias de Empleado, Desarrollador y Diseniador
$empleado = new Empleado("Juan", 50000);
$desarrollador = new Desarrollador("Pedro", 60000, "Laravel");
$diseniador = new Diseniador("María", 55000, "Adobe Illustrator");

// Mostrar nombre y salario neto de cada empleado
echo "El empleado " . $empleado->getNombre() . " tiene un salario neto de: $" . $empleado->calcularSalarioNeto() . "<br>";
echo "El desarrollador " . $desarrollador->getNombre() . " tiene un salario neto de: $" . $desarrollador->calcularSalarioNeto() . " y trabaja con el framework " . $desarrollador->getFramework() . "<br>";
echo "El diseniador " . $diseniador->getNombre() . " tiene un salario neto de: $" . $diseniador->calcularSalarioNeto() . " y trabaja con la herramienta " . $diseniador->getHerramientas() . "<br>";

?>
