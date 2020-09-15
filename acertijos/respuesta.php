<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>PRIMER DESAFÍO</title>
</head>
<body>
<?php
$respuesta = $_POST["respuesta"];
if ($respuesta == "La conjetura de Poincaré")
{
	print ("Respuesta incorrecta.<br>La conjetura de Poincaré desde luego que fue un enorme desafío en las matemáticas, pero ya fue resuelto por Gregori Perelman a principios del siglo XXI");
	include ("retornar.html");
}
else
{
	if ($respuesta == "El significado de infinito")
	{
		print ("Respuesta equivocada.<br>Infinito es un concepto muy bien estudiado dentro de las matemáticas; sus propiedades están bien definidas.");
		include ("retornar.html");
	}
	else
	{
	print ("Respuesta correcta!<br>Ahora puedes comenzar a resolber nuestros acertijos. Éxitos!");
	include ("enlaceacertijo1.html");
				}
			}
?>
</body>
</html>