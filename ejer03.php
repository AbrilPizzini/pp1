<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);
$pais = array (
    "rusia" => array(
        "nombre" => "Rusia"
    ),
    "francia" => array (
        "nombre" => "Francia"
    ),
    "argentina"=> array (
        "nombre" => "Argentina"
    ),
    "uruguay" => array (
        "nombre" => "Uruguay"
    ),
    "paraguay" => array (
        "nombre" => "Paraguay"
    )
    );

    echo $twig->render('ejer03.html.twig', ['pais' => $pais]);





?>