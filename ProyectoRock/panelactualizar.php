<?php
session_start();
include "funciones.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Panel del Usuario</title>
	<meta charset="utf-8">
</head>
<body>

<?php  
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$usuario=$_SESSION['user'];
$pass=$_SESSION['pass'];
$email=$_REQUEST['mail'];
$estilo=$_REQUEST['estilo'];
$contrasena=$_REQUEST['contrasena'];
$contrasena2=$_REQUEST['contrasena2'];
@$ubicacionavatar=$_REQUEST['avatar'];

if ($contrasena==$contrasena2) {

	// si se subió un archivo:
	if (!empty($_FILES['avatar2']['name'])) {
		$carpeta = "avatars/";
		opendir($carpeta);
		$destino = $carpeta.$_FILES['avatar2']['name'];
		copy($_FILES['avatar2']['tmp_name'],$destino);
		$ubicacionavatar=$carpeta.$_SESSION['id_usuario'].".jpg";
		rename($destino,$ubicacionavatar);
		echo "<img src=\"".$ubicacionavatar."\"><br>";
	}
	// si no puso contraseña nueva, enviará la que tenia.
	if (!empty($contrasena)) {
		$pass=$contrasena;
	}
	$query="UPDATE usuarios SET 
	nombre='$nombre', apellido='$apellido',
	usuario='$_SESSION[user]', pass='$pass',
	email='$email',	estilo='$estilo', avatar= '$ubicacionavatar'
	WHERE id_usuario='$_SESSION[id_usuario]';";
	mysqli_query($conexion, $query) or die ("Problemas con la DB: " . mysqli_error($conexion));

	echo "<br>Datos Actualiza2 :)<br><br>".$query;
	mysqli_close($conexion);
} else {
	echo "Las contraseñas no coinciden!.";
}

?>
<form action="panelusuario.php">
	<input type="submit" value="volver"/>
</form>
</body>
</html>