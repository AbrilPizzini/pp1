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

    class Tabla{

        private $celdas; 
        


        function __construct(){

            $this ->celdas=[];
        

        }

        function add(Celda $celda){

            
            $this -> celdas[] = $celda;

        }

        function mostrarCeldas(){

            echo '<table>';
            foreach($celdas as $key => $celda){
                echo '<tr>';
                echo "Celda numero: " . $this -> celdas[$key];
                echo '</tr>';
            }

            echo '</table>';

        }



    }

    class Celda{

        public $nroCelda;
        public $valorCelda;

        function __construct($nroCelda, $valorCelda){

            $this -> nroCelda = $nroCelda;
            $this -> valorCelda = $valorCelda;


        }

        function getNroCelda(){

            return $this -> nroCelda;
        }

        function getValorCelda(){

            return $this -> valorCelda;
        }


    }


    ?>
</body>
</html>