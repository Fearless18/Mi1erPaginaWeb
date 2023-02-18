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
@$id=$_POST['id'];
@$titulo=$_POST['titulo'];
@$texto=$_POST['texto'];
@$mostrar=$_POST['mostrar'];
@$imagen2=$_POST['imagen2'];
@$borrar=$_POST['borrar'];


if ($mostrar) { $mostrar="1"; } else { $mostrar="0"; }
if ($borrar) { $borrar="1"; } else { $borrar="0"; }
$ubicacionavatar=NULL;

if ($borrar==1) { // BORRAR
	// tabla - columna - id - si tiene una columna de imagen/avatars, elimina el archivo
	$consultas->borrarRegistro('articulos','id',"'".$id."'",'imagen');

} else { // MODIFICAR

	if (empty($texto)) {
		echo "No se han efectuados cambios.";
	} else {
		if (!empty($_FILES['imagen2']['name'])) {
			$carpeta = "noticias/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['imagen2']['name'];
			copy($_FILES['imagen2']['tmp_name'],$destino);
			$ubicacionavatar=$carpeta.$id.".jpg";
			rename($destino,$ubicacionavatar);
			echo "<img src=\"".$ubicacionavatar."\"><br>";
		}
		
		$query="UPDATE articulos SET 
		titulo='$titulo', texto='$texto',
		mostrarsiempre='$mostrar', imagen='$ubicacionavatar' 
		WHERE id='$id';";
		mysqli_query($conexion, $query) or die ("Problemas con la DB: " . mysqli_error($conexion));

		echo "<br>Datos Actualiza2 :)<br><br>".$query;
		mysqli_close($conexion);
	}
}

?>
<form action="admin.php">
	<input type="submit" value="volver"/>
</form>
</body>
</html>