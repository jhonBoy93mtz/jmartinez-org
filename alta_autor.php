<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/registro.css">
<title>Alta de autores</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['pag']==1) {
	echo "<h2>Alta de autores</h2><form action="alta.php" method="post"><p>Introduzca los siguientes datos:</p>Nombre: <input type="text" name="nombre"><br><br>Apellido paterno: <input type="text" name="apaterno"><br><br>Apellido materno: <input type="text" name="amaterno"><br><br>Nacionalidad: <input type="text" name="nacionalidad"><br><br><input type="submit" value="Enviar"></form>";
}
else{
	header("Location: login.php");
}
?>
</body>
</html>
