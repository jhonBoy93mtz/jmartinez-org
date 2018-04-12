<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/registro.css">
<title>Alta de libros</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['pag']==1) {
	echo "<h2>Alta de libros</h2><form action="alta.php" method="post"><p>Introduzca los siguientes datos:</p>Titulo: <input type="text" name="titulo"><br><br>Id del autor: <input type="text" name="id_autor"><br><br>Año de pubicacion: <input type="text" name="anio_publicacion"><br><br><input type="submit" value="Enviar"></form>";
}
else{
	header("Location: login.php");
}
?>
</body>
</html>
