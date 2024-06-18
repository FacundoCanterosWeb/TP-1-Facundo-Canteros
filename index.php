<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP OO</h1>

<?php
include 'IEmpleado.php';
include 'Empleado.php';
include 'Diseniador.php';
include 'Desarrollador.php';

$diseniador = new Diseniador("María", "Gomez" ,55000, "Adobe Illustrator");
//Imprimo por pantalla los parametros de Diseniador
//Tambien se aplica el polimorfismo ya que Nombre, Apellido, calcularSalarioNeto son heredadas de la clase empleado y son sobrescritos por los nuevos valores
echo $diseniador->PuestoTrabajo() . '<br>';
echo "Nombre : ".$diseniador->Nombre()."<br>";
echo "Apellido : " . $diseniador->Apellido(). "<br>";
 echo $diseniador->Disenio() . "<br>";
echo $diseniador->tarea() . "<br>";
echo  "Salario Bruto: " .$diseniador->Salario() . "<br>"."Salario Neto :" .  $diseniador->calcularSalarioNeto(). "<br></br>";


$desarrollador = new Desarrollador("Pedro","Nicolas", 60000, "Laravel");
//Imprimo por pantalla los parametros de Desarrollador
//Tambien se aplica el polimorfismo ya que Nombre, Apellido, calcularSalarioNeto son heredadas de la clase empleado y son sobrescritos por los nuevos valores
echo $desarrollador->PuestoTrabajo() . '<br>';
echo "Nombre : " . $desarrollador->Nombre() . "<br>";
echo "Apellido : " .$desarrollador->Apellido(). "<br>";
echo $desarrollador->Lenguaje(). "<br>";
echo $desarrollador->tarea(). "<br>";
echo "Salario Bruto: " . $desarrollador->Salario() . "<br>";
echo "Salario Neto: " . $desarrollador->calcularSalarioNeto();
?>
</body>
</html>
