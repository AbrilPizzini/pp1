<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Empleado {

    public $nombre;
    public $sueldo;

    function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;

    }

    function pagaImpuesto(){

        if ($this ->sueldo > 3000){

            echo $this-> nombre . ": Debe pagar impuestos ";
        } 
        else 
        {
            echo $this -> nombre . ": No debe pagar impuestos ";
        }

        echo "<br>";
    }


}

$empleado = new Empleado("Abril", 10000);
$empleado ->pagaImpuesto();
$empleado1 = new Empleado("Carlos", 1000);
$empleado1 ->pagaImpuesto();

?>

    
</body>
</html>