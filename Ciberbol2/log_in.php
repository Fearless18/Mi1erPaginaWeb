<?php
// Start the session
session_start();
include "funciones.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<meta charset="utf-8" http-equiv="Refresh" content="3;url=admin.php">
</head>
<body>

<?php  
if(count($_REQUEST)!=0) {
	// guardo user/pass ingresados
	$_SESSION['user'] = $_REQUEST['usuario'];
	$_SESSION['pass'] = $_REQUEST['password'];

	$query="SELECT id_usuario, usuario, pass, nombre from usuarios;";
	$nombrepass=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));

	while ($reg=mysqli_fetch_array($nombrepass)){
		// Reviso si el user/pass ingresado está registrado y coincide
		if ($_SESSION['user']=="$reg[usuario]" && $_SESSION['pass']=="$reg[pass]") {
			$usuariovalido='1';
			$_SESSION['id_usuario'] = "$reg[id_usuario]";
				$_SESSION['nombre'] = "$reg[nombre]";
			break;
		} else {
			$usuariovalido='0';
		}	
	}
	if ($usuariovalido=='1') {
		echo "</br>Bienvenido ",$_SESSION['user'];
	} else {
	echo "</br>Datos incorrectos.";
	session_unset();
	}
	mysqli_close($conexion);
}

?>
<form action="admin.php">
	<input type="submit" value="Inicio"/>
</form>
</body>
</html>
