<?php
// Start the session
session_start();
$_FILES['avatar']="";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="jquery-2.1.4.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>

<header>
	<div id="divRegistro">
	<form action="#">
		Usuario: 
		<input type="text" id="usuario" title="Ingresá tu usuario" value="usuario" onfocus="limpiar(this);" /><br/>
		Contraseña:
		<input type="password" id="password"  onfocus="limpiar(this);"/><br/>
		<button type="submit" id="entrar" formaction="validar.php">Ingresar</button><br/><br/>
	</form>
	</div>
</header>
<nav>
	<ul  id="menu">
		<li><a href="index.php">Inicio</a></li>
		<li><a href="noticias.php">Noticias</a></li>
		<li><a href="bandas.php">Bandas</a></li>
	</ul>
</nav>
<main z-index="1">
<section id="seccionregistrarse"><p class="tituloseccion">Registrate para acceder a la mejor información.</br></br></p>
<article id="artnoti1">
	<form action="registrar.php" method="post" enctype="multipart/form-data">
	<table width="50%" align="center">
		<tr>
			<td class="textoderecha"><label for="nombre">Nombre</label></td>
			<td><input type="text" name="nombre" id="nombre" placeholder="Ingresá aquí tu nombre" ></td>
			<td width="200px;"></td>
		</tr>
		<tr>
			<td class="textoderecha"><label for="apellido">Apellido</label></td>
			<td><input type="text" name="apellido" id="apellido" placeholder="Ingresá aquí tu apellido"></td>
		</tr>
		<tr>
			<td class="textoderecha"><label for="usuario">Usuario</label></td>
			<td><input type="text" name="usuario" id="usuario" autofocus title="Ingresá un usuario para acceder al servicio" required><sup>*</sup>
			</td>
		</tr>
		<tr>
			<td class="textoderecha"><label for="contrasena">Contraseña</label></td>
			<td><input type="text" pattern="^[A-Za-z0-9_]{4,15}$" name="contrasena" id="contrasena" title="(mayúsculas, minúsculas, o números, 4 dígitos como mínimo)" onblur="contrasenias();" required><sup>*</sup></td>
		</tr>
		<tr>
			<td class="textoderecha"><label for="contrasena2">Confirma Contraseña</label></td>
			<td><input type="text" pattern="^[A-Za-z0-9_]{4,15}$" name="contrasena2" id="contrasena2" title="(mayúsculas, minúsculas, o números, 4 dígitos como mínimo)" onblur="contrasenias();" required><sup>*</sup></td><td id="errorcontra"></td>
		</tr>
		<tr>
			<td class="textoderecha"><label for="mail">E-mail</label></td>
			<td><input type="email" name="mail" id="mail" required><sup>*</sup></td>
		</tr>
		<tr>
			<td class="textoderecha"><label for="estilo">Estilo favorito</label></td>
			<td><input type="text" name="estilo" id="estilo"></td>
		</tr>
		<tr>
			<td class="textoderecha"><label for="avatar">Subir imagen de perfil</label></td>
			<td><!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
			    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
			    <input type="file" name="avatar" id="avatar"></td>
		</tr>
		<tr>
			<td></td><td><sup>*</sup> datos obligatorios.</td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" value="Enviar los datos"></td>
		</tr>
		</table>
	</form>
</article>

</main>
<footer>pie</footer>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</body>
</html>