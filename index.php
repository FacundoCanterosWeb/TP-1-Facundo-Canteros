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


?>

