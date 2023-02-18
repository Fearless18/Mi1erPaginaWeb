<?php
// Start the session
session_start();
include "funciones.php";
if (isset($_GET['submit'])) {
	if(isset($_GET['votacion']))
	{
		echo "You have selected :".$_GET['votacion']."</br>";  //  Displaying Selected Value

		$query="INSERT INTO encuesta (usuario,".$_GET['votacion'].") VALUES ('".$_SESSION['user']."',1);";
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