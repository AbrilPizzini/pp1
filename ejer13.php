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


 class Cine {

    private $salas[];

    function __construct(){

        for($i = 0;$i<=3;$i++){

            $nro = i+1;
            $cantidadButacas = 0;

            if ($nro==1) {
                $cantidadButacas = 50;

            } 

            if ($nro == 2 ){
                $cantidadButacas = 30;
            }

            if($nro == 3){
                $cantidadButacas = 40;
            }

            $sala = new Sala($nro, $cantidadButacas);

           
           $this->add($sala);

        }
        
 
    }

    function add(Sala $sala){
        $this -> salas[] = $sala;

    }

    function vender($cantidad, $nroSala){
        



    }

    function mostrarOcupacion(){


    }

 }

 class Sala {
    private $nro;
    private $cantidadButacas;
    private $butacasOcupadas;

    function __construct($nro, $cantidadButacas){

        $this -> setCantidadButacas($cantidadButacas);
        $this -> setNroSala($nro);

    }

    function ocuparButacas($cantidad){

    }

    function setCantidadButacas($cantidadButacas){
        $this -> cantidadButacas = $cantidadButacas;
    }

    function getCantidadButacas(){
        return $this -> cantidadButacas;
    }

    function setNroSala($nro){
        $this -> nro = $nro; 
    }

    function getNroSala(){
        return $this -> nro;
    }


 }

$cine = new Cine();

 for($i = 0; $i<=100; $i++){
    $cantidad = mt_rand(1,2);
    $nroSala  = mt_rand(1,3);

    $cine -> vender($cantidad, $nroSala);


 }


    ?>
</body>
</html>