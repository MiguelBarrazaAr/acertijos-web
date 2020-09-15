<!DOCTYPE html>
<html lang="es">
<head>
<title>PRIMER DESAFÍO</title>
</head>
<body>
<?php
$res1 = $_POST["res1"];
if ($res1 == 10)
{
print ("Bien hecho!<br>Has contestado el primer desafío corectamente.<br>Puedes continuar con el siguiente desafío");
}
else
{
	print ("Respuesta incorrecta<br>Vuelve a intertarlo!");
}
?>
<a href="acertijo2.html">Segundo acertijo</a>
</body>
</html>
</html>