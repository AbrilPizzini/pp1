<?php 
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

echo $twig-> render('ejer04.html.twig', ['param' => $_GET['param']]);


?>