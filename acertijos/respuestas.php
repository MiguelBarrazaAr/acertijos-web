<?php
session_start();
include($_SESSION["ruta"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>
validación
</title>
</head>
<body>
<?php
$res = $_POST["res"];
if($res == $respuesta)
{
print ("Bien hecho!<br>Has contestado corectamente.<br>Puedes continuar con el siguiente desafío<br>");
$problema = $_SESSION["problema"] +1;
print("<a href='acertijo.php?problema=".$problema."'>Continuar</a>");
}
else
{
	print ("Respuesta incorrecta<br>");
	print("<a href='acertijo.php?problema=".$_SESSION["problema"]."'>Volver a intentar</a>");
}
?>

</body>
</html>
</html>