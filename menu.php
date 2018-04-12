<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>menu</title>
</head>
<body>
<?php

session_start();
if ($_SESSION['pag']==1) {
	echo "Bienvenido ".$nombre;
	echo "<a href="alta_libro.php">Ir a Alta libros</a>";
	echo "<a href="alta_usuario.php">Ir a Alta usuarios</a>";
	echo "<a href="alta_autor.php">Ir a Alta autores</a>";
}
else{
	header("Location: login.php");
}
?>
</body>
</html>
