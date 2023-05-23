<HTML>
<HEAD>
<TITLE>destino.php</TITLE>
</HEAD>
<BODY>
<?php 


    $variable1 = $_GET["variable1"];
    $variable2 = $_GET["variable2"];
    
if($variable1>$variable2)
{
    echo "<p>Es mayor $variable1</p>";
}
else {

    echo"<p>Es mayor $variable2</p>";
}

?>

</BODY>
</HTML>