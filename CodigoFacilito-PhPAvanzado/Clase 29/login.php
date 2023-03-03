<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

// Session

session_start();

$user="ale";
$pass="123";

if ($_POST['usuario']==$user && $_POST['pass']==$pass ) {
	$_SESSION['login']="admin";
	echo "Bienvenido, admin";
} else {
	echo "Usuario o contraseña incorrectas.";
}

echo "&nbsp;";
 ?>
 <a href="index.php">Volver</a>
</body>
</html>