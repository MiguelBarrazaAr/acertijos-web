<?php
$x = $_GET["problema"];
include("datos/".$x.".php");

$codigo = file_get_contents("consigna.html");
$codigo = str_replace("{titulo}", $titulo, $codigo);
$codigo = str_replace("{consigna}", $problema, $codigo);
print($codigo);
?>