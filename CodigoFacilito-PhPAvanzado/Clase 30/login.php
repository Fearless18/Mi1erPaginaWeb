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
if ($_GET['logout']="cookie") {
	unset($_COOKIE['usuario']);
	setcookie('usuario',null,-1);
	unset($_COOKIE['pass']);
	setcookie('pass',null,-1);

	echo "cookie destruida <Br>";
}
if (isset($_POST['usuario'])) {
	if ($_POST['usuario']==$user && $_POST['pass']==$pass ) {
		setcookie('usuario',$_POST['usuario'],time()+60*60*24*30); // expira en un mes
		setcookie('pass',$_POST['pass'],time()+60*60*24*30);
		echo "Cookie creado, admin";
	} else {
		echo "Usuario o contraseña incorrectas.";
	}
}

echo "&nbsp;";
 ?>
 <a href="index.php">Volver</a>
</body>
</html>