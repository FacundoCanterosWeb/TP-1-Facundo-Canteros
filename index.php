<?php
//Clase Empleado
class Empleado{
    private $nombre;
    private $salario;



    //Constructor
    public function __construct($nombre,$salario)
    {
        $this->nombre=$nombre;
        $this->salario=$salario;
    }

    //Accediendo a las propiedades

    public function getNombre(){
        return $this->nombre;  //Devuelve el valor nombre
    }

    public function getSalario(){
        return $this->salario; //Devuelve el valor salario
    }

    
};


// Clase Desarrollador
class Desarrollador extends Empleado {
    private $framework;

    // Constructor
    public function __construct($nombre, $salario, $framework) {
        parent::__construct($nombre, $salario);
        $this->framework = $framework;
    }

    // Método para acceder al framework
    public function getFramework() {
        return $this->framework;
    }
}

// Clase Diseniador
class Diseniador extends Empleado {
    private $herramientas;

    // Constructor
    public function __construct($nombre, $salario, $herramientas) {
        parent::__construct($nombre, $salario);
        $this->herramientas = $herramientas;
    }

    // Método para acceder a las herramientas del diseniador
    public function getHerramientas() {
        return $this->herramientas;
    }
}


?>

