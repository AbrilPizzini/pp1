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

        class Persona{

            private $nombre;
            private $edad;

            public function getNombre(){
                return $this->nombre;
            }

            public function setNombre($nombre){
                $this->nombre=$nombre;
            }

            public function getEdad(){
                return $this->edad;
            }

            public function setEdad($edad){
                $this->edad = $edad;
            }


        }


        class Empleado extends Persona{

            private $sueldo;

            public function getSueldo(){
                return $this->sueldo;
            }

            public function setSueldo($sueldo){
                $this->sueldo=$sueldo;
            }




        }

        $persona = new Persona();
        $persona -> setNombre("Abril");
        echo "El nombre: " . $persona -> getNombre();
        echo "<br>";
        $persona -> setEdad(21);
        echo "La edad: " . $persona-> getEdad();
        echo "<br>";

        
        
        $empleado = new Empleado();
        $empleado -> setSueldo(1000);
        echo "El suelodo: " . $empleado -> getSueldo();
        echo "<br>";




    ?>

</body>
</html>