<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Alta</title>
</head>
<body>
<?php

include 'conexion.php';
$con = conectar();

$err = 0;

$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$apaterno = filter_var($_POST['apaterno'], FILTER_SANITIZE_STRING);
$amaterno = filter_var($_POST['amaterno'], FILTER_SANITIZE_STRING);
$nacionalidad = filter_var($_POST['nacionalidad'], FILTER_SANITIZE_STRING);
$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
$anio_publicacion = filter_var($_POST['anio_publicacion'], FILTER_SANITIZE_STRING);
$id_autor = filter_var($_POST['id_autor'], FILTER_SANITIZE_STRING);

if ($nombre) {
	if(!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$nombre)){
		echo "Error: Nombre incorrecto<br>";
		$err = 1;
	}
} else{
	echo "El campo de nombre no puede ir vacio<br>";
	$err = 1;
}
if ($apaterno) {
	if (!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$apaterno)) {
		echo "Error: Apellido paterno incorrecto<br>";
		$err = 1;
	}
} else{
	echo "El campo de apellido paterno no puede ir vacio<br>";
	$err = 1;
}
if ($amaterno) {
	if (!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$amaterno)) {
		echo "Error: Apellido materno incorrecto<br>";
		$err = 1;
	}
}else{
	echo "El campo de apellido materno no puede ir vacio<br>";
	$err = 1;
}
if ($nacionalidad) {
	if (!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$nacionalidad)) {
		echo "Error: Nacionalidad incorrecta<br>";
		$err = 1;
	}
}else{
	echo "El campo de nacionalidad no puede ir vacio<br>";
	$err = 1;
}
if ($titulo) {
	if (!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$titulo)) {
		echo "Error: Titulo incorrecto<br>";
		$err = 1;
	}
}else{
	echo "El campo de titulo no puede ir vacio<br>";
	$err = 1;
}
if ($anio_publicacion) {
	if (!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$anio_publicacion)) {
		echo "Error: Año incorrecto<br>";
		$err = 1;
	}
}else{
	echo "El campo de año no puede ir vacio<br>";
	$err = 1;
}
if ($id_autor) {
	if (!preg_match('/^()[A-ZÁÉÍÓÚÜÑa-záéíóúüñ][a-záéíóúüñ]+(\s[A-ZÁÉÍÓÚÜÑ]?[a-záéíóúüñ]+)*$/',$id_autor)) {
		echo "Error: ID de autor incorrecto<br>";
		$err = 1;
	}
}else{
	echo "El campo de ID de autor no puede ir vacio<br>";
	$err = 1;
}

if ($err == 0) {
	$query = ("INSERT INTO usuarios (nombre,apaterno,amaterno,usuario,contrasenia) VALUES ('$nombre','$apaterno','$amaterno','$nombre','123')");

	$process = pg_query($con, $query);

	if  (!$process) {
	   echo "<br>Registro NO exitoso";
	}
	else {
	   echo "<br>El registro ha sido exitoso";
	}
} else{
	echo "<br>El registro no se puede realizar por que algunos de los datos no son coorrectos, vuelva a intentarlo";
}

pg_close($con);
?>
<br>
<form action="https://www.registro.unam.mx/registro.php">
    <input type="submit" value="Regresar al formulario" />
</form>
</body>
</html>
