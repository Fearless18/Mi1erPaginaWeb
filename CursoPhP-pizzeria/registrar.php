<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
</head>
<body>

<?php  
$nombre=$_REQUEST['nombre'];
$direccion=$_REQUEST['direccion'];
$telefono=$_REQUEST['telefono'];
$email=$_REQUEST['email'];

$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="insert into clientes (nombre,direccion,telefono,email) values ('$nombre','$direccion','$telefono','$email');";
	mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));

	echo $query;
mysqli_close($conexion);

?>
<form action="index.php">
	<input type="submit" value="volver"/>
</form>
</body>
</html>
