<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>login</title>
</head>
<body>
<?php
include 'conexion.php';
$con = conectar();
$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
$pass = md5($_POST['contrasenia']);
echo "<h2>Ingresa</h2><h3>Usuario: </h3>".$usuario;
echo "<h3>Contraseña: </h3>".$pass;
$query = ("SELECT contrasenia FROM usuarios WHERE usuario = '$usuario'");
$process = pg_query($con, $query);
if  (!$process) {
	$_SESSION['error']=2;
}
else {
	$result = pg_fetch_result($process, 0, 0);
	if ($result == $pass){
		session_start();
		$_SESSION['pag']=1;
		header("Location: menu.php");
	}
	else {
		session_start();
		$_SESSION['error']=1;
		header("Location: login.php");
	}
}

pg_close($con);
?>
</body>
</html>
