<?php
session_start();
include "funciones.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel Administrador</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="jquery-2.1.4.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
</head>

<body>
<header>
	<div id="divRegistro">
		<p style="text-align:center; font-size:25px; color:red; font-weight:bold; text-transform: uppercase; text-shadow: 1px 2px 3px black"><br/>
			Panel del administrador <br/> =O
		</p>	
	</div>
</header>
<nav>
<!-- 	<ul id="menu">
		<li><a href="index.php">Inicio</a></li>
		<li><a href="noticias.php">Noticias</a></li>
		<li><a href="bandas.php">Bandas</a></li>
	</ul> -->
</nav>
<main>
	<section id="seccionprincipal" >
		<?php
		// SI SESION iniciada * doy la bienvenida y muestro al user/avatar.
		if ($_SESSION != null) { 
		?>
			<!-- LISTAR -->
			<article id="art1" >
				<h1>Listado de artículos de la sección NOTICIAS</h1>
				Muestra las últimas 2 noticias de "mostrar siempre",<br>
				luego muestra las últimas 3 noticias que no tienen "mostrar siempre".
				<?php
					$query="SELECT * FROM articulos;";
					$registros=mysqli_query($conexion, $query) 
					or die ("Problemas con la DB: " . mysqli_error($conexion));

					echo '<table border=1>';
					echo "<tr><th>ID</th><th>Título</th><th>Texto</th><th>Fecha</th><th>Imagen</th>
					<th>Mostrar Siempre</th></tr>";

					while ($reg=mysqli_fetch_array($registros)){
						echo "<tr><td>$reg[id]</td>";
						echo "<td>$reg[titulo]</td>";
						echo "<td>$reg[texto]</td>";
						echo "<td>$reg[fecha]</td>";
						echo "<td>";
							if (file_exists("noticias/$reg[id].jpg")) {
							echo "<img src=noticias/$reg[id].jpg  width='120px'><br/>";
							}
						echo "</td>";
						echo "<td>$reg[mostrarsiempre]</td></tr>";
					}
					echo "</table>";
					mysqli_close($conexion);


				?>
			</article>
			<!-- MODIFICAR -->
			<article id="art1" >
				<h1>Modificar artículos en la sección NOTICIAS</h1>
				<form action="adminmodificar.php" method="post" enctype="multipart/form-data">
				<table width="50%" align="center">
					<tr>
						<td class="textoderecha"><label for="id">#Id a modificar</label></td>
						<td><input type="text" name="id" id="id" required></td>
						<td width="200px;"></td>
					</tr>
					<tr>
						<td class="textoderecha"><label for="titulo">Título</label></td>
						<td><input type="text" name="titulo" id="titulo" placeholder="título de la noticia" required></td>
						<td width="200px;"></td>
					</tr>
					<tr>
						<td class="textoderecha"><label for="texto">Texto</label></td>
						<td><textarea name="texto" id="texto" placeholder="Ingresá aquí la noticia" required></textarea></td>
					</tr>
					<tr>
						<td class="textoderecha"><label for="mostrar">¿Mostrar siempre?</label></td>
						<td> 
						<input type="checkbox" name="mostrar" id="mostrar" >
						</td>
					</tr>
					<tr>
						<td class="textoderecha"><label for="imagen2">Imagen (opcional)</label></td>
						<td><!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
						    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
						    <input type="file" name="imagen2" id="imagen2"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" value="Enviar los datos"></td>
					</tr>
					</table>
				</form><br><br>
			</article>
			<!-- ELIMINAR -->
			<article id="art1" >
				<h1>Eliminar artículos en la sección NOTICIAS</h1>
				<form action="adminmodificar.php" method="post">
				<table width="50%" align="center">
					<tr>
						<td class="textoderecha"><label for="id">#Id a eliminar</label></td>
						<td><input type="text" name="id" id="id" required></td>
						<td width="200px;"> ¿Seguro?
						<input type="checkbox" id="borrar" name="borrar"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" value="Eliminar"></td>
					</tr>
					</table>
				</form><br><br>
			</article>
			<!-- AGREGAR -->
			<article id="art1" >
				<h1>Agregar artículos en la sección NOTICIAS</h1>
				<form action="adminagregar.php" method="post" enctype="multipart/form-data">
				<table width="50%" align="center">
					<tr>
						<td class="textoderecha"><label for="titulo">Título</label></td>
						<td><input type="text" name="titulo" id="titulo" placeholder="título de la noticia" required></td>
						<td width="200px;"></td>
					</tr>
					<tr>
						<td class="textoderecha"><label for="texto">Texto</label></td>
						<td><textarea name="texto" id="texto" placeholder="Ingresá aquí la noticia" maxlength="255" required></textarea></td>
					</tr>
					<tr>
						<td class="textoderecha"><label for="mostrar">¿Mostrar siempre?</label></td>
						<td> 
						<input type="checkbox" name="mostrar" id="mostrar" >
						</td>
					</tr>
					<tr>
						<td class="textoderecha"><label for="imagen">Imagen (opcional)</label></td>
						<td><!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
						    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
						    <input type="file" name="imagen" id="imagen"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" value="Enviar los datos"></td>
					</tr>
					</table>
				</form><br><br>
			</article>
	</section>	
	<aside id="costado">	
			<?php
				echo "<p style='text-align:center;margin: 10px auto;'> Bienvenido ".$_SESSION['user']." <br/>";
				if (file_exists("avatars/".$_SESSION['id_usuario'].".jpg")) {
						echo "<img src=avatars/".$_SESSION['id_usuario'].".jpg  width='120px'><br/>";
					}
				echo "<a href='index.php'>Volver a la página normal</a></p>";
				
			?>
	</aside>

	<?php } else { ?> <!-- NO SESIÓN iniciada * muestro los botones para iniciar/registrar -->
	
		<article id="art1" >
			<h1>Weeee.. ¿a donde vas?</h1>
			Tenes que estar registrado con cualquier usuario pa' ver esto.<br><br>

			<a href="index.php">Volver</a>
		</article>
	</section>
	<?php } ?>

		
<!--
CREATE TABLE `test`.`articulos`(  
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `titulo` VARCHAR(40),
  `texto` VARCHAR(255),
  `fecha` DATE,
  `imagen` VARCHAR(100),
  `mostrarsiempre` BOOLEAN
) CHARSET=utf8;

-->