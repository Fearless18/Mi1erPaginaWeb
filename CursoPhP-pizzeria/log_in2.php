<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
</head>
<body>

<?php  
echo '$_SESSION = ', print_r($_SESSION), "<br>";
echo 'Página 2 <br><br>';

if(count($_REQUEST)!=0) {
	$_SESSION['user'] = $_REQUEST['user'];
	$_SESSION['pass'] = $_REQUEST['pass'];

	$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="SELECT id_cliente, nombre, pass from clientes;";
	$nombrepass=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));

	while ($reg=mysqli_fetch_array($nombrepass)){
		echo "<br>";print_r($reg);
		echo "<br>";var_dump($reg);
		echo "<br>";

		if ($_SESSION['user']=="$reg[nombre]" && $_SESSION['pass']=="$reg[pass]"){
			$usuariovalido='1';
			$_SESSION['id_cliente'] = "$reg[id_cliente]";
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
<form action="index.php">
	<input type="submit" value="Inicio"/>
</form>
<?php
if ($_SESSION!=null) {
	echo '<form action="log_in3.php">';
	echo '<input type="submit" value="Página 3"/>';
	echo '</form>';
}

?>
</body>
</html>
