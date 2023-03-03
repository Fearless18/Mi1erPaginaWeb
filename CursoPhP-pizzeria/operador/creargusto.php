<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
</head>
<body>

<?php  
$nombre=$_REQUEST['nombre'];
$ingredientes=$_REQUEST['ingredientes'];
$precio=$_REQUEST['precio'];

$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="insert into pizzas (nombre,ingredientes,precio) values ('$nombre','$ingredientes','$precio');";
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
