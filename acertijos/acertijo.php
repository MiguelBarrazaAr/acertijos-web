<?php
session_start();
$x=$_GET["problema"];
$ruta = "datos/$x.php";
$_SESSION["problema"] = $x;
$_SESSION["ruta"] = $ruta;
include($ruta);

$codigo = file_get_contents("consigna.html");
$codigo = str_replace("{titulo}", $titulo, $codigo);
$codigo = str_replace("{consigna}", $problema, $codigo);
print($codigo);
?>