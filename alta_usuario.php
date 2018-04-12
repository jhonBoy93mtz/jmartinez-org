<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/registro.css">
<title>Alta de usuarios</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['pag']==1) {
	echo "<h2>Alta de usuarios</h2><form action="alta.php" method="post"><p>Introduzca su nombre y apellidos</p>Nombre: <input type="text" name="nombre"><br><br>Apellido paterno: <input type="text" name="apaterno"><br><br>Apellido materno: <input type="text" name="amaterno"><br><br><input type="submit" value="Enviar"></form>";
}
else{
	header("Location: login.php");
}
?>
</body>
</html>
