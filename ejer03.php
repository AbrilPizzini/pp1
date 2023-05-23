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

        $pais = [
            "espana" =>
                    [
                        "nombre" => "España",
                        "lengua" => "Castellano",
                        "moneda" => "Peseta"
                    ],
            "francia" =>
                    [
                        "nombre" => "Francia",
                        "lengua" => "Francés",
                        "moneda" => "Franco"
                    ]
        ];

    echo $pais["espana"]["moneda"] //Saca en pantalla: "Peseta"
     
?>
</body>
</html>