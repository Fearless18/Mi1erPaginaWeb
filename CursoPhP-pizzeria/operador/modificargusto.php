<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
</head>
<body>

<?php  
$id_pizza=$_REQUEST['id_pizza'];
$nombre=$_REQUEST['nombre'];
$ingredientes=$_REQUEST['ingredientes'];
$precio=$_REQUEST['precio'];

$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

if ($nombre!=null) {
	$query="UPDATE pizzas SET nombre='$nombre' WHERE id_pizza='$id_pizza';";
	mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	echo $query;
}

if ($ingredientes!=null) {
	$query="UPDATE pizzas SET ingredientes='$ingredientes' WHERE id_pizza='$id_pizza';";
	mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	echo $query;
}
if ($precio!=null) {
	$query="UPDATE pizzas SET precio='$precio' WHERE id_pizza='$id_pizza';";
	mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	echo $query;
}
mysqli_close($conexion);

?>
<form action="index.php">

	<input type="submit" value="volver"/>
</form>
</body>
</html>
