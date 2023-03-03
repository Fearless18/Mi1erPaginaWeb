<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="utf-8">
</head>
<body>

<?php  
$id_pizza=$_REQUEST['id_pizza'];

$conexion=mysqli_connect("localhost","root","","pizzeria")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="DELETE FROM pizzas WHERE id_pizza='$id_pizza';";
	mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));

	echo 'Pizza con id ',$id_pizza,' eliminada. </br>', $query;
mysqli_close($conexion);

?>
<form action="index.php">

	<input type="submit" value="volver"/>
</form>
</body>
</html>
