<?php
$res3 = $_POST["respuesta3"];
if ($res3 == 246)
{
print ("Perfecto!<br>Has completado todos los desafíos que te hemos presentado.<br>Esperamos hayan sido de tu agrado!");
}
else
{
print ("Respuesta incorrecta!<br>Vuelve a intentarlo.");
include ("enlaceacertijo3.html");
}
?>