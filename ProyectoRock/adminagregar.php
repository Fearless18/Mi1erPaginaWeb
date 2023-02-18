<!DOCTYPE html>
<html>
<head>
	<title>Agregar noticia</title>
	<meta charset="utf-8" http-equiv="Refresh" content="30;url=admin.php">
</head>
<body>

<?php
session_start();
include "funciones.php";
$titulo=$_REQUEST['titulo'];
$texto=$_REQUEST['texto'];
@$mostrar=$_REQUEST['mostrar'];
@$imagen=$_REQUEST['imagen'];

if ($mostrar) { $mostrar="1"; } else { $mostrar="0"; }
$ubicacionavatar=NULL;

		// para buscar el último id libre y sumarle 1.
		$query="SELECT MAX(id) FROM articulos;";
		$idmax=mysqli_query($conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));
		$reg=mysqli_fetch_array($idmax);
		$id_user_nuevo=$reg[0]+1; // último id_usuario libre + 1

		if (!empty($_FILES['imagen']['name'])) {
			$carpeta = "noticias/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagen']['name'];
			copy($_FILES['imagen']['tmp_name'],$destino);
			$ubicacionavatar=$carpeta.$id_user_nuevo.".jpg";
			rename($destino,$ubicacionavatar);
		}

		$query="INSERT INTO articulos (id,titulo,texto,fecha,imagen,mostrarsiempre) values 
	 	('$id_user_nuevo','$titulo','$texto',NOW(),'$ubicacionavatar','$mostrar');";
		mysqli_query($conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));
		echo "Ud. ha sido registrado correctamente<br><br>".$query;
		mysqli_close($conexion);

?>
<form action="admin.php">
	<input type="submit" value="volver"/>
</form>
</body>
</html>