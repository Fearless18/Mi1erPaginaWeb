<?php
session_start();
include "funciones.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="jquery-2.1.4.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>

<header>
	<div id="divRegistro">
	<p align="center" style="font-size:20px;color:#b00;font-weight:bold"><br/><br/>Panel del usuario<br/><br/><?php echo $_SESSION['user']?></p>
		<form action="log_out.php">
		<input type="submit" value="desloguear">
		</form>
	</div>
</header>
<nav>
	<ul id="menu">
		<li><a href="index.php">Inicio</a></li>
		<li><a href="noticias.php">Noticias</a></li>
		<li><a href="bandas.php">Bandas</a></li>
	</ul>
</nav>
<main>
	<section id="seccionprincipal" >
		<article id="art1"><!-- onmouseover="iluminar(this);" -->
			<h1>Panel del Usuario</h1>
			<?php
$_FILES['avatar2']="";

	$query="SELECT 	id_usuario,nombre,apellido,usuario,pass,email,estilo,avatar
			FROM 	usuarios
			WHERE 	id_usuario='$_SESSION[id_usuario]'";
	$registros=mysqli_query($conexion, $query) 
	or die ("Problemas con la DB: " . mysqli_error($conexion));
	$reg=mysqli_fetch_array($registros);
?>
<form action="panelactualizar.php" method="post" enctype="multipart/form-data">
<table width="100%">
	<tr><td></td><th>Sus Datos</th></tr>
	<tr><td class="textoderecha">Nombre:</td><td><input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>"></td>
	<td class="textoderecha">Apellido:</td><td><input type="text" name="apellido" value="<?php echo $reg['apellido']; ?>"></td></tr>
	<tr><td class="textoderecha">Usuario:</td><td><input type="text" name="user" value="<?php echo $reg['usuario']; ?>" disabled></td>
	<td class="textoderecha">Pass:</td><td><input type="password" name="pass" value="<?php echo $reg['pass']; ?>" disabled></td></tr>
	<tr><td class="textoderecha">Nuevo pass:</td><td><input type="text" name="contrasena" value=""></td>
	<td class="textoderecha">Confirmar nuevo pass:</td><td><input type="text" name="contrasena2" value=""></td></tr>
	<tr><td class="textoderecha">E-mail:</td><td><input type="text" name="mail"value="<?php echo $reg['email']; ?>"></td>
	<td class="textoderecha">Estilos de música:</td><td><input type="text" name="estilo" value="<?php echo $reg['estilo']; ?>"></td></tr>
	<tr><td class="textoderecha">Avatar:</td><td>
	<?php
	if (file_exists("avatars/".$_SESSION['id_usuario'].".jpg")) {
				echo "<img src=".$reg['avatar']." width='120px'><br>";
				echo "<input type='hidden' name='avatar' value='".$reg['avatar']."'>";
		} else {
			echo "Aún no tienes Avatar.";
		}
	?>
	</td><td class="textoderecha">Cambiar Avatar:</td><td><input type="hidden" name="MAX_FILE_SIZE" value="300000" /><input type="file" name="avatar2" id="avatar2"></td></tr>
	<tr><td></td><td></td><td><input type="submit" value="Actualizar"></td><td></td></tr>
</form> <!-- avatars/'.$_SESSION['user'].'.jpg -->


</table>

<?php


mysqli_close($conexion);

?>
		</article>
	</section>
	<aside id="costado"></aside>
			


	</aside>
</main>

<footer>pie</footer>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</body>
</html>