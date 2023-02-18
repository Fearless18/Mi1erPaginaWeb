<?php
if (isset($_GET['submit'])) {
	if(isset($_GET['votacion']))
	{
	echo "You have selected :".$_GET['votacion']."</br>";  //  Displaying Selected Value
	$conexion=mysqli_connect("localhost","root","","test")
	or die ("Problemas en la conexión: " . mysqli_error($conexion));

	$query="INSERT INTO encuesta (".$_GET['votacion'].") VALUES (1);";
	echo $query;
	$cantidad=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	mysqli_close($conexion);
	}
}
?>
<form action="index.php">
	<input type="submit" value="Volver">
</form>