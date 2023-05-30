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

            public function mostrar(){
                echo "Nombre: " . $this -> getNombre();
                echo "<br";
                echo "Edad: " . $this ->  getEdad();
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

            public function mostrar(){

                parent::mostrar();

                echo "Sueldo: " . $this -> getSueldo();
            }




        }

        $persona = new Persona();
        $persona -> setNombre("Abril");
        $persona -> setEdad(21);
        $persona -> mostrar();

        
        
        $empleado = new Empleado();
        $empleado -> setSueldo(1000);
        $empleado -> mostrar();



    ?>

</body>
</html>