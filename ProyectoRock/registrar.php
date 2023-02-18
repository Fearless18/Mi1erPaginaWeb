<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta charset="utf-8">
</head>
<body>

<?php
session_start();
include "funciones.php";
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$usuario=$_REQUEST['usuario'];
$pass=$_REQUEST['contrasena'];
$email=$_REQUEST['mail'];
$estilo=$_REQUEST['estilo'];
$contrasena=$_REQUEST['contrasena'];
$contrasena2=$_REQUEST['contrasena2'];
@$ubicacionavatar=$_REQUEST['avatar'];
if ($contrasena==$contrasena2) {

	// revisa si ya existe el user.
	$query="SELECT usuario FROM usuarios WHERE usuario='$usuario';";
	$existeuser=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	$reg=mysqli_fetch_array($existeuser);
	// si no hay registro de ese user, no existe, entonces:
	if (empty($reg[0])){
	
		// para buscar el último id libre y sumarle 1.
		$query="SELECT MAX(id_usuario) FROM usuarios;";
		$idmax=mysqli_query($conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));
		$reg=mysqli_fetch_array($idmax);
		$id_user_nuevo=$reg[0]+1; // último id_usuario libre + 1

		if (!empty($_FILES['avatar']['name'])) {
			$carpeta = "avatars/";
			opendir($carpeta);
			$destino = $carpeta.$_FILES['avatar']['name'];
			copy($_FILES['avatar']['tmp_name'],$destino);
			echo "Archivo subido exitosamente<br>";
			$ubicacionavatar=$carpeta.$id_user_nuevo.".jpg";
			rename($destino,$ubicacionavatar);
			
			echo $ubicacionavatar."<br>";
			echo "<img src=\"".$ubicacionavatar."\"><br>";
		}
			// $dir_subida = 'avatars/';
			// $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

			// if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
			//     echo "El fichero es válido y se subió con éxito.\n";
			// } else {
			//     echo "¡Posible ataque de subida de ficheros!\n";
			// }

		$query="INSERT into usuarios (nombre,apellido,usuario,pass,email,estilo,avatar) values 
	 	('$nombre','$apellido','$usuario','$pass','$email','$estilo','$ubicacionavatar');";
		mysqli_query($conexion, $query) 
		or die ("Problemas con la DB: " . mysqli_error($conexion));
		echo "Ud. ha sido registrado correctamente<br><br>".$query;
		mysqli_close($conexion);
	} else{
		echo "Ya existe ese usuario.";
	}
} else {
	echo "Las contraseñas no coinciden!.";
}

?>
<form action="index.php">
	<input type="submit" value="volver"/>
</form>
</body>
</html>
<!--
CREATE TABLE `test`.`encuesta`(  
  `id_voto` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(30) NOT NULL,
  `voto_bien` INT,
  `voto_maso` INT,
  `voto_mal` INT,
  PRIMARY KEY (`id_voto`)
) CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE `test`.`usuarios`(
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `apellido` VARCHAR(30) NOT NULL,
  `usuario` VARCHAR(30) NOT NULL,
  `pass` VARCHAR(30) NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `estilo` VARCHAR(100),
  `avatar` VARCHAR(50),
  PRIMARY KEY (`usuario`, `id_usuario`)
) CHARSET=utf8 COLLATE=utf8_spanish_ci;
-->