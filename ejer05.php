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

$multiplicando;
$multiplicador;

    echo "<table text-align:center; border=5>";
    echo "<tr>";
    for ($tabla=1; $tabla<=10  ; $tabla++) { 
	echo "<td>$tabla </td>";
    }
    echo "</tr>";
    echo "<tr>";
    for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	for ($multiplicando=01; $multiplicando <=10 ; $multiplicando++) { 
		echo "<td>$multiplicador";
		echo ($tabla * $multiplicador);
		echo "</td>";
	}

	echo "</tr>";
   }
    echo "</table>";
?>
  
</body>
</html>