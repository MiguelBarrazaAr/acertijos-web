<?php
$titulo = "PRIMER PROBLEMA";
$problema = "Si Pablo tiene 10 años más que el doble de la edad de Juan; y ambas edades suman 40 años: ¿Cuantos años tiene Juan?";

$codigo = file_get_contents("consigna.html");
$codigo = str_replace("{titulo}", $titulo, $codigo);
$codigo = str_replace("{consigna}", $problema, $codigo);
print($codigo);
?>