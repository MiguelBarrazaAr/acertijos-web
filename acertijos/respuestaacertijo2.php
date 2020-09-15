<!DOCTIYPE html>
<html lang="es">
<head
<meta charset="UTF-8">
<title>SEGUNDO DESAFÍO</title>
</head>
<body>
<?php
$res2 = $_POST["respuesta2"];
if ($res2 == 54)
{
	print ("Bien hecho!<br>Hasta el momento lo has hecho todo bien<br>Continúa con el siguiente
desafío.");
include ("enlaceacertijo3.html");
}
else
{
	print ("Respuesta incorrecta!<br>Por favor, piénsalo nuevamente.");
	include ("acertijo2.html");
}
?>
</body>
</html>